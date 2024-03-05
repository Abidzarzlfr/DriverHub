<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Keberangkatan;
use Illuminate\Support\Facades\Auth;

class LiveDataController extends Controller
{
    public function index()
    {
        
            $drivers = Driver::all();
            $keberangkatan = Keberangkatan::with(['kendaraan', 'driver'])->get();
            return view('front-end.layouts.user-admin.live-data', compact('drivers', 'keberangkatan'));
        
    }
}
