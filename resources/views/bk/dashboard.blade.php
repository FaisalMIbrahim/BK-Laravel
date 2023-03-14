@extends('layouts.app')



@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard BK</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-black"> Selamat Datang {{ Auth::user()->nama_lengkap  }}</h5>
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                              <i class='fas fa-users' style='font-size:48px;color:white'></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                  <h4 class="">Total data siswa</h4>
                                </div>
                                <div class="card-body">
                                  <h1>{{ $pelanggaran }}</h1>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

      </div>
    </section>
@endsection