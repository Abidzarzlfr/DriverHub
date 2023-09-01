<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $table = 'penumpang';
    protected $primaryKey = 'penumpang_id';
    
    protected $fillable = [
        'keberangkatan_id',
        'karyawan_id',
        'created_by'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'karyawan_id'); // links this->id to events.course_id
    }
}
