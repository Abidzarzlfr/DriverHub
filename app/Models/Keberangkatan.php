<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberangkatan extends Model
{
    use HasFactory;
    protected $table = 'keberangkatan';
    protected $primaryKey = 'keberangkatan_id';
    
    protected $fillable = [
        'kendaraan_id',
        'driver_id',
        'keberangakatan',
        'tujuan',
        'jam',
        'tanggal',
        'keterangan',
        'kode',
        'created_by'
    ];
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'kendaraan_id'); // links this->id to events.course_id
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'driver_id'); // links this->id to events.course_id
    }
}
