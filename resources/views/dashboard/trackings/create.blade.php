@extends('layouts.master')

@section('title', __('Create Tracking'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.trackings.index') }}">{{ __('Trackings') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.trackings.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <h3>{{ __('Add Tracking') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="serial_no" class="form-label">{{ __('Serial No.') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('serial_no') is-invalid @enderror" type="text" id="serial_no"
                                name="serial_no" required placeholder="{{ __('Enter serial no') }}" autofocus
                                value="{{ old('serial_no') }}" />
                            @error('serial_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="client" class="form-label">{{ __('Client') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('client') is-invalid @enderror" type="text" id="client"
                                name="client" value="{{ old('client') }}" required placeholder="{{ __('Enter client') }}" />
                            @error('client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="tracking_date" class="form-label">{{ __('Date') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('tracking_date') is-invalid @enderror" type="date" id="tracking_date"
                                name="tracking_date" value="{{ old('tracking_date') }}" required placeholder="{{ __('Enter tracking date') }}" />
                            @error('tracking_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="item_tested" class="form-label">{{ __('Item Tested') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('item_tested') is-invalid @enderror" type="text" id="item_tested"
                                name="item_tested" value="{{ old('item_tested') }}" required placeholder="{{ __('Enter item_tested') }}" />
                            @error('item_tested')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="technique" class="form-label">{{ __('Technique') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('technique') is-invalid @enderror" type="text" id="technique"
                                name="technique" value="{{ old('technique') }}" required placeholder="{{ __('Enter technique') }}" />
                            @error('technique')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="report" class="form-label">{{ __('Report') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('report') is-invalid @enderror" type="text" id="report"
                                name="report" value="{{ old('report') }}" required placeholder="{{ __('Enter report') }}" />
                            @error('report')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="inspector" class="form-label">{{ __('Inspector') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('inspector') is-invalid @enderror" type="text" id="inspector"
                                name="inspector" value="{{ old('inspector') }}" required placeholder="{{ __('Enter inspector') }}" />
                            @error('inspector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="location" class="form-label">{{ __('Location') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('location') is-invalid @enderror" type="text" id="location"
                                name="location" value="{{ old('location') }}" required placeholder="{{ __('Enter location') }}" />
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="remarks" class="form-label">{{ __('Remarks') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('remarks') is-invalid @enderror" name="remarks" id="remarks" cols="30" rows="10" required>{{ old('remarks') }}</textarea>
                            @error('remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Tracking') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
@endsection
