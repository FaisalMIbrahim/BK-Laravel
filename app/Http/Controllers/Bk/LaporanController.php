<?php

namespace App\Http\Controllers\Bk;

use PDF;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller

    {
        public function index(){
            return view('bk.Laporan.index');
        }
    
        public function cetak_pdf($dari,$sampai){
            // dd($dari,$sampai);
            $laporan = Pelanggaran::whereBetween('created_at', [$dari, $sampai])
                            ->where('id_point', '=', 0)
                            ->get();
            // $custume = array(0,0,800,800);
            $pdf = PDF::loadview('bk.Laporan.cetaklaporan', compact('laporan','dari','sampai'));
            return $pdf->stream('Laporan.pdf');
            
        }
        public function cetaklaporan($dari,$sampai){
            // dd($dari,$sampai);
            $laporan = Pelanggaran::whereBetween('created_at', [$dari, $sampai])
                            ->where('id_point', '>', 0)
                            ->get();
            // $custume = array(0,0,800,800);
            $pdf = PDF::loadview('bk.Laporan.cetaklaporan', compact('laporan','dari','sampai'));
            return $pdf->stream('Laporan.pdf');
            
        }
        public function adapelanggaran(Request $request, $tgl_awal, $tgl_akhir)
        {
           
            $awal = $request->tgl_awal;
            $akhir = $request->tgl_akhir;
            // $pelanggaran = Pelanggaran::where('id_point', '>=', 0)->get();
            $pelanggaran = Pelanggaran::whereBetween('created_at', [$awal, $akhir])
                            ->where('id_point', '>', 0)
                            ->get();
            // dd($pelanggaran);
            return view('Bk.Laporan.filter2', compact('pelanggaran', 'awal','akhir'));

        }
        public function tidakadapelanggaran(Request $request,$tgl_awal, $tgl_akhir)
        {
            //  dd(["tanggal awal : ".$tgl_awal,"tanggal akhir" .$tgl_akhir]);
            $awal = $request->tgl_awal;
            $akhir = $request->tgl_akhir;
            // $pelanggaran = Pelanggaran::where('id_point', '>=', 0)->get();
            $pelanggaran = Pelanggaran::whereBetween('created_at', [$awal, $akhir])
                            ->where('id_point', '<', 1)
                            ->get();
            // dd($pelanggaran);
            return view('Bk.Laporan.filter', compact('pelanggaran', 'awal','akhir'));

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
    // public function store(Request $request)
    // {
        
    // }

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
