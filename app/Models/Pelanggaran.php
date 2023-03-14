<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggaran';
    protected $fillable =[
        'siswa_id',
        'tgl_kejadian',
         'nis',
         'nama',
         'kelas',
         'walikelas_id',
         'id_point'
 
     ];

     public function point()
     {
         return $this->belongsTo('App\Models\Point', 'id_point');
     }
     public function pendidik()
     {
         return $this->belongsTo('App\Models\Pendidik', 'walikelas_id');
     }
    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa','siswa_id');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas');
    }
}
