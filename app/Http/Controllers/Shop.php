<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\danhmuc;
use App\Models\itemdanhmuc;
use Illuminate\Pagination\Paginator;

class Shop extends Controller
{
    function getindexsearch($id){
        if(isset($id)){
            $data = sanpham::where('loai', $id)->simplePaginate(8);
            return view('client/Shop',['data' => $data]); 
        } else {
            $data = sanpham::simplePaginate(8);
            return view('client/Shop',['data' => $data]); 
        }
    }

    function getindex(){
        $data = sanpham::simplePaginate(8);
        return view('client/Shop',['data' => $data]); 
    }
}
