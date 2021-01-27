<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use DB;
use Mail;

class Login extends Controller
{
    function login(Request $request) {
        $email = $request->emaillogin;
        $pass = $request->passwordlogin; 
       
        if (Auth::attempt(['email'=>$email, 'password'=>$pass])) {
            return redirect('/home');
        }else{
            return view('client/login');
        }
    }

    function register(Request $request) {
        $user = new User;
        $password = $request->password;
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;
        $pass = bcrypt($password);
        $address = $request->address;
        $zip_code = rand(1000,9999);
        $datauser = ["name"=>$name, 'tel'=>$tel, 'email'=>$email, 'pass'=>$pass, 'password'=>$password, 'address'=>$address, 'zip' => $zip_code];
        Cache::put('createuser', $datauser, 100);
        $data = [
            "email" => $email,
            "zip" => $zip_code
        ];
        Mail::send('mail', $data, function($message){
            $message->from('baquyendhv@gmail.com', 'Drone');
            $message->to('quyenthai59@gmail.com', 'You');
            $message->Subject('Create User Store Drone');
        });

        return view('client/CountDown', ['email'=>$email]);
        // DB::table('user')->insert(['tenUser' => $name,'email' => $email, 'password' => $pass, 'sdt'=>$tel, 'diaChi'=>$address]);
        // if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
        //     return redirect('/home');
        // }else{
        //     return view('client/login');
        // }
    }

    public function confirmzip(Request $request) {
        $zip = $request->zip;
        $data = Cache::get('createuser');
        if($zip == $data['zip']) {
            DB::table('user')->insert(['tenUser' => $data['name'],'email' => $data['email'], 'password' => $data['pass'], 'sdt'=>$data['tel'], 'diaChi'=>$data['address']]);
            
            if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
                $request->session()->put('user', Auth::user());
                return redirect('/home');
            }else{
                return view('client/login');
            }
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Cache::flush();
        return redirect('/home');
    }
}
