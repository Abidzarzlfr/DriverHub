<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'Kendaraan';
    protected $primaryKey = 'kendaraan_id';
    
    protected $fillable = [
        'nomor_kendaraan',
        'nama_kendaraan',
        'created_by'
    ];

}
