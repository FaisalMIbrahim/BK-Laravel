<?php

namespace App\Http\Controllers\Bk;

use App\Models\Kelas;
use App\Models\Point;
use App\Models\Siswa;
use App\Models\Pendidik;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pelanggaran $pelanggaran)
    {
    //  dd($tb_pelanggaran);
      
        $tb_pelanggaran = Pelanggaran::all();
        $tb_point = Point::all();
        $tb_kelas = Kelas::all();
        $siswa = Siswa::all();
        $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
        $data['item'] = $pelanggaran;
        return view('bk.data_pelanggaran.index', compact('tb_pelanggaran','tb_kelas','tb_pendidik','tb_point','siswa'), $data);
    }
    public function tampil($id)
    {
            $data = Siswa::where('id', $id)->get();
            return response()->json($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search_pelanggaran(Request $request)
    {
        $tb_point = Point::all();
        $tb_kelas = Kelas::all();
        $siswa = Siswa::all();
        $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
     
        $keyword = $request->search;
        $tb_pelanggaran = Pelanggaran::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('bk.data_pelanggaran.index', compact('tb_pelanggaran','tb_kelas','tb_pendidik','tb_point','siswa'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_kejadian' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'id_point' => 'required',
            'keterangan' => 'required',
            'penanganan' => 'required',
           
        ]);
        // dd($request->all());

        $tb_pelanggaran = new Pelanggaran();
        $tb_pelanggaran->siswa_id =$request->siswa_id;
        $tb_pelanggaran->tgl_kejadian =$request->tgl_kejadian;
        $tb_pelanggaran->nis = $request->nis;
        $tb_pelanggaran->nama = $request->nama;
        $tb_pelanggaran->kelas = $request->kelas;
        $tb_pelanggaran->wali_kelas = $request->wali_kelas;
        $tb_pelanggaran->id_point = $request->id_point;
        $tb_pelanggaran->keterangan = $request->keterangan;
        $tb_pelanggaran->penanganan = $request->penanganan;
        $tb_pelanggaran->save();
        return redirect('pelanggaran')->with('success', 'Tambah Data Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        $request->validate([
            'tgl_kejadian' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'id_point' => 'required',
            'keterangan' => 'required',
            'penanganan' => 'required',
        ]);
        $pelanggaran->tgl_kejadian =$request->tgl_kejadian;
        $pelanggaran->nis = $request->nis;
        $pelanggaran->nama = $request->nama;
        $pelanggaran->kelas = $request->kelas;
        $pelanggaran->wali_kelas = $request->wali_kelas;
        $pelanggaran->id_point = $request->id_point;
        $pelanggaran->keterangan = $request->keterangan;
        $pelanggaran->penanganan = $request->penanganan;
        $pelanggaran->save();
        return redirect('pelanggaran')->with('success', 'Edit Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        $pelanggaran->delete();
        return redirect('pelanggaran')->with('success', 'Hapus Data Berhasil!');
    }
}
