{{-- Add Modal --}} 
@foreach($tb_pelanggaran as $item)

    <div class="modal fade" id="edit-{{$item->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Point Siswa</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('pelanggaran.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                    @method('PUT')
                    <div class="form-group"> 
                        <label for="title">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tgl_kejadian') is-invalid @enderror"
                        name="tgl_kejadian" value="{{ old('tgl_kejadian', $item->tgl_kejadian) }}">
                    </div>
                    <div class="form-group">
                        <label for="title">NIS <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror"
                            name="nis" value="{{ old('nis', $item->nis) }}" >
                    </div>
                    <div class="form-group">
                        <label for="title">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ old('nama', $item->nama) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Kelas <span class="text-danger">*</span></label>
                        <select name="kelas" id="" class="form-control">
                          
                            @foreach ($tb_kelas as $kelas)
                            <option value="{{ $kelas->kelas}}"{{ $item->kelas == $kelas->kelas ? 'selected' : '' }}>{{ $kelas->kelas }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Kelas <span class="text-danger">*</span></label>
                        <select name="wali_kelas" id="" class="form-control">
                        
                            @foreach ($tb_pendidik as $pendidik)
                            <option value="{{ $pendidik->nama}}"{{ $item->wali_kelas == $pendidik->nama ? 'selected' : '' }}>{{ $pendidik->nama }}</option>
                            
                        @endforeach
                        </select>
                 </div>
        
             <div class="form-group">
                <label for="title">Point <span class="text-danger">*</span></label>
                <select name="id_point" id="" class="form-control">
                   
                    @foreach ($tb_point as $point)
                        <option value="{{ $point->point}}"{{ $item->id_point == $point->point ? 'selected' : '' }}>{{ $point->point }}-{{ $point->keterangan }}</option>
                        
                    @endforeach
                </select>
            
             </div>
             <div class="form-group">
                <label for="title">Keterangan <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                    name="keterangan" value="{{ old('keterangan', $item->keterangan) }}" required>
            </div>
             <div class="form-group">
                <label for="title">Penanganan <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('penanganan') is-invalid @enderror"
                    name="penanganan" value="{{ old('penanganan', $item->penanganan) }}" required>
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