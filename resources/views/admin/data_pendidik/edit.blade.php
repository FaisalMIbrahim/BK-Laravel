{{-- Add Modal --}}
@foreach($tb_pendidik as $item)

    <div class="modal fade" id="edit-{{$item->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pendidik</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('pendidik.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="users_id">User<span class="text-danger">*</span></label>
                            <select name="users_id" id="" class="form-control">
                               
                                @foreach ($user as $i)
                                    <option value="{{ $i->id_user}}"{{ $item->id_user == $i->nama_lengkap ? 'selected' : '' }}> {{ $i->nis }} : {{ $i->nama_lengkap }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="nama">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $item->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $item->alamat) }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin<span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis_kelamin">
                          
                            <option value="Laki-Laki" {{ $item->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                           
                            <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                           
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Handphone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp', $item->no_hp) }}">
                        </div>
                        <div class="form-group">
                            <label>Jabatan<span class="text-danger">*</span></label>
                            <select class="form-control" name="jabatan">
                          
                            <option value="Wali Kelas" {{ $item->jabatan == 'Wali Kelas' ? 'selected' : '' }}>Wali Kelas</option>
                           
                            <option value="Guru BK" {{ $item->jabatan == 'Guru BK' ? 'selected' : '' }}>Guru BK</option>
                           
                            </select>
                        </div>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                            <button type="submit" class="btn btn-primary "><i class='far fa-save'></i> Edit</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Add Modal --}}