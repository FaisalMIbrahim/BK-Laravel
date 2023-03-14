@extends('layouts.app')

@section('title', 'Detail Siswa')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Detail Siswa</h1>
    </div>
      <div class="section-body">
            <div class="card">
              <div class="card-body">
                     <h5 class="text-black"> Selamat Datang {{ Auth::user()->nama_lengkap  }}</h5>
                <div class="card-header">
                  <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-12">
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
                                    
                                    @if ($tb_pelanggaran[0]->point >= 75)
                                      <small class="badge badge-danger">Terkena SP 3</small> 
                                          @elseif ($tb_pelanggaran[0]->point >= 50)
                                      <small class="badge badge-warning">Terkena SP 2</small>
                                          @elseif ($tb_pelanggaran[0]->point >= 25)
                                      <small class="badge badge-warning">Terkena SP  1</small>
                                          @elseif ($tb_pelanggaran[0]->point <= 24)
                                      <small class="badge badge-info">Tidak Terkena SP</small>
                                    @endif
                         
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-2 col-sm-5 col-12">
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
                                    <td>NIS</td>
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
<br>
              <h3>Detail Pelanggaran</h3>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                          <thead>
                            <tr>
                              
                                <th>Tanggal</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Wali Kelas</th>
                                <th>Point</th>
                                <th>Keterangan</th>
                                <th>Penanganan</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($detail))
                            @foreach ($detail as  $item)
                                <tr>
                                   
                                    <td>{{ $item->tgl_kejadian}}</td>
                                    <td>{{ $item->nis}}</td>
                                    <td>{{ $item->nama}}</td>
                                    <td>{{ $item->kelas}}</td>
                                    <td>{{ $item->wali_kelas}}</td>
                                    <td>{{ $item->id_point}}</td>
                                    <td>{{ $item->keterangan}}</td>
                                    <td>{{ $item->penanganan}}</td>
                                    </tr>
                                @endforeach 
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
           
              </div>
        </div>
      </div>
    </div>
</section>
@endsection
