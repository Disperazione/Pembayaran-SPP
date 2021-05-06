@extends('template.master')
@push('link')
<style>
    .blok-dash {
        margin: 0px auto;
    }

</style>
@endpush
@section('title', 'Pembayaran SPP | DASHBOARD')
@section('judul', 'DASHBOARD')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::guard('petugas')->user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
        <div class="card card-statistic-1 shadow">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Admin</h4>
                </div>
                <div class="card-body" id="admin">
                    0
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
        <div class="card card-statistic-1 shadow">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Petugas</h4>
                </div>
                <div class="card-body" id="petugas">
                    0
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 blok-dash">
        <div class="card card-statistic-1 shadow">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Siswa</h4>
                </div>
                <div class="card-body" id="siswa">
                    0
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
                    <h4>Total Kelas</h4>
                </div>
                <div class="card-body" id="kelas">
                    0
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 col-lg-4">
        <div class="card shadow">
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h4>Pembayaran Terbaru</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-danger">Lihat semua <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th width="30%">Nama siswa</th>
                                <th>Bulan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>action</th>
                            <tr>
                                @foreach ($bayar as $item)
                            <tr>
                                <td>{{ $item->siswa->nama }}</td>
                                <td class="font-weight-600">{{ $item->bulan_bayar }}</td>
                                <td>{{ $item->tgl_bayar }}</td>
                                <td>
                                    <div class="badge badge-success">{{ ($item->status) ? "Sudah Bayar" : '' }}</div>
                                </td>
                                <td>{{ $item->updated_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.0.1/highcharts.js"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
<script>
    $(document).ready(function () {
           // requuest ajax
            $.ajax({
                url: "{{route('petugas.dashboard.ajax')}}",
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}'
                },
                success: function (data) {
                    $('#admin').html(data.admin);
                    $('#petugas').html(data.petugas);
                    $('#siswa').html(data.siswa);
                    $('#kelas').html(data.kelas);
                    chart(data.bulan, data.bayar, data.belum)

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
    })
</script>
@endpush
