@extends('template.master')
@push('link')
<style>
    .blok-dash{
        margin: 0px auto;
    }

</style>
@endpush
@section('title', 'Pembayaran SPP | DASHBOARD')
@section('judul', 'DASHBOARD')
@section('breadcrump')
        <div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
        <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="row">
    {{-- transaksi --}}
    <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h4>Transaksi</h4>
            <div class="card-header-action">
                <div class="row">
                    <div class="mr-4">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="100" style="width: 100px;">
                        {{-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> --}}
                        <div class="search-backdrop"></div>
                    </div>
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped text-center">
                <tbody><tr>
                  <th>Tahun</th>
                  <th>Bulan</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td class="font-weight-600 bg-secondary text-white" rowspan="12">2020</td>
                  <td>January</td>
                  <td class="bg-success text-white">Lunas</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>February</td>
                    <td class="bg-danger text-white">Belum Lunas</td>
                    <td>
                      <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>March</td>
                    <td class="bg-danger text-white">Belum Lunas</td>
                    <td>
                      <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                    </td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
            </nav>
          </div>
        </div>
    </div>
    {{-- transaksi end --}}

    {{-- history --}}
    <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <h4>History</h4>
            <div class="card-header-action">
                <div class="row">
                    <div class="mr-4">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="100" style="width: 100px;">
                        {{-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> --}}
                        <div class="search-backdrop"></div>
                    </div>
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tbody><tr>
                  <th>Tanggal Bayar</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Jumlah Nominal</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td class="font-weight-600">01-12-2020</td>
                  <td>January</td>
                  <td>2020</td>
                  <td>Rp. 200.000</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
              </tbody></table>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
            </nav>
          </div>
        </div>
    </div>
    {{-- history end --}}
</div>
@endsection
@push('script')

@endpush

