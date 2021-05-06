@extends('template.master')
@push('link')
<style>
    div .box{
        /* box-shadow: 0 0 5px grey; */
        transition: all .2s ease-in-out;
    }
    div .box:hover{
        transform: scale(1.1);
    }
    .title{
        font-size: 30px;
        margin-top: 40px;
        font-weight: 100;
    }
    hr{
        margin-top: -20px;
    }
    .card-app{
        height: 400px;
    }
    .card-content{
        margin-top: -20px;
    }
    .col-sm-4{
        margin: 0px auto;
    }

</style>
@endpush
@section('title', 'Pembayaran SPP | DASHBOARD')
@section('judul', 'DASHBOARD')
@section('breadcrump')
        <div class="breadcrumb-item "><i class="fas fa-user"></i> {{ Auth::user()->nama }}</div>
        <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')
<div class="card card-app" >
    <div class="container-fluid H-100 mb-2">
        <p class="ml-3 title"><i class="fas fa-bars mr-2" style="font-size: 25px;"></i>Pembayaran SPP SMK TARUNA BHAKTI</p>
    </div>
    <div class="card-body">
        <hr>
    </div>

    <div class="card-body container-fluid card-content">
        <div class="row">
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <h5>Transaksi</h5>
                            <div class="card-description">Transaction</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" style="text-decoration: none">
                    <div class="card card-hero shadow box">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <h5>History</h5>
                            <div class="card-description">Transaction</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
        {{-- itesmashboard end --}}
</div>
@endsection
@push('script')

@endpush

