{{-- Add Modal --}} 
@foreach($tb_kelas as $kelas)

    <div class="modal fade" id="edit-{{$kelas->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('kelas.update', $kelas) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group"> 
                        <label for="kd_kelas">Kode Kelas<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kd_kelas') is-invalid @enderror"
                        name="kd_kelas" value="{{ old('kd_kelas', $kelas->kd_kelas) }}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas<span class="text-danger">*</span></label> 
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                            name="kelas" value="{{ old('kelas', $kelas->kelas) }}" >
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Kelas<span class="text-danger">*</span></label>
                        <select name="pendidik_id" id="" class="form-control">
                    
                            @foreach ($pendidik as $item)
                                <option value="{{ $item->id}}"{{ $kelas->pendidik_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                        <button type="submit" class="btn btn-primary "><i class='far fa-save'></i> Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach