<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TotalPoint extends Model
{
    use HasFactory;
    public function point()
    {
        return $this->belongsTo('App\Models\Point','id_point');
    }

public function totalpoint(){
      $tb_pelanggaran = DB::table('tb_pelanggaran')->select(
            ['nis','nama','kelas','wali_kelas' ,
              DB::raw('SUM(id_point) as point')
        ])
           
            ->groupBy('nis','nama','kelas','wali_kelas')
            ->get();
      }
}
