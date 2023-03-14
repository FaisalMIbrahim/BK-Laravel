{{-- Add Modal --}} 
@foreach($users as $item)

    <div class="modal fade" id="edit-{{$item->id_user}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('user.update', $item->id_user) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control"
                            name="nis" value="{{ old('nis', $item->nis) }}" />
                    </div>
                    <div class="form-group">
                        <label for="title">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control"
                            name="nama_lengkap" value="{{ old('nama_lengkap', $item->nama_lengkap) }}" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" />
                        <p class="form-text">*Kosongkan jika tidak ingin mengubah password.</p>
                    </div>

                    <div class="form-group">
                        <label>Role User<span class="text-danger">*</span></label>
                        <select class="form-control" name="role_user">
                      
                        <option value="1" {{ $item->role_user == '1' ? 'selected' : '' }}>ADMIN</option>
                        <option value="2" {{ $item->role_user == '2' ? 'selected' : '' }}>GURU BK</option>
                        <option value="3" {{ $item->role_user == '3' ? 'selected' : '' }}>WALI KELAS</option>
                        <option value="4" {{ $item->role_user == '4' ? 'selected' : '' }}>SISWA</option>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status<span class="text-danger">*</span></label>
                        <select class="form-control" name="status">
                      
                        <option value="1" {{ $item->status == '1' ? 'selected' : '' }}>AKTIF</option>
                       
                        <option value="2" {{ $item->status == '2' ? 'selected' : '' }}>TIDAK AKTIF</option>
                       
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