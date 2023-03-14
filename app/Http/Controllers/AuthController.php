<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{


public function index(){
        return view('auth.login');
    }


public function login(Request $request){
        $request->validate([
        'nis' => 'required',
        'password' => 'required'
        ]);

        $user = User::where('nis', $request->nis)->first();

        if($user){
            if (Auth::attempt(['nis' => $request->nis, 'password' => $request->password])){
                if($user->status == 1){
                    if($user->role_user == 1){
                        return redirect('admin.dashboard');
                        }elseif($user-> role_user == 2){
                            return redirect('bk.dashboard');
                    }elseif($user->role_user == 3){
                        return redirect('wali.dashboard');
                    }elseif($user->role_user == 4){
                        $nis = Siswa::where('users_id',Auth::user()->id_user)->first();
                        // dd($nis);
                        $tb_pelanggaran = DB::table('tb_pelanggaran')->select(
                            ['nis','nama','kelas','wali_kelas' ,
                              DB::raw('SUM(id_point) as point')
                        ])
                           
                            ->groupBy('nis','nama','kelas','wali_kelas')
                            ->where('nis',$nis->nis)
                            ->get();
                            // dd($tb_pelanggaran);
                        return view('siswa.dashboard', compact('tb_pelanggaran'));
                    }
                }
                else{
                    return redirect()->back()->with('login','Akun Tidak Aktif');
                }
                
             }
                else{
                    return redirect()->back()->with('login', 'Password Salah');
                }
            }
            else{
                return redirect()->back()->with('login', 'Username Tidak Terdaftar');
        }
        
    }
public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'berhasil logout');

    }
}
