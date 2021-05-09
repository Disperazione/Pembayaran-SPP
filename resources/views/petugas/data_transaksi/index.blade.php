@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Transaksi')
@section('judul', 'Data Transaksi')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Transaksi</div>
@endsection
@section('main')
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
                            <label>Show
                                <select name="table-1_length" aria-controls="table-1" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="table-1_filter" class="dataTables_filter">
                            <label>
                                <a href="#" class="btn btn-primary rounded-pill">Add Transaksi <i class="far fa-plus-square"></i></a>
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
                                        Nama Siswa
                                    </th>
                                    <th class="sorting_disabled">
                                        Tanggal Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Bulan Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Tahun Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Jumlah Bayar
                                    </th>
                                    <th class="sorting_disabled">
                                        Status
                                    </th>
                                    <th class="sorting_disabled">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>Ifa Melani M.M.</td>
                                    <td>2021-05-06</td>
                                    <td>Januari</td>
                                    <td>2020</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-success">Sudah Bayar</div></td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                                        <a href="#" class="btn btn-success"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Ifa Mulani</td>
                                    <td>2021-05-06</td>
                                    <td>Januari</td>
                                    <td>2020</td>
                                    <td>Rp.200.000</td>
                                    <td><div class="badge badge-danger">Belum Bayar</div></td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                                        <a href="#" class="btn btn-success"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
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

