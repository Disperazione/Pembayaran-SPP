@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Detail Siswa')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
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
                    <a href="{{ route('petugas.siswa.edit' ,['siswa' => $siswa->id]) }}" class="text-decoration-none">
                        <i class="far fa-edit mr-2"></i>
                        <span>Edit Data Siswa</span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                    <hr>
                    <a href="{{ route('petugas.siswa.transaksi' ,['siswa' => $siswa->id]) }}" class="text-decoration-none">
                        <i class="far fa-edit mr-2"></i>
                        <span>Data Transaksi Siswa</span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                    <hr>
                    <form method="POST" action="{{ route('petugas.siswa.destroy',['siswa' => $siswa->id]) }}" id="form">
                        @method('delete')
                        @csrf
                    </form>
                    <a href="" class="text-decoration-none" id="hapus">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus Data Siswa</span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                    <hr>
                    <a href="{{ route('petugas.siswa.index') }}" class="text-decoration-none">
                    <i class="fas fa-angle-left"></i>
                    <span>Kembali</span>
                </a>


                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- data menu end --}}

    {{-- detail siswa --}}
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Detail Siswa</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="font-weight-600">NISN</td>
                                <td>:</td>
                                <td>{{ $siswa->nisn }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">NIS</td>
                                <td>:</td>
                                <td>{{ $siswa->nis }}</td>
                            </tr>
                            <tr>
                                <td class="font-weightphp-600">Nama</td>
                                <td>:</td>
                                <td>{{ $siswa->nama }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">Kelas</td>
                                <td>:</td>
                                <td>{{ $siswa->kelas->nama }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">Alamat</td>
                                <td>:</td>
                                <td>{{ $siswa->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">No Telephon</td>
                                <td>:</td>
                                <td>{{ $siswa->no_telp }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-600">Password</td>
                                <td>:</td>
                                <td>1234567890</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- detail siswa end --}}
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
