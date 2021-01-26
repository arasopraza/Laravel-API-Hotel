<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function hotel()
    {
        return view('hotel');
    }

    public function pesawat()
    {
        return view('/pesawat');
    }

    public function query(Request $request){
        $this->validate($request,[
                   'cari' => 'required'
                ]);
        return view('hasil_pencarian',['data' => $request]);
    }

    public function detail(){
        return view('detail_hotel');
    }

    // public function input()
    // {
    //     return view('input');
    // }
 
    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'cari' => 'required'
    //     ]);
 
    //     return view('proses',['data' => $request]);
    // }
}
