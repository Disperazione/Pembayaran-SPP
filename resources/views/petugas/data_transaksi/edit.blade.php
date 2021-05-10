@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Edit Data Transaksi')
@section('judul', 'Edit Data Transaksi')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Edit Data Transaksi</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Edit Data Transaksi</h4>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <form class="" action="{{ route('petugas.transaksi.update',['transaksi'=>$Transaksi->id]) }}"
                            method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Siswa</label>
                                    <select class="form-control @error('siswa_id') is-invalid @enderror"
                                        name="siswa_id">
                                        <option value=" ">--Pilih Siswa--</option>
                                        @foreach ($siswa as $item)
                                        <option value="{{ $item->id }}"
                                            {{ (old('siswa_id', $Transaksi->id) == $item->id) ? 'selected' : '' }}>
                                            {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('siswa_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tanggal :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date"
                                            class="form-control daterange-cus  @error('tgl_bayar') is-invalid @enderror"
                                            name="tgl_bayar" value="{{ old('tgl_bayar', $Transaksi->tgl_bayar) }}">
                                        @error('tgl_bayar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select class="form-control  @error('bulan_bayar') is-invalid @enderror"
                                        name="bulan_bayar">
                                        <option value=" ">--Pilih Bulan--</option>
                                        @foreach ($bulan as $item)
                                        <option value="{{ $item }}"
                                            {{ (old('bulan_bayar', $Transaksi->bulan_bayar) === $item) ? 'selected' : '' }}>
                                            {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @error('bulan_bayar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <form class="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pilih Spp</label>
                                    <select class="form-control   @error('spp_id') is-invalid @enderror" name="spp_id">
                                        <option value=" ">--Pilih Spp--</option>
                                        @foreach ($tahun as $item)
                                        <option id="rupiah" value="{{ $item->id }}"
                                            {{ (old('spp_id', $Transaksi->spp->id) == $item->id) ? 'selected' : '' }}>
                                            Tahun {{ $item->tahun }} | nominal
                                            {{ 'Rp. '.number_format($item->nominal,2,',','.') }}</option>
                                        @endforeach
                                    </select>
                                    @error('spp_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror"
                                        placeholder="Enter Jumlah Bayar" name="jumlah_bayar"
                                        value="{{ old('jumlah_bayar', $Transaksi->jumlah_bayar) }}">
                                    @error('jumlah_bayar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="status" value="bayar" class="selectgroup-input"
                                                {{ ($Transaksi->status === 'bayar') ? 'checked=""' : '' }}>
                                            <span class="selectgroup-button">Sudah Bayar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="status" value="belum" class="selectgroup-input"
                                                {{ ($Transaksi->status === 'belum') ? 'checked=""' : '' }}>
                                            <span class="selectgroup-button">Belum Bayar</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-end mt-5">
                                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                                    <a class="btn btn-danger" href="{{ route('petugas.transaksi.index') }}">Kembali</a>
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
