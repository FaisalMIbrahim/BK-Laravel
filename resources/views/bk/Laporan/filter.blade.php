@extends('layouts.app')

@section('title', 'Laporan')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>@yield('title')</h1>
    </div>
      <div class="section-body">
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
                </div>
                <div class="card-header">
                  <div class="row">
                </div>
                    
                       
                    </div>
                  </div>
                 
                </div>
              </div>
<br><div class="row">
    <div class="col-md-6">
        <strong>Laporan Pertanggal</strong><br>
        <small class="font-weight-bold">{{ $awal }} - {{ $akhir }}</small>
    </div>
    <div class="col-md-6 text-right">
        @if (count($pelanggaran) > 0)
            <a href="{{ url('cetak_pdf') }}/{{ $awal }}/{{ $akhir }}"
                class="btn btn-danger" target="_blank"><i class='fas fa-print'></i> Cetak
                Pdf</a>
        @endif
    </div>
</div>
              <h3>Data Laporan</h3>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Point</th>
                                    <th>Keterangan</th>
                                    <th>Penanganan</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($pelanggaran) == 0)
                                <div class="alert alert-danger">Data Tidak Di Temukan</div>
                                {{-- @endif --}}
                            @elseif (!empty($pelanggaran))
                                @foreach ($pelanggaran as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->tgl_kejadian}}</td>
                                        <td>{{ $item->nis}}</td>
                                        <td>{{ $item->nama}}</td>
                                        <td>{{ $item->kelas}}</td>
                                        <td>{{ $item->wali_kelas}}</td>
                                        <td>{{ $item->id_point}}</td>
                                        <td>{{ $item->keterangan}}</td>
                                        <td>{{ $item->penanganan}}</td>
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