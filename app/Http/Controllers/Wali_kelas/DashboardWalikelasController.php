<?php

namespace App\Http\Controllers\Wali_kelas;


use App\Models\Pelanggaran;
use App\Models\Pendidik;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardWalikelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidik = Pendidik::where('users_id',Auth::user()->id_user)->first();
        // dd($pendidik);
        $kelas = Kelas::where('pendidik_id', $pendidik->id)->first();
        // dd($kelas);
        $tb_pelanggaran = Pelanggaran::where('kelas', $kelas->kelas)->get();
        $clas = Pelanggaran::where('kelas', $kelas->kelas)->count();
        // dd($tb_pelanggaran);
        $kelas = DB::table('tb_pelanggaran')->select(
            ['nis','nama','kelas','penanganan' , 
              DB::raw('SUM(id_point) as id_point')
        ])
           
            ->groupBy('nis','nama','kelas','penanganan')
            ->where('wali_kelas',$pendidik->nama)
            ->count();

            return view('walikelas.dashboard', compact('kelas','clas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihat_data()
    {
        $pendidik = Pendidik::where('users_id',Auth::user()->id_user)->first();
      
        $kelas = Kelas::where('pendidik_id', $pendidik->users_id)->first();
      
        $tb_pelanggaran = Pelanggaran::where('kelas', $kelas)->get();
        

        $point = DB::table('tb_pelanggaran')->select(
            ['nis','nama','kelas','wali_kelas' ,
              DB::raw('SUM(id_point) as id_point')
        ])
           
            ->groupBy('nis','nama','kelas','wali_kelas')
            ->where('wali_kelas',$pendidik->nama)
            ->get();
        
        // dd($point);
        //     dd($tb_pelanggaran);
        return view('walikelas.kelas', compact('point'));
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
