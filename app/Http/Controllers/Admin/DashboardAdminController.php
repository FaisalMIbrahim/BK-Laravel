<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\pendidik;
use App\Models\Siswa;


class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();
        $user = User::count();
        $tb_pendidik = Pendidik::count();
        $tb_siswa = Siswa::count();

        return view('admin.dashboard', compact('users','tb_pendidik', 'tb_siswa','user'));
    }


}
