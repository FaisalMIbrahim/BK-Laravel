{{-- Add Modal --}}
@foreach($tb_siswa as $item)

    <div class="modal fade" id="edit-{{$item->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('siswa.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="users_id">User<span class="text-danger">*</span></label>
                        <select name="users_id" id="" class="form-control">
                           
                            @foreach ($user as $i)
                                <option value="{{ $i->id_user}}"{{ $item->id_user == $i->nama_lengkap ? 'selected' : '' }}> {{ $i->nisn }} : {{ $i->nama_lengkap }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group"> 
                        <label for="title">NIS<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror"
                        name="nis" value="{{ old('nis', $item->nis) }}">
                    </div> 
                    <div class="form-group">
                        <label for="title">Nama<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ old('nama', $item->nama) }}" >
                    </div>
                    <div class="form-group">
                        <label for="title">Alamat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{ old('alamat', $item->alamat) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Kelas<span class="text-danger">*</span></label>
                        <select name="kelas" id="" class="form-control">
                            @foreach ($tb_kelas as $kelas)
                                <option value="{{ $kelas->kelas}}"{{ $item->kelas == $kelas->kelas ? 'selected' : '' }}>{{ $kelas->kelas }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Jenis Kelamin<span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis_kelamin">
                          
                            <option value="Laki-Laki" {{ $item->jenis_kelamin == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                           
                            <option value="Peremupan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                           
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="title">Handphone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                            name="no_hp" value="{{ old('no_hp', $item->no_hp) }}" >
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Murid<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('wali_murid') is-invalid @enderror"
                            name="wali_murid" value="{{ old('wali_murid', $item->wali_murid) }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Kelas<span class="text-danger">*</span></label>
                        <select name="wali_kelas" id="" class="form-control">
                    
                            @foreach ($tb_pendidik as $pendidik)
                                <option value="{{ $pendidik->nama}}"{{ $item->wali_kelas == $pendidik->nama ? 'selected' : '' }}>{{ $pendidik->nama }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                         <div class="form-group float-right">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                            <button type="submit" class="btn btn-primary "><i class='far fa-save'></i> Edit</button>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Add Modal --}}