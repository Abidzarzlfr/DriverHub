<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('front-end.layouts.user-admin.about');
        // return view('front-end.layouts.admin.tabel-master.input-data-penumpang');
        // return view('front-end.layouts.admin.tabel-master.input-data-kendaraan');
        // return view('front-end.layouts.admin.tabel-master.input-data-driver');
    }
}
