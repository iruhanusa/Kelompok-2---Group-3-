<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Beranda(){
        return view('beranda.index');
    }
    public function Test(){
        return view('test.index');
    }
}
