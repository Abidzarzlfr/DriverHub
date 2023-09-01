<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Auth;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('front-end.layouts.admin.tabel-master.input-data-kendaraan', compact('kendaraan'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Kendaraan::create([
                'nama_kendaraan'  => $request->nama_kendaraan,
                'nomor_kendaraan' => $request->nomor_kendaraan,
                'created_by' => auth()->user()->user_id
            ]);
            return redirect('input-data-kendaraan');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
}
