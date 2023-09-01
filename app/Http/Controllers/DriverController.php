<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        $driver = Driver::all();
        return view('front-end.layouts.admin.tabel-master.input-data-driver', compact('driver'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Driver::create([
                'nama_driver'  => $request->nama_driver,
                'divisi_id' => $request->divisi_id,
                'npk' => $request->npk,
                'created_by' => auth()->user()->user_id
            ]);
            return redirect('input-data-driver');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
}
