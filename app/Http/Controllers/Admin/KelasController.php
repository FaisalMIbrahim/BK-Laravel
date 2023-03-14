<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Pendidik;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidik = Pendidik::get();
        $tb_kelas = Kelas::all();
        return view ('admin.data_kelas.index', compact('tb_kelas', 'pendidik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public static function autonumber(Request $request){
    //   $auto = mysql_query("select max(kd_kelas) as max_code from tb_kelas");
    //   $data = mysql_fetch_array($auto);
    //   $code = $data['max_code'];
    //   $urutan = (int) substr($code ,1, 3);
    //   $urutan++;
    //   $huruf = "K";
    //   $kd_kel = $huruf. sprintf("%03s", $urutan);

    //   return view ('admin.data_kelas.create',compact('kd_kel'));
    // }

    public function search_kelas(Request $request)
    {
        $keyword = $request->search;
        $pendidik = User::where('role_user' , 3 )->get();
        $tb_kelas = Kelas::where('kelas', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.data_kelas.index', compact('tb_kelas','pendidik'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
      
  
        return view ('admin.data_kelas.create');
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
            'kd_kelas' => 'required',
            'kelas' => 'required',
            'pendidik_id' => 'required'
          
        ]);

        $kelas = new Kelas();
        $kelas->kd_kelas =$request->kd_kelas;
        $kelas->kelas = $request->kelas;
        $kelas->pendidik_id = $request->pendidik_id;
        $kelas->save();
        return redirect('kelas')->with('success', 'Tambah Data Berhasil!');
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
    public function edit( $id)
    {
        $kelas = Kelas::find($id);
      
        return view ('admin.data_kelas.edit', compact('kelas'));
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
        $request->validate([
            'kd_kelas' => 'required',
            'kelas' => 'required',
            'pendidik_id' => 'required',
          
        ]);

        $kelas = Kelas::find($id);
        $kelas->kd_kelas =$request->kd_kelas;
        $kelas->kelas = $request->kelas;
        $kelas->pendidik_id = $request->pendidik_id;
        $kelas->save();
        return redirect('kelas')->with('success', 'Edit Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $id = Kelas::find($id)->delete();
        return redirect('kelas')->with('success', 'Hapus Data Berhasil!');
    }
}
