<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'users_id','nis', 'nama', 'alamat', 'kelas', 'jenis_kelamin', 'no_hp', 'wali_murid'
    ];
}
