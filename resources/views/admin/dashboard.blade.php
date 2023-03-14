@extends('layouts.app')



@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Admin</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-black"> Selamat datang {{ Auth::user()->nama_lengkap  }}</h5>
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                              <i class='fas fa-users' style='font-size:48px;color:white'></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                  <h4 class="">Total User</h4>
                                </div>
                                <div class="card-body">
                                  <h1>{{$user}}</h1>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                              <i class='fas fa-user-graduate' style='font-size:48px;color:rgb(255, 255, 255)'></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                  <h4 class="">Total SISWA</h4>
                                </div>
                                <div class="card-body">
                                  <h1>{{$tb_siswa}}</h1>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-md-4 col-sm-6 col-12">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                            
                              <i class='fas fa-user-tie' style='font-size:48px;color:white'></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                  <h4>Pendidik</h4>
                                </div>
                                <div class="card-body">
                                  <h1>
                                  {{$tb_pendidik}}</h1>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

      </div>
    </section>
@endsection