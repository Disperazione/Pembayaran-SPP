@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Detail Siswa')
@section('breadcrump')
    <div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="row">
    {{-- data menu --}}
    <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Data Menu</h4>
          </div>
          <div class="card-body p-0">
            <div class="container">
                <a href="" class="text-decoration-none">
                    <i class="fas fa-search mr-2"></i>
                    <span>Lihat Data SPP</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <hr>
                <a href="" class="text-decoration-none">
                    <i class="far fa-edit mr-2"></i>
                    <span>Edit Data Siswa</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <hr>
                <a href="" class="text-decoration-none">
                    <i class="fas fa-trash-alt mr-2"></i>
                    <span>Hapus Data Siswa</span>
                    <i class="fas fa-angle-right"></i>
                </a>
                <hr>
            </div>
          </div>
        </div>
    </div>
    {{-- data menu end --}}

    {{-- detail siswa --}}
    <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Detail Siswa</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <td class="font-weight-600">NISN</td>
                  <td>:</td>
                  <td>1920100251</td>
                </tr>
                <tr>
                  <td class="font-weight-600">NIS</td>
                  <td>:</td>
                  <td>00000000</td>
                </tr>
                <tr>
                  <td class="font-weight-600">Nama</td>
                  <td>:</td>
                  <td>Ifa Melani M.M.</td>
                </tr>
                <tr>
                  <td class="font-weight-600">Kelas</td>
                  <td>:</td>
                  <td>XI RPL1</td>
                </tr>
                <tr>
                  <td class="font-weight-600">Alamat</td>
                  <td>:</td>
                  <td>Ki. Pacuan Kuda No. 933, Tangerang 90921, Kepri</td>
                </tr>
                <tr>
                  <td class="font-weight-600">No Telephon</td>
                  <td>:</td>
                  <td>0850 5077 6019</td>
                </tr>
                <tr>
                  <td class="font-weight-600">Password</td>
                  <td>:</td>
                  <td>1234567890</td>
                </tr>

              </tbody></table>
            </div>
          </div>
        </div>
    </div>
    {{-- detail siswa end --}}
</div>
@endsection
@push('script')

@endpush

