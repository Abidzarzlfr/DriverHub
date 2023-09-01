<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    
    protected $fillable = [
        'nama',
        'email',
        'password'
    ];


}
