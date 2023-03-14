@extends('layouts.app')

@section('title', 'Data Laporan')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Laporan</h1>
            </h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="card-body">
                            @if (session('laporan'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>{{ session('laporan') }}</strong>
                                </div>
                            @endif
                            <form action="{{ route('laporan.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tanggal Awal</label>
                                    <input type="date" class="form-control @error('tanggal_awal') is-invalid @enderror"
                                        name="tanggal_awal" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Akhir</label>
                                    <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror"
                                        name="tanggal_akhir" required>
                                </div>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Laporan Pertanggal</strong><br>
                            <small class="font-weight-bold">{{ $awal }} - {{ $akhir }}</small>
                        </div>
                        <div class="col-md-6 text-right">
                            @if (count($pelanggaran) > 0)
                                <a href="{{ url('cetak_pdf') }}/{{ $awal }}/{{ $akhir }}"
                                    class="btn btn-danger"><i class="fas fa-file"></i> Cetak
                                    Pdf</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Nama</th> --}}
                                        <th>No Surat</th>
                                        <th>Penerima</th>
                                        <th>Tanggal</th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        {{-- <th>status</th> --}}
                                        {{-- <th>jenis kelamin</th> --}}

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
                                                <td>{{ $item->nama}}</td>
                                                {{-- <td>{{ $item->no_surat->no_surat }}</td>
                                                <td>{{ $item->penerima->penerima }}</td>
                                                <td>{{ $item->tanggal->tanggal }}</td>
                                                <td>{{ $item->perihal->perihal }}</td>
                                                <td>{{ $item->keterangan }}</td> --}}
                                                <td>
                                                    {{-- @if ($item->status == 1)
                                                        <span
                                                        class="badge badge-success">Selesai</span>
                                                    @elseif($item->status == 2)
                                                        <span
                                                        class="badge badge-warning">Sedang di proses</span>
                                                        {{-- @elseif($item->status == 3)
                                                        <span
                                                        class="badge badge-info">Proses</span> --}}
                                                        {{-- @elseif($item->status == 3)
                                                        <span
                                                        class="badge badge-danger">Ditolak</span>

                                                    @endif
                                                </td> --}}
                                                {{-- <td>{{ $item->jeniskelamin }}</td> --}}
                                        @endforeach
                                        {{-- @elseif(count($suratkeluar) == 0) --}}
                                        {{-- <div class="alert alert-danger">Data Kosong</div> --}}
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