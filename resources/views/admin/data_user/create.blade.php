{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="nis">Username<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror"
                            name="nis" value="{{ old('nis') }}" required placeholder="Masukan Username...">
                            

                        <!-- error message untuk title -->
                        @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                            name="nama_lengkap" value="{{ old('nama_lengkap') }}" required placeholder="Masukan Nama Lengkap...">
                            

                        <!-- error message untuk title -->
                        @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') }}" required placeholder="Masukan Password...">
                        <!-- error message untuk title -->
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Role User<span class="text-danger">*</span></label>
                        <select class="form-control" name="role_user">
                        <option value=""selected>Role User</option>
                      
                        <option value="1" >ADMIN</option>
                        <option value="2">BK</option>
                        <option value="3">WALI KELAS</option>
                        <option value="4">SISWA</option>
                       
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status<span class="text-danger">*</span></label>
                        <select class="form-control" name="status">
                        <option value=""selected>Status</option>
                      
                        <option value="1" >AKTIF</option>
                        <option value="2">TIDAK AKTIF</option>
                       
                       
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