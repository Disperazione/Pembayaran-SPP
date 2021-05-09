@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | Edit Data Petugas')
@section('judul', 'Edit Data Petugas')
@section('breadcrump')
<div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->username }}</div>
<div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> Edit Data Petugas</div>
@endsection
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-align-justify mr-2"></i>Edit Data Petugas</h4>
          </div>
          <div class="card-body p-0">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" placeholder="Admin" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter Password" name="password" value="password">
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="checkbox" onclick="showPass()">
                                <label class="form-check-label" for="inlineCheckbox1">Show Password</label>
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form class="">
                      <div class="card-body">
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control">
                                <option>Admin</option>
                                <option>Petugas</option>
                            </select>
                        </div>
                        <div class="form-group d-flex justify-content-end mt-5">
                            <button class="btn btn-primary mr-2" type="submit">Update</button>
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

