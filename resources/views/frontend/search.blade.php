@extends('frontend.layouts.master')

@section('title', __('Verification Check'))

@section('css')
@endsection

@section('content')
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" class="mb-4 brand-logo">
        <div class="card p-4 search-card col-md-6 col-lg-4">
            <h4 class="text-center mb-3" style="color:#f46a05;">Verification Check</h4>
                @if(session('tracking_error'))
                    <div class="alert alert-danger text-center fw-bold shadow-sm rounded-pill px-4 py-3 mb-3"
                        style="background: #ffe6e6; color:#cc0000; border:1px solid #ff9999; font-size: 12px;">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        {{ session('tracking_error') }}
                    </div>
                @endif
            <form action="{{ route('frontend.search') }}" method="GET">
                <div class="mb-3">
                    <label for="tracking" class="form-label">Enter Tracking Number</label>
                    <input type="text" class="form-control" id="tracking" name="tracking"
                        placeholder="TRACK-2025-123456" required>
                </div>
                <button type="submit" class="btn btn-orange w-100">Verify</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
@endsection
