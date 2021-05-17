@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | TRANSAKSI')
@section('judul', 'TRANSAKSI')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> Dashboard</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Transaksi</div>
@endsection
@section('main')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Biodata Siswa</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                            <tbody class="">
                                <tr>
                                    <td>NISN</td>
                                    <td>:</td>
                                    <td>1920100251</td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>:</td>
                                    <td>00000000</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Ifa Melani M.M.</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Ki. Pacuan Kuda No. 933, Tangerang 90921, Kepri</td>
                                </tr>
                                <tr>
                                    <td>No Tlp</td>
                                    <td>:</td>
                                    <td>0850 5077 6019</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td>inipassword</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>XI RPL 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Data Transaksi</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="table-1_length">
                            <label>Show year to
                                <select aria-controls="table-1" class="custom-select form-control ml-2" style="width: 80px;">
                                    <option value="10">2020</option>
                                    <option value="25">2021</option>
                                    <option value="50">2022</option>
                                    <option value="100">2023</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="table-1_filter" class="dataTables_filter">
                            <label>
                                <input type="search" class="form-control" placeholder="Search" aria-controls="table-1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                            <thead class="text-center">
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="table-1" aria-sort="ascending" aria-label="# : activate to sort column descending">
                                    #
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table-1" aria-label="NISN: activate to sort column ascending">
                                        Bulan
                                    </th>
                                    <th class="sorting_disabled">
                                        Jatuh Tempo
                                    </th>
                                    <th class="sorting_disabled">
                                        Id Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Tanggal Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Jumlah Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Status
                                    </th>
                                    {{-- <th class="sorting_disabled">
                                        Action
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Januari</td>
                                    <td>2020-01-05</td>
                                    <td>0001</td>
                                    <td>2020-01-01</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-success">Sudah Bayar</div></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Februari</td>
                                    <td>2020-02-05</td>
                                    <td>0002</td>
                                    <td>2020-02-01</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-success">Sudah Bayar</div></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Maret</td>
                                    <td>2020-03-05</td>
                                    <td>0003</td>
                                    <td>2020-03-01</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-danger">Belum Bayar</div></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>april</td>
                                    <td>2020-04-05</td>
                                    <td>0004</td>
                                    <td>2020-04-01</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-danger">Belum Bayar</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">
                            Showing 1 to 4 of 4 entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="table-1_previous">
                                    <a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="table-1_next">
                                    <a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@push('script')

@endpush


