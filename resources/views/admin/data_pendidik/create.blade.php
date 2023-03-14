{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pendidik</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('pendidik.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="users_id">User<span class="text-danger">*</span></label>
                        <select name="users_id" id="users_id" class="form-control">
                            <option value="">Pilih User</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id_user}}">{{ $item->nama_lengkap }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                  
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama_lengkap" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="alamat" required placeholder="Masukan Alamat...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin<span class="text-danger">*</span></label>
                        <select class="form-control" name="jenis_kelamin">
                        <option value=""selected>Jenis Kelamin</option>
                      
                        <option value="Laki-Laki" >Laki - Laki</option>
                       
                        <option value="Perempuan">Perempuan</option>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Handphone</label>
                        <input type="text" class="form-control" name="no_hp" required placeholder="Masukan Handphone...">
                    </div>
                    <div class="form-group">
                        <label>Jabatan<span class="text-danger">*</span></label>
                        <select class="form-control" name="jabatan">
                        <option value=""selected>Jabatan</option>
                      
                        <option value="Wali Kelas" >Wali Kelas</option>
                       
                        <option value="Guru Bk">Guru BK</option>
                       
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