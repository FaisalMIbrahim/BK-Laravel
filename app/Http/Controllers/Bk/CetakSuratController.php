<?php

namespace App\Http\Controllers\Bk;


use PDF;

// use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CetakSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
            return view('bk.cetak.cetak', compact('siswa'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cetak(Request $request, $nis)
    {
        $data = DB::table('tb_pelanggaran')->select(
            ['nis','nama','kelas','wali_kelas' ,
              DB::raw('SUM(id_point) as point')
        ])
           
            ->groupBy('nis','nama','kelas','wali_kelas')
            ->where('nis', $nis)
            ->get();
        // dd($request->all());
        // $data = Siswa::where('nis', $nis)->get();
        // dd($data);
        $pdf = PDF::loadview('bk.cetak.data',['data' => $data]);
        //  dd($data);
        return $pdf->stream('Surat_Peringatan.pdf');
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
