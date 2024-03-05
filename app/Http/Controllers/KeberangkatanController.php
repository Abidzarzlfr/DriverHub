<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Keberangkatan;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use App\Models\Kota;
use App\Models\Kendaraan;
use App\Models\Karyawan;
use App\Models\Penumpang;
use App\Models\Divisi;

class KeberangkatanController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $keberangkatan = Keberangkatan::with(['kendaraan', 'driver'])->get();
            return view('front-end.layouts.user-admin.keberangkatan', compact('keberangkatan'));
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
    public function add(Request $request)
    {
        $driver = Driver::all();
        $kota = Kota::all();
        $kendaraan = Kendaraan::all();
        $karyawan = Karyawan::all();
        $penumpang = Penumpang::all();
        $divisi = Divisi::all();

        return view('front-end.layouts.admin.add-keberangkatan',compact('driver', 'kota', 'kendaraan','karyawan','penumpang','divisi'));
    }

    public function store(Request $request)
    {
        // echo $request;
        if (Auth::check()) {
            Keberangkatan::create([
                'kendaraan_id' => $request->nama_kendaraan,
                'driver_id' => $request->driver_id,
                'keberangkatan'=> $request->keberangkatan,
                'tujuan'=> $request->tujuan,
                'jam'=> $request->jam,
                'tanggal'=> $request->tanggal,
                'keterangan'=> $request->keterangan,
                'kode'=> $request->kode,
                'created_by' => auth()->user()->user_id
            ]);
            return redirect('keberangkatan');
        }else{
            return view('front-end.layouts.admin.login');
        }

    }

    public function edit(Keberangkatan $keberangkatan)
    {
        $driver = Driver::all();
        $kota = Kota::all();
        $kendaraan = Kendaraan::all();
        $karyawan = Karyawan::all();
        $penumpang = Penumpang::all();
        $divisi = Divisi::all();

        return view('front-end.layouts.admin.edit-keberangkatan', compact('keberangkatan','driver','kota','kendaraan','karyawan','penumpang'));
    }

    public function destroy(Keberangkatan $keberangkatan)
    {
        $keberangkatan->delete();
        return view('front-end.layouts.admin.delete')->with('success', 'Data keberangkatan berhasil dihapus.');
    }

    // public function show():
    // {
    //     if (Auth::check()) {
    //         $keberangkatan = Keberangkatan::with(['kendaraan', 'driver','penumpang','karyawan'])->get();
    //         return view('front-end.layouts.user-admin.detail', compact('keberangkatan'));
    //     }else{
    //         return view('front-end.layouts.admin.login');
    //     }
    // }

    

    
}
