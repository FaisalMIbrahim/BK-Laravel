<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Pendidik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_pendidik = Pendidik::all();
        $user = User::whereIn('role_user' ,   [2, 3] )->get();
        return view('admin.data_pendidik.index', compact('tb_pendidik', 'user'));
    }
    public function tampil($id)
    {
            $data = User::where('id_user', $id)->get();
            return response()->json($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search_pendidik(Request $request)
    {
        $keyword = $request->search;
        $user = User::whereIn('role_user', [2, 3])->get();
        $tb_pendidik = Pendidik::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.data_pendidik.index', compact('tb_pendidik','user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        // $data['title'] = 'Tambah Pendidik';
        // $data['jenis_kelamin'] = ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'];
        // return view('admin.data_pendidik.create', $data);
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
          
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required',
        ]);
// dd($request);
        $tb_pendidik = new Pendidik();
        $tb_pendidik->users_id =$request->users_id;
        $tb_pendidik->nama = $request->nama;
        $tb_pendidik->alamat = $request->alamat;
        $tb_pendidik->jenis_kelamin = $request->jenis_kelamin;
        $tb_pendidik->no_hp = $request->no_hp;
        $tb_pendidik->jabatan = $request->jabatan;
        $tb_pendidik->save();
        return redirect('pendidik')->with('success', 'Tambah Data Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidik $pendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidik $pendidik)
    {
        // $data['title'] = 'Edit Pendidik';
        // $data['item'] = $pendidik;
        // $data['jenis_kelamin'] = ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'];
        // return view('admin.data_pendidik.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidik $pendidik)
    {
        $request->validate([
          
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'jabatan' => 'required',
        ]);

    //   dd($request);
      
        $pendidik->users_id =$request->users_id;
        $pendidik->nama = $request->nama;
        $pendidik->alamat = $request->alamat;
        $pendidik->jenis_kelamin = $request->jenis_kelamin;
        $pendidik->no_hp = $request->no_hp;
        $pendidik->jabatan = $request->jabatan;
        $pendidik->save();
        return redirect('pendidik')->with('success', 'Edit Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidik $pendidik)
    {
        $pendidik->delete();
        return redirect('pendidik')->with('success', 'Hapus Data Berhasil!');
    }
}
