@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Detail Data Petugas')
@section('judul', 'Detail Data Petugas')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Detail Data Petugas</div>
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
                    <a href="{{ route('petugas.main.edit', ['main' => $petugas->id]) }}" class="text-decoration-none">
                        <i class="far fa-edit mr-2"></i>
                        <span>Edit Data Petugas</span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                    <hr>
                    <form method="POST" action="{{ route('petugas.main.destroy',['main' => $petugas->id]) }}" id="form">
                        @method('delete')
                        @csrf
                    </form>
                    <a href="" class="text-decoration-none" id="hapus">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus Data petugas</span>
                    </a>
                    <hr>
                    <a href="" class="text-decoration-none">
                        <i class="fas fa-angle-left"></i>
                        <span>Kembali</span>
                    </a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- data menu end --}}

    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Detail Petugas</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="font-weight-600">Username</td>
                                <td>:</td>
                                <td>{{ $petugas->username }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">Role</td>
                                <td>:</td>
                                <td>{{ $petugas->level }}</td>
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
<script>
    $(document).ready(function () {
        $("#hapus").click(function (e) {
            e.preventDefault();
            $('#form').submit();
        })
    })

</script>
@endpush
