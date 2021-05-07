@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Data Siswa')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Siswa</div>
@endsection
@section('main')
<div class="row">
    {{-- data siswa --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Data Siswa</h4>
                <div class="card-header-action">
                    <div class="row">
                        <a href="#" class="btn btn-primary">Tambah Siswa <i class="far fa-plus-square"></i></a>
                        <div class="ml-4 mr-3">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="150" style="width: 150px;">
                            {{-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> --}}
                            <div class="search-backdrop"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped text-center">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>No Tlp</th>
                                <th data-width="183">Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1920100251</td>
                                <td class="font-weight-600">Kusnadi</td>
                                <td>Ki. Pacuan Kuda No. 933, Tangerang 90921, Kepri</td>
                                <td>XI RPL1</td>
                                <td>123456789012</td>
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
</div>
@endsection
@push('script')

@endpush
