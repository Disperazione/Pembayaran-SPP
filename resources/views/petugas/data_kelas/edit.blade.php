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
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                          <label>Nama Kelas</label>
                          <input type="text" class="form-control" placeholder="RPL5" name="nama">
                        </div>
                      </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                            <label>Kelas</label>
                            <select class="form-control">
                                <option>--Pilih Kelas--</option>
                                <option>X</option>
                                <option>XI</option>
                                <option>XII</option>
                            </select>
                        </div>
                        <div class="form-group d-flex justify-content-end mt-5">
                            <button class="btn btn-primary mr-2" type="submit">Update</button>
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

