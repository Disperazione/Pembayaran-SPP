@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Edit Data Kelas')
@section('judul', 'Edit Data Kelas')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Edit Data Kelas</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Edit Data Kelas</h4>
          </div>
           <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <form action="{{ route('petugas.kelas.update', ['kela' => $kelas->id ]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kelas</label>
                                    <input type="text" class="form-control @error('nama')
                                        is-invalid
                                    @enderror" placeholder="Enter Nama Kelas" name="nama" value="{{ old('nama',$kelas->nama) }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                                    <a class="btn btn-danger" href="#">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')

@endpush

