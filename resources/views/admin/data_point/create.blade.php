{{-- Add Modal --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Point</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('point.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Point<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('point') is-invalid @enderror"
                            name="point" value="{{ old('point') }}" required placeholder="Masukan Point...">
                        <!-- error message untuk title -->
                        @error('point')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Keterangan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                            name="keterangan" value="{{ old('keterangan') }}" required placeholder="Masukan Keterangan...">
                        <!-- error message untuk title -->
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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