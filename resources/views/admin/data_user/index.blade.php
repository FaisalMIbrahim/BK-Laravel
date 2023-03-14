@extends('layouts.app')

@section('title', 'Data User')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline mr-auto" method="get" action="{{ route('search_user') }}">
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
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Role User</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($users))
                                @foreach ($users as $no => $item)
                                    <tr>
                                        <td>{{ $no + 1 }}</td>
                                        <td>{{ $item->nama_lengkap}}</td>
                                        <td>{{ $item->nis }}</td>
                                        <td>
                                            @if($item->role_user == 1)
                                                <small class="badge badge-primary">ADMIN</small>
                                            
                                            @elseif($item->role_user == 2)
                                                <small class="badge badge-info">GURU BK</small>
                                            
                                                @elseif($item->role_user == 3)
                                                <small class="badge badge-warning">WALI KELAS</small>
                                            
                                                @elseif($item->role_user == 4)
                                                <small class="badge badge-dark">SISWA</small>
                                         
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                                <small class="badge badge-success">AKTIF</small>

                                            @elseif ($item->status == 2)
                                                <small class="badge badge-danger">TIDAK AKTIF</small>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-action mr-1" data-target="#edit-{{$item->id_user}}" data-toggle="modal"
                                                title="Edit"><i class='fas fa-edit'></i></a>
                                            <form action="{{ route('user.destroy', $item->id_user) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                            </form>
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


@include('admin.data_user.create')
@include('admin.data_user.edit')
@endsection