<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_point = Point::all();
        return view('admin.data_point.index', compact('tb_point'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search_point(Request $request)
    {
        $keyword = $request->search;
        $tb_point = Point::where('point', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.data_point.index', compact('tb_point'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
      
       
        // return view('admin.data_point.create');
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
            'point' => 'required',
            'keterangan' => 'required',
           
        ]);

        $tb_point = new Point();
        $tb_point->point = $request->point;
        $tb_point->keterangan = $request->keterangan;
       
        $tb_point->save();
        return redirect('point')->with('success', 'Tambah Data Behasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show(Point $point)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit(Point $point)
    {
        // $data['item'] = $point;
        // return view('admin.data_point.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        $request->validate([
            'point' => 'required',
            'keterangan' => 'required',
           
        ]);

      
        $point->point = $request->point;
        $point->keterangan = $request->keterangan;
        $point->save();
        return redirect('point')->with('success', 'Edit Data Behasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function destroy(Point $point)
    {
        $point->delete();
        return redirect('point')->with('success', 'Hapus Data Berhasil!');
    }
}
