@extends('template.master')
@push('link')
<style>
    .col-md-12 {
        padding: 1;
    }

</style>
@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Data Siswa')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Siswa</div>
@endsection
@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Data Siswa</h4>
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
                        <div class="col-md-12">
                            {{-- <div class=""> --}}
                            <table class="table table-striped dataTable no-footer" id="table-1" role="grid"
                                aria-describedby="table-1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="table-1"
                                            aria-sort="ascending" aria-label="# : activate to sort column descending">
                                            #
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="table-1"
                                            aria-label="NISN: activate to sort column ascending">
                                            NISN
                                        </th>
                                        <th class="sorting_disabled">
                                            Nama
                                        </th>
                                        <th class="sorting_disabled" width="30%">
                                            Alamat
                                        </th>
                                        <th class="sorting_disabled">
                                            Kelas
                                        </th>
                                        <th class="sorting_disabled">
                                            Status
                                        </th>
                                        <th class="sorting_disabled">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td class="font-weight-600">{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kelas->nama }}</td>
                                        <td>{{ $item->no_telp }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('petugas.siswa.destroy',['siswa' => $item->id]) }}"
                                                class="form">
                                                @method('delete')
                                                @csrf
                                            </form>
                                            <a href="{{ route('petugas.siswa.show', ['siswa'=>$item->id]) }}"
                                                class="btn btn-primary"><i class="fas fa-search"></i></a>
                                            <a href="{{ route('petugas.siswa.edit',['siswa'=>$item->id]) }}"
                                                class="btn btn-success"><i class="far fa-edit"></i></a>
                                            <button class="btn btn-danger" data-id="{{ $item->id }}"><i
                                                    class="fas fa-trash-alt hapus"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('#table-1').dataTable({
            "dom": "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>t<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>"
        });

        $("#table-1_filter").prepend(
            '<a href="{{ route("petugas.siswa.create")  }}" class="btn btn-primary rounded-pill mr-3">Add Siswa <i class="far fa-plus-square"></i></a>'
        )
    });

</script>
@endpush
