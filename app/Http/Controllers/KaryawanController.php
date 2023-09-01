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
        $karyawan = Karyawan::all();
        $divisi = Divisi::all();
        return view('front-end.layouts.admin.tabel-master.input-data-karyawan', compact('karyawan','divisi'));
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
            return redirect('input-data-karyawan');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
}
