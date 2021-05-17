@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | HISTORY')
@section('judul', 'HISTORY')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> Dashboard</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> History</div>
@endsection
@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>History</h4>
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
                                            Tanggal Bayar
                                        </th>
                                        <th class="sorting_disabled">
                                            Bulan
                                        </th>
                                        <th class="sorting_disabled">
                                            Tahun
                                        </th>
                                        <th class="sorting_disabled">
                                            Nominal
                                        </th>
                                        <th class="sorting_disabled">
                                            Jumlah bayar
                                        </th>
                                        <th class="sorting_disabled">
                                            kurang bayar
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
                                @foreach ($history as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tgl_bayar }}</td>
                                        <td>{{ $item->bulan_bayar }}</td>
                                        <td>{{ $item->spp->tahun }}</td>
                                        <td>  {{ 'Rp. '.number_format($item->spp->nominal,2,',','.') }}</td>
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
                                            <div class="badge badge-success">Sudah Lunas</div>
                                            @elseif($item->status === 'belum')
                                            <div class="badge badge-danger">Belum lunas</div>
                                            @endif
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
