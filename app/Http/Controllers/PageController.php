<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "NIM: 2041720195, Nama: Novitasari";
    }
    public function articles($id){
        return "Halaman Artikel dengan Id ".$id;
    }
}
