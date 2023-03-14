<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    protected $fillable = ['kd_kelas', 'kelas', 'pendidik_id'];
    
    public function pendidik()
    {
        return $this->belongsTo('App\Models\Pendidik', 'pendidik_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'pendidik_id');
    }
}
