<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Siswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nis = Siswa::where('users_id',Auth::user()->id_user)->first();
                        // dd($nis);
                        $tb_pelanggaran = DB::table('tb_pelanggaran')->select(
                            ['nis','nama','kelas','wali_kelas' ,
                              DB::raw('SUM(id_point) as point')
                        ])
                           
                            ->groupBy('nis','nama','kelas','wali_kelas')
                            ->where('nis',$nis->nis)
                            ->get();
    
        return view('siswa.dashboard',compact('tb_pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        $nis = Siswa::where('users_id',Auth::user()->id_user)->first();
                        // dd($nis);
                        $tb_pelanggaran = DB::table('tb_pelanggaran')->select(
                            ['nis','nama','kelas','wali_kelas' ,'penanganan',
                              DB::raw('SUM(id_point) as point')
                        ])
                           
                            ->groupBy('nis','nama','kelas','wali_kelas','penanganan')
                            ->where('nis',$nis->nis)
                            ->get();
    
        $detail=Pelanggaran::where('siswa_id',$nis->id)->get();
        // dd($detail);
        return view('siswa.detail', compact('detail','tb_pelanggaran'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
