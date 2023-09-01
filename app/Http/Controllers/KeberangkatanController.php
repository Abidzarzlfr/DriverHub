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
    public function store(Request $request)
    {
        // $data = new Keberangkatan();
        // $driver = Driver::find(request->nama_driver);
        // $kota = Kota::find(request->nama_kota);
        // $kendaraan = Kendaraan::find(request->nama_kendaraan);
        // $karyawan = Karyawan::find(request->nama_karyawan);
        // $penumpang = Penumpang::find(request->karyawan_id);
        // $divisi = Divisi::find(request->nama_divisi);
        // $data->nama_driver = $$driver->nama_driver;
        // $data->nama_kendaraan = $kendaraan->nama_kendaraan;
        // $data->tujuan = $kota->nama_kota;
        // $data->jam = request->jam;
        // $data->kode = request->kode;
        // $data->tanggal = request->tanggal;
        // $data->jumlah_penumpang = request->jumlah_penumpang;
        // $data->tujuan = $kota->nama_kota;
        // $data->keberangkatan = $kota->nama_kota;
        // $data->divisi = $divisi->nama_divisi;


        // $data->save();
        // return view('front-end.layouts.admin.add-keberangkatan',compact($data));

        $driver = Driver::all();
        $kota = Kota::all();
        $kendaraan = Kendaraan::all();
        $karyawan = Karyawan::all();
        $penumpang = Penumpang::all();
        $divisi = Divisi::all();

        return view('front-end.layouts.admin.add-keberangkatan',compact('driver', 'kota', 'kendaraan','karyawan','penumpang','divisi'));
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

    

    
}
