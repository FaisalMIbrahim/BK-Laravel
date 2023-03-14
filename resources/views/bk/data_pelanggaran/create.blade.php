{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Point Siswa</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('pelanggaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label for="siswa_id">Siswa</label>
                        <select name="siswa_id" id="siswa_id" class="form-control">
                            <option value="">Pilih Siswa <span class="text-danger">*</span></option>
                            @foreach ($siswa as $item)
                                <option value="{{ $item->id }}">{{ $item->nis }}--{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('siswa_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tgl_kejadian') is-invalid @enderror"
                            name="tgl_kejadian" value="{{ old('tgl_kejadian') }}" required >
                        <!-- error message untuk title -->
                        @error('tgl_kejadian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">NIS <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror"
                            name="nis" id="nis" readonly>
                        
                        @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" id="nama" readonly>

                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Pilih Kelas <span class="text-danger">*</span></option>
                            @foreach ($tb_kelas as $kelas)
                                <option value="{{ $kelas->kelas}}">{{ $kelas->kelas }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Wali Kelas <span class="text-danger">*</span></label>
                        <select name="wali_kelas" id="walikelas" class="form-control">
                            <option value="">Pilih Wali Kelas</option>
                            @foreach ($tb_pendidik as $pendidik)
                                <option value="{{ $pendidik->nama}}">{{ $pendidik->nama }}</option>
                                
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="title">Point <span class="text-danger">*</span></label>
                    <select name="id_point" id="" class="form-control">
                    <option value="">Point</option>
                    @foreach ($tb_point as $point)
                        <option value="{{ $point->point}}">{{ $point->point }}-{{ $point->keterangan }}</option>
                        
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="title">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                    name="keterangan" value="{{ old('keterangan') }}" required placeholder="Masukan Keterangan...">

                     @error('keterangan')
                         <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="title">Penanganan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('penanganan') is-invalid @enderror"
                    name="penanganan" value="{{ old('penanganan') }}" required placeholder="Masukan Keterangan...">

                     @error('penanganan')
                         <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                        @enderror
                    </div>
                    
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                        <button type="submit" class="btn btn-primary "> <i class='far fa-save'></i> Tambah</button>
                    </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}