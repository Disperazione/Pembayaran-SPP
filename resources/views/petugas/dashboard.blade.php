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
        <div class="breadcrumb-item "><i class="fas fa-user"></i>  {{ Auth::guard('petugas')->user()->username }}</div>
        <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
{{-- <div class="card card-app" >
    <div class="container-fluid H-100 mb-2">
        <p class="ml-3 title"><i class="fas fa-bars mr-2" style="font-size: 25px;"></i>Pembayaran SPP SMK TARUNA BHAKTI</p>
    </div>
    <div class="card-body">
        <hr>
    </div>

    <div class="card-body container-fluid card-content">
        <div class="row">
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h5>Data Siswa</h5>
                            <div class="card-description">Student Data</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <h5>Data Kelas</h5>
                            <div class="card-description">Class Data</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <h5>Data SPP</h5>
                            <div class="card-description">SPP data</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h5>Data Petugas</h5>
                            <div class="card-description">Officer Data</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <h5>Transaksi</h5>
                            <div class="card-description">Transaction</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
      <div class="card card-statistic-1 shadow">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Siswa</h4>
          </div>
          <div class="card-body">
            10
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
      <div class="card card-statistic-1 shadow">
        <div class="card-icon bg-danger">
          <i class="far fa-newspaper"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Kelas</h4>
          </div>
          <div class="card-body">
            42
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
      <div class="card card-statistic-1 shadow">
        <div class="card-icon bg-warning">
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Petugas</h4>
          </div>
          <div class="card-body">
            1
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1 shadow">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Online Users</h4>
          </div>
          <div class="card-body">
            47
          </div>
        </div>
      </div>
    </div> --}}
</div>

<div class="row">
    {{-- data siswa --}}
    <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <h4>Data Siswa</h4>

            <div class="card-header-action">
                <div class="row">
                    <div class="mr-4">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="150" style="width: 150px;">
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
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>No Tlp</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td><a href="#">1920100251</a></td>
                  <td class="font-weight-600">Kusnadi</td>
                  <td>123456789012</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">1920100251</a></td>
                  <td class="font-weight-600">Hasan Basri</td>
                  <td>123456789012</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">1920100251</a></td>
                  <td class="font-weight-600">Muhamad Nuruzzaki</td>
                  <td>123456789012</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">1920100251</a></td>
                  <td class="font-weight-600">Agung Ardiansyah</td>
                  <td>123456789012</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="#">1920100251</a></td>
                  <td class="font-weight-600">Ardian Rahardiansyah</td>
                  <td>123456789012</td>
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
    {{-- data siswa end --}}

    {{-- data kelas --}}
    <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h4>Data Kelas</h4>
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
                  <th>No</th>
                  <th>Kelas</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td class="font-weight-600">1</td>
                  <td>XI RPL1</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                    <td class="font-weight-600">1</td>
                    <td>XI RPL2</td>
                    <td>
                      <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-600">1</td>
                    <td>XI RPL3</td>
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
    {{-- data kelas end --}}
</div>

<div class="row">
    {{-- data spp --}}
    <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h4>Data SPP</h4>
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
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td class="font-weight-600">2020</td>
                  <td>Rp. 200.000.000</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="font-weight-600">2021</td>
                    <td>Rp. 200.000.000</td>
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
    {{-- data spp end --}}

    {{-- transaksi --}}
    <div class="col-md-7">
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
              <table class="table table-striped">
                <tbody><tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td class="font-weight-600">1</td>
                  <td>Kusnaidi</td>
                  <td>XI RPL1</td>
                  <td>Belum Lunas</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                  </td>
                </tr>
                <tr>
                    <td class="font-weight-600">2</td>
                    <td>Adi</td>
                    <td>XI RPL2</td>
                    <td>Lunas</td>
                    <td>
                      <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-600">3</td>
                    <td>Lila</td>
                    <td>XI RPL3</td>
                    <td>Belum Lunas</td>
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
</div>
@endsection
@push('script')

@endpush

