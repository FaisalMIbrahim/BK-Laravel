<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'point';
    protected $fillable = [
        'point', 'keterangan'
     ];

    public function pelanggaran(){
        return $this->hasOne('App\Models\Pelanggaran');
    }
    
    public function totalpoint(){
        return $this->hasOne(TotalPoint::class);
    }
}
