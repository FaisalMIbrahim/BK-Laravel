@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
      <div class="section-body">
            <div class="card">
              <div class="card-body">
                     <h5 class="text-black"> Selamat Datang {{ Auth::user()->nama_lengkap  }}</h5>
                <div class="card-header">
                  <div class="row">
                  <div class="col-lg-4 col-md-2 col-sm-3 col-12">
                    <div class="card card-statistic-1">
                      <div class="card-header pr-2">
                        <h4 class="text-center">TOTAL POINT PELANGGARAN SISWA</h4>
                      </div>
                   
                      <div class="card-wrap pb-4">   
                          <div class="card-body text-center">
                                  <h1 class="p-2" style='font-size:80px'>
                                        @php
                                            $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                            echo $tb_pelanggaran[0]->point;  
                                        @endphp
                                    </h1>
                                    @if ($tb_pelanggaran[0]->point >= 1)
                                        <a href="{{ route('siswa.detail') }}" class="btn btn-md btn-info">Detail</a> 
                                      @else
                                        <small class="badge badge-success ">Tidak Terdapat Point</small>
                                    @endif
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                    <div class="card author-box">
                      <div class="card-body">
                        <div class="author-box-left">
                          <img alt="image" src="{{ asset('stisla-master/assets/img/avatar/avatar-1.png') }}" class="rounded-circle author-box-picture ">
                          <div class="clearfix"></div>
                          {{-- <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a> --}}
                        </div>
                        
                        <div class="author-box-details">
                          <div class="author-box-name">
                            <h3>Profile</h3>
                            
                          </div>
                          <table class="table table-bordered table-striped">
                                
                            <tbody>
                                <tr>
                                    <td> NIS</td>
                                    <td>
                                      @php
                                          $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                        // dd($nis);
                                          echo $nis->nis;
                                      @endphp
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>
                                      @php
                                      $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                    // dd($nis);
                                      echo $nis->nama;
                                  @endphp
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                      @php
                                      $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                    // dd($nis);
                                      echo $nis->alamat;
                                  @endphp
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>
                                      @php
                                      $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                    // dd($nis);
                                      echo $nis->kelas;
                                  @endphp
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>Wali Kelas</td>
                                    <td>
                                      @php
                                      $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                    // dd($nis);
                                      echo $nis->wali_kelas;
                                  @endphp
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wali Murid</td>
                                    <td>
                                      @php
                                      $nis = \App\Models\Siswa::where('users_id', Auth::user()->id_user)->first();
                                    // dd($nis);
                                      echo $nis->wali_murid;
                                  @endphp
                                    </td>
                                </tr>
                            </tbody>
                         </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
        </div>
</section>
@endsection

