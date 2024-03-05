<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Divisi;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        {
            if (Auth::check()) {
                $driver = Driver::all();
                return view('front-end.layouts.user-admin.driver', compact('driver'));
            }else{
                return view('front-end.layouts.admin.login');
            }
        }
    }

    public function add(Request $request)
    {
     
        if (Auth::check()) {
            return view('front-end.layouts.admin.tabel-master.input-data-driver');
        }else{
            return view('front-end.layouts.admin.login');
        }
        
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Driver::create([
                'nama_driver'  => $request->nama_driver,
                'divisi_id' => $request->divisi_id,
                'npk' => $request->npk,
                'status' => 'Ready',
                'created_by' => auth()->user()->user_id
            ]);
            return redirect('driver');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
}
