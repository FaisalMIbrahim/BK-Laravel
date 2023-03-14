@extends('layouts.app')

@section('title','cetak')

@section('content')
<div class="card">
    <div class="card-body">
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    @endif
    <div class="section-header">
        <h3 style="color: black">Cetak Surat</h3>
    </div>
    <div class="col-lg-5 col-md-12 col-12 col-sm-12">
        <div class="card border-0 shadow rounded">
           
             <div class="card-body">
                <h5>Form Surat Peringatan</h5>
                <div class="form-group">
                    <label for="nis">Siswa<span class="text-danger">*</span></label>
                    <select name="nis" id="nis" class="form-control">
                        <option value="">Pilih Siswa</option>
                        @foreach ($siswa as $item)
                            <option value="{{ $item->nis}}"> {{ $item->nis }} : {{ $item->nama }}</option>
                            
                        @endforeach
                    </select>
                </div>
                        <div class="input-group mb-3">
                           <a href="" onclick="this.href='/cetak_suratpdf/'+document.getElementById('nis'). value" target="_blank" class="btn btn-primary col-md-12"> Cetak <i class='fas fa-print'></i></a>
                        </div>
                  <br>
            </div>
        </div>     
    </div>   
</div>    
@endsection