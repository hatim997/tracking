{{-- @extends('frontend.layouts.master')

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
@endsection --}}

@extends('frontend.layouts.master')

@section('title', __('Verification Successful'))

@section('css')
@endsection

@section('content')
    <div class="container mb-5 mt-3 d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" class="mb-4 brand-logo">

        <div class="card shadow-lg border-success col-md-10 col-lg-8">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Verification Successful</h4>
            </div>

            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="display-4 text-success"><img src="{{ asset('uploads/company/tick.png') }}" height="50px" alt="Verification Successful"></div>
                    {{-- <div class="display-4 text-success">✔</div> --}}
                    <p class="text-muted mb-0">
                        Tracking Number <strong>{{ $tracking->tracking_no }}</strong> is valid and verified.
                    </p>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <tbody>
                            <tr>
                                <th class="bg-light text-success w-25">Tracking No</th>
                                <td>{{ $tracking->tracking_no }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Serial No</th>
                                <td>{{ $tracking->serial_no }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Client</th>
                                <td>{{ $tracking->client }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Date</th>
                                <td>{{ \Carbon\Carbon::parse($tracking->tracking_date)->format('M d, Y') }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Item Tested</th>
                                <td>{{ $tracking->item_tested }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Technique</th>
                                <td>{{ $tracking->technique }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Report</th>
                                <td>{{ $tracking->report }}</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-success">Remarks</th>
                                <td>{{ $tracking->remarks }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('frontend.search') }}" class="btn btn-success px-4">🔍 Check Another</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
