{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Kode Kelas<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kd_kelas') is-invalid @enderror"
                            name="kd_kelas" value="{{ old('kd_kelas') }}" required placeholder="Masukan Kode Kelas...">
                        <!-- error message untuk title -->
                        @error('kd_kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Kelas<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                            name="kelas" value="{{ old('kelas') }}" required placeholder="Masukan Kelas...">
                        <!-- error message untuk title -->
                        @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pendidik_id">Wali Kelas<span class="text-danger">*</span></label>
                        <select name="pendidik_id" id="" class="form-control">
                            <option value="">Pilih Wali Kelas</option>
                            @foreach ($pendidik as $item)
                                <option value="{{ $item->id}}"> {{ $item->nama }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fas fa-window-close'></i> Close</button>
                        <button type="submit" class="btn btn-primary "><i class='far fa-save'></i> Tambah</button>
                    </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}