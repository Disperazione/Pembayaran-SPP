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
                        <table class="table table-striped dataTable no-footer"  role="grid" aria-describedby="table-1_info">
                            <tbody class="">
                                <tr>
                                    <td>NISN</td>
                                    <td>:</td>
                                    <td>{{ Auth()->user()->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>NIS</td>
                                    <td>:</td>
                                    <td>{{ Auth()->user()->nis }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ Auth()->user()->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ Auth()->user()->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>No Tlp</td>
                                    <td>:</td>
                                    <td>{{ Auth()->user()->no_telp }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{ (!empty(Auth()->user()->kelas->nama)) ? Auth()->user()->kelas->nama : 'Kelas kosong'  }}</td>
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
                <h4><i class="fas fa-align-justify mr-2"></i>Tagihan Pembayaran SPP</h4>
            </div>
            <div class="card-body">
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
                                        <th class="sorting_disabled">
                                            Bulan
                                        </th>
                                        <th class="sorting_disabled">
                                            Tahun
                                        </th>
                                        <th class="sorting_disabled" width="20%">
                                            Nominal
                                        </th>
                                        <th class="sorting_disabled">
                                            Action
                                        </th>
                                        {{-- <th class="sorting_disabled">
                                        Action
                                    </th> --}}
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach ($transaksi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->bulan_bayar }}</td>
                                        <td>{{ $item->spp->tahun }}</td>
                                        <td>  {{ 'Rp. '.number_format($item->spp->nominal,2,',','.') }}</td>
                                        <td>
                                            <form action="{{ route('siswa.tambah.transaksi', ['pembayaran' => $item->id]) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <button class="btn btn-success">Bayar</button>
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
@endsection
@push('script')
<script src="{{ asset('assets/js/main/basic-table.js') }}"></script>
@endpush


