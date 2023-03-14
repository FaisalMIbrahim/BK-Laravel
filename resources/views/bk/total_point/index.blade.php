@extends('layouts.app')

@section('title', 'Data Point Siswa')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Point Siswa</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    {{-- <form class="form-inline mr-auto" method="get" action="{{ route('search_total') }}">
                        <div class="search-element">
                            <input type="text" name="search" class="form-control w-70 d-inline" data-width="250" id="search" placeholder="Pencarian...">
                            <button type="submit" class="btn btn-primary"><i class='fas fa-search'></i> Cari</button>
                        </div>
                        <br><br>
                    </form> --}}
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Total Point</th>
                                    <th>Keterangan </th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($tb_pelanggaran))
                                @foreach ($tb_pelanggaran as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->nama}}</td>
                                        <td>{{ $item->kelas}}</td>
                                        <td>{{ $item->wali_kelas}}</td>
                                        <td style="text-align: center">{{ $item->point}}</td>
                                        <td>
                                            @if ($item->point >= 75)
                                            <small class="badge badge-danger">Terkena SP 3</small> 
                                                @elseif ($item->point >= 50)
                                            <small class="badge badge-danger">Terkena SP 2</small> 
                                                @elseif ($item->point >= 25)
                                            <small class="badge badge-warning">Terkena SP 1</small>
                                                @elseif ($item->point <= 24)
                                            <small class="badge badge-info">Tidak Terkena SP</small>
                                            @endif
                                        </td>
                                      
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
</section>
@endsection