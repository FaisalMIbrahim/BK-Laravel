<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Pendidik;
use App\Models\User;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_kelas = Kelas::all();
        $user = User::where('role_user', 4)->get();
        $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
        $tb_siswa = Siswa::all();
        
        return view ('admin.data_siswa.index', compact('tb_siswa', 'user', 'tb_pendidik', 'tb_kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil($id)
    {
            $data = User::where('id_user', $id)->get();
            return response()->json($data);

    }

    public function search_siswa(Request $request)
    {   
        $tb_kelas = Kelas::all();
        $user = User::where('role_user', 4)->get();
        $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
       
        $keyword = $request->search;
        $tb_siswa = Siswa::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.data_siswa.index', compact('tb_siswa','user', 'tb_pendidik', 'tb_kelas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        // $tb_kelas = Kelas::all();
        // $user = User::where('role_user', 4)->get();
        // $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
       
        // return view('admin.data_siswa.create',  compact('tb_kelas','tb_pendidik','user',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'wali_murid' => 'required',
            'wali_kelas' => 'required',
           
        ]);

        // dd($request->all());

        $tb_siswa = new Siswa();
        $tb_siswa->users_id =$request->users_id;
        $tb_siswa->nis =$request->nis;
        $tb_siswa->nama = $request->nama;
        $tb_siswa->alamat = $request->alamat;
        $tb_siswa->kelas = $request->kelas;
        $tb_siswa->jenis_kelamin = $request->jenis_kelamin;
        $tb_siswa->no_hp = $request->no_hp;
        $tb_siswa->wali_murid = $request->wali_murid;
        $tb_siswa->wali_kelas = $request->wali_kelas;
 
        $tb_siswa->save();
        return redirect('siswa')->with('success', 'Tambah Data Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        // $data['title'] = 'Edit Siswa';
        // $tb_kelas = Kelas::all();
        // $tb_pendidik = Pendidik::where('jabatan', 'Wali Kelas')->get();
        // $data['item'] = $siswa;

        // return view('admin.data_siswa.edit', compact('tb_kelas','siswa', 'tb_pendidik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'wali_murid' => 'required',
            'wali_kelas' => 'required',
        ]);

        $siswa->users_id =$request->users_id;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->no_hp = $request->no_hp;
        $siswa->wali_murid = $request->wali_murid;
        $siswa->wali_kelas = $request->wali_kelas;
        $siswa->save();
        return redirect('siswa')->with('success', 'Edit Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect('siswa')->with('success', 'Hapus Data Berhasil!');
    }
}