{{-- Add Modal --}} 
@foreach($tb_point as $point)

    <div class="modal fade" id="edit-{{$point->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Point</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('point.update', $point) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group"> 
                        <label for="point">Point<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('point') is-invalid @enderror"
                        name="point" value="{{ old('point', $point->point) }}">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan<span class="text-danger">*</span></label> 
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                            name="keterangan" value="{{ old('keterangan', $point->keterangan) }}" >
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