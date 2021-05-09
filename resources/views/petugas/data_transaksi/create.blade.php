@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Tambah Data Transaksi')
@section('judul', 'Tambah Data Transaksi')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Tambah Data Transaksi</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Tambah Data Transaksi</h4>
          </div>
          <div class="card-body p-0">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                            <label>Siswa</label>
                            <select class="form-control">
                                <option>--Pilih Siswa--</option>
                                <option>Bambang</option>
                                <option>Melani</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date Range Picker</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-calendar"></i>
                                </div>
                              </div>
                              <input type="date" class="form-control daterange-cus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bulan</label>
                            <select class="form-control">
                                <option>--Pilih Bulan--</option>
                                <option>January</option>
                                <option>February</option>
                            </select>
                        </div>

                      </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                            <label>Tahun</label>
                            <select class="form-control">
                                <option>--Pilih Tahun--</option>
                                <option>2020</option>
                                <option>2021</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Nominal Uang</label>
                            <input type="text" class="form-control" placeholder="Enter Jumlah Bayar" name="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Sudah Bayar</span>
                              </label>
                              <label class="selectgroup-item">
                                <input type="radio" name="value" value="100" class="selectgroup-input">
                                <span class="selectgroup-button">Belum Bayar</span>
                              </label>
                            </div>
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
</div>
@endsection
@push('script')

@endpush
