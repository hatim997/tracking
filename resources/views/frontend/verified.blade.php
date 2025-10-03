@extends('frontend.layouts.master')

@section('title', __('Verification Successful'))

@section('css')
@endsection

@section('content')
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" class="mb-4 brand-logo">
        <div class="card p-4 verified-card col-md-6 col-lg-4 text-center">
            <div class="success-icon mb-3">✔</div>
            <h4 class="mb-2" style="color:#28a745;">Verification Successful</h4>
            <p class="text-muted">Tracking Number <strong>{{ $tracking->tracking_no }}</strong> is valid and verified.</p>
            <a href="{{ route('frontend.search') }}" class="btn btn-outline-success mt-3">Check Another</a>
        </div>
    </div>
@endsection

@section('script')
@endsection

