@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Tambah Siswa')
@section('breadcrump')
    <div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="row">
    {{-- tambah siswa --}}
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Tambah Data Siswa</h4>
          </div>
          <div class="card-body p-0">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                          <label>NISN</label>
                          <input type="text" class="form-control" placeholder="Enter NISN" name="nisn">
                        </div>
                        <div class="form-group">
                          <label>NIS</label>
                          <input type="text" class="form-control" placeholder="Enter NIS" name="nis">
                        </div>
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" placeholder="Enter Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select class="form-control">
                                <option>--Pilih Kelas--</option>
                                <option>XI RPL1</option>
                                <option>XI RPL2</option>
                                <option>XI RPL3</option>
                            </select>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat">
                        </div>
                        <div class="form-group">
                          <label>No Telephon</label>
                          <input type="text" class="form-control" placeholder="Enter No Tlp" name="no_tlp">
                        </div>
                        <div class="form-group">
                          <label>Password Siswa</label>
                          <input type="text" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <div class="form-group d-flex justify-content-end mt-5">
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
    {{-- tambah siswa end --}}
</div>
@endsection
@push('script')

@endpush

