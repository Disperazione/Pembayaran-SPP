@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Kelas')
@section('judul', 'Data Kelas')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Data Kelas</div>
@endsection
@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Data Kelas</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                            Nama Kelas
                                        </th>
                                        <th class="sorting_disabled">
                                            Jumlah Siswa
                                        </th>
                                        <th class="sorting_disabled">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td class="font-weight-600">{{ $item->siswa->count() }}</td>
                                        <td>
                                            <a href="{{ route('petugas.kelas.show', ['kela'=>$item->id]) }}"
                                                class="btn btn-primary"><i class="fas fa-search"></i></a>
                                            <a href="{{ route('petugas.kelas.edit',['kela'=>$item->id]) }}"
                                                class="btn btn-success"><i class="far fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('petugas.kelas.destroy', ['kela' => $item->id]) }}"
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
@endsection
@push('script')
<script src="{{ asset('assets/js/pages/kelas.js') }}"></script>
@endpush
