<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    use HasFactory;
    protected $table = 'pendidiks';

    protected $fillable =[
        'users_id',
        'nama',
         'alamat',
         'jenis_kelamin',
         'no_hp',
         'jabatan',
 
     ];
}
