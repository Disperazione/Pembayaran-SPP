@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Transaksi')
@section('judul', 'Data Transaksi')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> Dashboard</div>
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
                @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
                @endif
                <div class="table-responsive">
                    <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="col-sm-12">
                            <table class="table table-striped dataTable no-footer" id="table-1" role="grid"
                                aria-describedby="table-1_info">
                                <thead class="text-center">
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="table-1"
                                            aria-sort="ascending" aria-label="# : activate to sort column descending">
                                            #
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1"
                                            aria-label="NISN: activate to sort column ascending">
                                            Nama Siswa
                                        </th>
                                        <th class="sorting_disabled">
                                            Tanggal Bayar
                                        </th>
                                        <th class="sorting_disabled">
                                            Bulan Bayar
                                        </th>
                                        <th class="sorting_disabled">
                                            Tahun Spp
                                        </th>
                                        <th class="sorting_disabled">
                                            Jumlah Bayar
                                        </th>
                                        <th class="sorting_disabled">
                                            Kurang Bayar
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
                                    @foreach ($transaksi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->siswa->nama }}</td>
                                        <td>{{ $item->tgl_bayar }}</td>
                                        <td>{{ $item->bulan_bayar }}</td>
                                        <td>{{ $item->spp->tahun }}</td>
                                        <td>{{ 'Rp. '.number_format($item->jumlah_bayar,2,',','.') }}</td>
                                        <td>@if ($item->jumlah_bayar < $item->spp->nominal)
                                            {{ '- Rp. '.number_format($item->jumlah_bayar - $item->spp->nominal,2,',','.') }}
                                            @elseif($item->jumlah_bayar > $item->spp->nominal)
                                            {{ '+ Rp. '.number_format($item->jumlah_bayar - $item->spp->nominal,2,',','.') }}
                                            @else
                                            {{ 'Rp. '.number_format($item->jumlah_bayar - $item->spp->nominal,2,',','.') }}
                                        @endif</td>
                                        <td>
                                            @if($item->status === 'bayar')
                                            <div class="badge badge-success">Sudah Bayar</div>
                                            @elseif($item->status === 'belum')
                                            <div class="badge badge-danger">Belum Bayar</div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('petugas.transaksi.edit' ,['transaksi' => $item->id]) }}" class="btn btn-success"><i class="far fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('petugas.transaksi.destroy', ['transaksi' => $item->id]) }}"
                                                id="form" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger hapus" id="hapus"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="d-none" id="nam" data-id="transaksi"></span>
@endsection
@push('script')
<script src="{{ asset('assets/js/main/table.js') }}"></script>
@endpush
