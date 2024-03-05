<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Divisi;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function index()
    {
        {
            if (Auth::check()) {
                $karyawan = Karyawan::all();
                return view('front-end.layouts.user-admin.karyawan', compact('karyawan'));
            }else{
                return view('front-end.layouts.admin.login');
            }
        }
    }

    public function add(Request $request)
    {
     
        if (Auth::check()) {
            $divisi = Divisi::all();
            return view('front-end.layouts.admin.tabel-master.input-data-karyawan', compact('divisi'));
        }else{
            return view('front-end.layouts.admin.login');
        }
        
    }


    public function store(Request $request)
    {
        if (Auth::check()) {
            Karyawan::create([
                'nama_karyawan'  => $request->nama_karyawan,
                'divisi_id' => $request->divisi_id,
                'npk' => $request->npk,
                'created_by' => auth()->user()->user_id
            ]);
            return redirect('karyawan');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
}
