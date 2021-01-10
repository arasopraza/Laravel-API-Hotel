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
        return view('/hotel');
    }

    public function pesawat()
    {
        return view('/pesawat');
    }

}
