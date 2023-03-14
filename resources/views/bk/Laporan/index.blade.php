@extends('layouts.app')

@section('title','Laporan')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>@yield('title')</h1>
    </div>    
    <div class="section-body">

    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
             
                <div class=" col-lg-4 col-md-12 col-12 col-sm-12 offset-2">
                    <h5>Laporan</h5>
                    <div class="form-group">
                        <label for="label">Dari Tanggal</label>
                        <input type="date" name="tgl_awal" id="tgl_awal" class="form-control"  >
                    </div>
                    <div class="form-group">
                        <label for="label">Sampai Tanggal</label>
                        <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" >
                    </div>
                
            </div>
                
                    <div class="col-md-4 ">
                        <br><br><br>
                        <div class="input-group mb-3">
                        <a href="" onclick="this.href='/ada_pelanggaran/'+document.getElementById('tgl_awal').value +
                        '/' +document.getElementById('tgl_akhir').value" class="btn btn-warning col-md-12"><i class='fas fa-file-alt' style='font-size:15px'></i> Ada Pelanggaran</a>
                        
                        </div>
                        <br><br>
                        <div class="input-group mb-3">
                        <a href="" onclick="this.href='/tidakada_pelanggaran/'+document.getElementById('tgl_awal').value +
                        '/' +document.getElementById('tgl_akhir').value" class="btn btn-primary col-md-12"><i class='fas fa-file-alt' style='font-size:15px'></i> Tidak Ada Pelanggaran</a>
                        
                        </div>
                    </div>
                         {{-- <div class="card-body">
                            <h5>Laporan</h5>
                            <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                            
                            <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                                    <div class="input-group mb-3">
                                       <a href="" onclick="this.href='/ada_pelanggaran/'+document.getElementById('tgl_awal').value +
                                       '/' +document.getElementById('tgl_akhir').value" class="btn btn-primary col-md-12"> Ada Pelanggaran<i class='fas fa-print'></i></a>
                                    </div>

                                </div>
                              <br>
                        </div> --}}
                    </div>     
                </div> 
            </div>
        </div>
    </div>   
        
</section> 
@endsection