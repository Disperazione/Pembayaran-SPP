@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Data Siswa')
@section('judul', 'Edit Siswa')
@section('breadcrump')
    <div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
    <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="row">
    {{-- edit siswa --}}
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Edit Data Siswa</h4>
          </div>
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <form method="POST" action="{{ route('petugas.siswa.update', ['siswa' => $siswa->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" class="form-control @error('nisn') is-invalid @enderror"
                                        placeholder="Enter NISN" name="nisn" value="{{ old('nisn', $siswa->nisn) }}">
                                    @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" class="form-control  @error('nis') is-invalid @enderror"
                                        placeholder="Enter NIS" name="nis" value="{{ old('nis',$siswa->nis) }}">
                                    @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Enter Nama" name="nama" value="{{ old('nama', $siswa->nama) }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas_id"
                                        class="form-control  @error('kelas_id') is-invalid @enderror">
                                        <option value="">--Pilih Kelas--</option>
                                        @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}"
                                            {{ ($item->id  == old('kelas_id', $siswa->kelas_id) ) ? 'selected' : '' }}>{{ $item->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('kelas_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    placeholder="Enter Alamat" name="alamat" value="{{ old('alamat', $siswa->alamat) }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Telephon</label>
                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                    placeholder="Enter No Tlp" name="no_telp" value="{{ old('no_telp', $siswa->no_telp) }}">
                                @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-end mt-5">
                                <button class="btn btn-primary mr-2" type="submit">Submit</button>
                                <a class="btn btn-danger" href="{{ route('petugas.siswa.index') }}">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- edit siswa end --}}
</div>
@endsection
@push('script')

@endpush

