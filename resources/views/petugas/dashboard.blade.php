@extends('template.master')
@push('link')

@endpush
@section('title', 'Pembayaran SPP | DASHBOARD')
@section('judul', 'DASHBOARD')
@section('breadcrump')
        <div class="breadcrumb-item "><i class="fas fa-user"></i>  {{ Auth::guard('petugas')->user()->username }}</div>
        <div class="breadcrumb-item "><i class="fas fa-tachometer-alt"></i> DASBOARD</div>
@endsection
@section('main')

@endsection
@push('script')

@endpush

