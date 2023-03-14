<?php

namespace App\Http\Controllers\Bk;

use App\Models\TotalPoint;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TotalPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      

     
        $tb_pelanggaran = DB::table('tb_pelanggaran')->select(
            ['nis','nama','kelas','wali_kelas' ,
              DB::raw('SUM(id_point) as point')
        ])
           
            ->groupBy('nis','nama','kelas','wali_kelas')
            ->get();
            // $tb_pelanggaran = Pelanggaran::all();
    //  dd($tb_pelanggaran);
        return view('bk.total_point.index', compact('tb_pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search_total(Request $request)
    {
        $keyword = $request->search;
        $tb_pelanggaran = Pelanggaran::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('bk.total_point.index', compact('tb_pelanggaran'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TotalPoint  $totalPoint
     * @return \Illuminate\Http\Response
     */
    public function show(TotalPoint $totalPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TotalPoint  $totalPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(TotalPoint $totalPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TotalPoint  $totalPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TotalPoint $totalPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TotalPoint  $totalPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(TotalPoint $totalPoint)
    {
        $totalPoint->delete();
        return redirect('total_point')->with('success', 'Hapus Data Berhasil');
    }
}
