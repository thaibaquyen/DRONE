<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\danhmuc;
use App\Models\itemdanhmuc;
use Illuminate\Support\Facades\Cache;

class Cart extends Controller
{
    function index(Request $resquest) {
        if (Cache::has('Cart')) {
            $data = Cache::get('Cart');
            $tongtien = 0;
            foreach ($data as $key => $value) {
                $tongtien += (($value['sl']) * ($value['gia']));
            }

            return view('client/Cart', ['data'=>$data, 'money'=>$tongtien]);
        } else {
            return view('client/Cart');
        }
    }

    function cartchild(Request $resquest) {
        if (Cache::has('Cart')) {
            $data = Cache::get('Cart');
            $tongtien = 0;
            foreach ($data as $key => $value) {
                $tongtien += (($value['sl']) * ($value['gia']));
            }

            return view('client/CartChild', ['data'=>$data, 'money'=>$tongtien]);
        } else {
            return view('client/CartChild');
        }
    }

    function addcart(Request $resquest) {
        $masp = $resquest->masp;
        // Cache::flush();
        // $masp = "BG01";
        $check = false;
        $key1 = 0;
        if (Cache::has('Cart')) {
            $dataall = Cache::get('Cart');
            // echo json_encode($data);
            foreach ($dataall as $key => $value) {
                if ($value['maSp'] == $masp) {
                    $check = true;
                    $key1 = $key;
                    break;
                    // echo json_encode($value);
                }
            }
            if ($check) {
                $dataall[$key1]['sl'] += 1;
                Cache::put('Cart', $dataall, 1000);
                // $dataall[$key]->sl =  $dataall[$key]->sl + 1;
            } else {
                $data = sanpham::where('maSp', $masp)->first();
                $tien = $data->gia * ((100 - $data->giamGia)/100);
                $item = ['maSp'=>$data->maSp, 'tenSp' => $data->tenSp, 'sl' => 1, 'gia'=> $tien, 'img' => $data->hinhAnh];
                array_push($dataall, $item);
                Cache::put('Cart', $dataall, 1000);
            }
        } else {
            $dataall = array();
            $data = sanpham::where('maSp', $masp)->first();
            $tien = $data->gia * ((100 - $data->giamGia)/100);
            $item = ['maSp'=>$data->maSp, 'tenSp' => $data->tenSp, 'sl' => 1, 'gia'=> $tien, 'img' => $data->hinhAnh];
            array_push($dataall, $item);
            Cache::put('Cart', $dataall, 1000);
        }

        return json_encode(Cache::get('Cart'));
    }

    function updatecart(Request $resquest) {
        $key = $resquest->key;
        $sl = $resquest->sl;
        if (Cache::has('Cart')) {
            $dataall = Cache::get('Cart');
            $dataall[$key]['sl'] = $sl;
            Cache::put('Cart', $dataall, 1000);
        }
    }

    function removecart(Request $resquest) {
        $key = $resquest->key;
        if (Cache::has('Cart')) {
            $dataall = Cache::get('Cart');
            unset($dataall[$key]);
            Cache::put('Cart', $dataall, 1000);
        }
    }

    function buy(Request $resquest){
        
    }
}
