<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\PendidikController;
use App\Http\Controllers\Admin\PointController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Bk\PelanggaranController;
use App\Http\Controllers\Bk\TotalPointController;
use App\Http\Controllers\Bk\CetakSuratController;
use App\Http\Controllers\Bk\DashboardBkController;
use App\Http\Controllers\Bk\LaporanController;
use App\Http\Controllers\Siswa\DashboardsiswaController;
use App\Http\Controllers\Wali_kelas\DashboardWalikelasController;


Route::get('/', function (){
    return view('auth.login');
});


//Login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login',[AuthController::class, 'login'])->name('login-post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


//admin
Route::get('admin.dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
Route::resource('user', UserController::class);
Route::get('/search_user', [UserController::class, 'search_user'])->name('search_user');
Route::resource('siswa', SiswaController::class);
Route::get('siswa.index', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/search', [SiswaController::class, 'search_siswa'])->name('search_siswa');
Route::resource('pendidik', PendidikController::class);
Route::get('/search_pendidik', [PendidikController::class, 'search_pendidik'])->name('search_pendidik');
Route::resource('point', PointController::class);
Route::get('/search_point', [PointController::class, 'search_point'])->name('search_point');
Route::resource('kelas', KelasController::class);
Route::get('/search_kelas', [KelasController::class, 'search_kelas'])->name('search_kelas');


//BK
Route::get('bk.dashboard', [DashboardBkController::class, 'index'])->name('bk.dashboard');
Route::resource('pelanggaran', PelanggaranController::class);
Route::get('/search_pelanggaran', [PelanggaranController::class, 'search_pelanggaran'])->name('search_pelanggaran');
Route::resource('total_point', TotalPointController::class);
Route::get('/search_total', [TotalpointController::class, 'search_total'])->name('search_total');
Route::resource('cetak', CetakSuratController::class);
Route::resource('laporan', LaporanController::class);
Route::get('/cetak_suratpdf/{nis}', [CetakSuratController::class, 'cetak'])->name('cetak_suratpdf');


//Laporan
Route::get('cetak_pdf/{awal}/{akhir}', [LaporanController::class, 'cetak_pdf'])->name('cetak.pdf');
Route::get('cetaklaporan/{awal}/{akhir}', [LaporanController::class, 'cetaklaporan'])->name('cetak.laporan');
Route::get('/ada_pelanggaran/{tgl_awal}/{tgl_akhir}', [LaporanController::class, 'adapelanggaran'])->name('ada_pelanggaran');
Route::get('/tidakada_pelanggaran/{tgl_awal}/{tgl_akhir}', [LaporanController::class, 'tidakadapelanggaran'])->name('tidakada_pelanggaran');


//WaliKelas
Route::get('wali.dashboard', [DashboardWalikelasController::class, 'index'])->name('wali.dashboard');
Route::get('/lihat_data/', [DashboardWalikelasController::class, 'lihat_data'])->name('lihat_data');


//Siswa
Route::resource('dashboard_siswa', DashboardsiswaController::class);
Route::get('siswa_detail', [DashboardsiswaController::class, 'detail'])->name('siswa.detail');


//JQUERY
Route::get('/getsiswa/{id}', [PelanggaranController::class, 'tampil'])->name('getsiswa');
Route::get('/getuser/{id}', [SiswaController::class, 'tampil'])->name('getuser');
Route::get('/getpendidik/{id}', [PendidikController::class, 'tampil'])->name('getpendidik');


