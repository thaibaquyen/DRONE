<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use App\Models\danhmuc;
use App\Models\itemdanhmuc;

use Illuminate\Http\Request;

class Home extends Controller
{
    function getindex(){
        $datanew = sanpham::where('trangThai', 1)->get();
        $datahot = sanpham::where('trangThai', 2)->get();
        $menu = [];
        $danhmuc = danhmuc::all();

        foreach ($danhmuc as $key => $value) {
           $itemdanhmuc = itemdanhmuc::where('id_danhmuc', $value->id)->get();
           array_push($menu, [$value->id => $itemdanhmuc]);
        }
        // echo (json_encode($menu));
        return view('client/Home',['datanew' => $datanew, 'datahot' => $datahot, 'danhmuc'=>$danhmuc, 'menu'=>$menu]);
    }

    function singerProduct($masp) {
        $data = sanpham::where('maSp', $masp)->first();
        return view('client/Singer_Product',['data'=>$data]);
    }

    function detail(Request $request) {
        $masp = $request->masp;
        $data = sanpham::where('maSp', $masp)->first();
        return view('client/Detail_Product',['data'=>$data]);
    }
}
