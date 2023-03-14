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
                    <form class="form-inline mr-auto" method="get" action="{{ route('search_pelanggaran') }}">
                        <div class="search-element">
                            <input type="text" name="search" class="form-control w-70 d-inline" data-width="250" id="search" placeholder="Pencarian...">
                            <button type="submit" class="btn btn-primary"><i class='fas fa-search'></i> Cari</button>
                        </div>
                        <br><br>
                    </form>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class='fas fa-plus-circle'></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_pelanggaran as $no => $item)
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
                                    <td>
                                        <a href="#" class="btn btn-info btn-action mr-1" data-target="#edit-{{$item->id}}" data-toggle="modal"
                                            title="Edit"><i class='fas fa-edit'></i></a>
                                        <form action="{{ route('pelanggaran.destroy', $item->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('bk.data_pelanggaran.create')
@include('bk.data_pelanggaran.edit')
@endsection