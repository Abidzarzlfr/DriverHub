<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('front-end.layouts.about');
        // return view('front-end.layouts.admin.tabel-master.input-data-karyawan');
        // return view('front-end.layouts.admin.tabel-master.input-data-kendaraan');
        // return view('front-end.layouts.admin.tabel-master.input-data-driver');
    }
}
