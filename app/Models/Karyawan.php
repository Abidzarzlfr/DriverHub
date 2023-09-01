<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'karyawan_id';
    
    protected $fillable = [
        'nama_karyawan',
        'divisi_id',
        'npk',
        'created_by'
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'divisi_id'); // links this->id to events.course_id
    }


}
