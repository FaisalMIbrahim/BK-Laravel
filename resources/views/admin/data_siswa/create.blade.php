{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="users_id">User<span class="text-danger">*</span></label>
                        <select name="users_id" id="users_id" class="form-control">
                            <option value="">Pilih User</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id_user}}"> {{ $item->nis }} : {{ $item->nama_lengkap }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror"
                            name="nis" id="nis" value="{{ old('nis') }}" required readonly>
                        <!-- error message untuk title -->
                        @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" id="nama_lenkap" value="{{ old('nama') }}" required readonly>
                        <!-- error message untuk title -->
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Alamat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{ old('alamat') }}" required placeholder="Masukan Alamat...">
                        <!-- error message untuk title -->
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                 
                    <div class="form-group">
                        <label for="title">Kelas<span class="text-danger">*</span></label>
                        <select name="kelas" id="" class="form-control">
                            <option value="">Kelas</option>
                            @foreach ($tb_kelas as $kelas)
                                <option value="{{ $kelas->kelas}}">{{ $kelas->kelas }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin<span class="text-danger">*</span></label>
                        <select class="form-control" name="jenis_kelamin">
                        <option value=""selected>Jenis Kelamin</option>
                      
                        <option value="Laki-Laki" >Laki-Laki</option>
                       
                        <option value="Perempuan">Perempuan</option>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Handphone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                            name="no_hp" value="{{ old('no_hp') }}" required placeholder="Masukan Handphone...">
                        <!-- error message untuk title -->
                        @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Murid<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('wali_murid') is-invalid @enderror"
                            name="wali_murid" value="{{ old('wali_murid') }}" required placeholder="Masukan Wali Murid...">
                        <!-- error message untuk title -->
                        @error('wali_murid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Kelas<span class="text-danger">*</span></label>
                        <select name="wali_kelas" id="" class="form-control">
                            <option value="">Wali Kelas</option>
                            @foreach ($tb_pendidik as $pendidik)
                                <option value="{{ $pendidik->nama}}">{{ $pendidik->nama }}</option>
                                
                            @endforeach
                        </select>
                 </div>
                 <div class="form-group float-right">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                    <button type="submit" class="btn btn-primary "><i class='far fa-save'></i> Tambah</button>
                </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Modal --}}