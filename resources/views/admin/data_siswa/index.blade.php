@extends('layouts.app')

@section('title', 'Data Siswa')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Siswa</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline mr-auto" method="get" action="{{ route('search_siswa') }}">
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
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kelas</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                    <th>Wali Murid</th>
                                    <th>Wali Kelas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>  
                            <tbody>
                                @foreach($tb_siswa as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kelas }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->wali_murid }}</td>
                                        <td>{{ $item->wali_kelas }}</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-action mr-1" data-target="#edit-{{$item->id}}" data-toggle="modal"
                                                title="Edit"><i class='fas fa-edit'></i></a>
                                            <form action="{{ route('siswa.destroy', $item->id) }}" class="d-inline" method="POST">
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


@include('admin.data_siswa.create')
@include('admin.data_siswa.edit')
@endsection