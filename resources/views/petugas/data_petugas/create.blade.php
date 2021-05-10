@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Tambah Data Petugas')
@section('judul', 'Tambah Data Petugas')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Tambah Data Petugas</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-align-justify mr-2"></i>Tambah Data Petugas</h4>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <form class="" action="{{ route('petugas.main.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        placeholder="Enter Username" name="username" value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter Password" name="password" value="password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="checkbox" onclick="showPass()" value="{{ old('password') }}">
                                        <label class="form-check-label" for="inlineCheckbox1">Show Password</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control @error('level') is-invalid @enderror" name="level">
                                    <option value=" ">--Pilih Role--</option>
                                    <option value="admin" {{ (old('level') === 'admin') ? 'selected' : '' }}>Admin</option>
                                    <option value="petugas" {{ (old('level') === 'petugas') ? 'selected' : '' }}>Petugas</option>
                                </select>
                                @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-end mt-5">
                                <button class="btn btn-primary mr-2" type="submit">Submit</button>
                                <a class="btn btn-danger" href="#">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    function showPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
@endpush
