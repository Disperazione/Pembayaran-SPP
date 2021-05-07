@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Tambah Data Kelas')
@section('judul', 'Tambah Data SPP')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Tambah Data SPP</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Tambah Data SPP</h4>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <form action="{{ route('petugas.spp.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" class="form-control @error('tahun')
                                        is-invalid
                                    @enderror" placeholder="Enter tahun" name="tahun" value="{{ old('tahun') }}">
                                    @error('tahun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="number" class="form-control @error('nominal')
                                        is-invalid
                                    @enderror" placeholder="Enter nominal" name="nominal" value="{{ old('nominal') }}">
                                    @error('nominal')
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
