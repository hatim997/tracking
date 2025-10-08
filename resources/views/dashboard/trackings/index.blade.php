@extends('layouts.master')

@section('title', __('Trackings'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Trackings') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Trackings List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create tracking'])
                    <a href="{{ route('dashboard.trackings.create') }}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add Tracking') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr. No') }}</th>
                            <th>{{ __('Report') }}</th>
                            {{-- <th>{{ __('Tracking No') }}</th> --}}
                            <th>{{ __('Client') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Item Tested') }}</th>
                            <th>{{ __('Technique') }}</th>
                            <th>{{ __('Inspector') }}</th>
                            <th>{{ __('Location') }}</th>
                            <th>{{ __('Remarks') }}</th>
                            @canany(['delete tracking','view tracking', 'update tracking'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trackings as $index => $tracking)
                            <tr>
                                <td>{{ $tracking->serial_no }}</td>
                                <td>{{ $tracking->report }}</td>
                                {{-- <td>{{ $tracking->tracking_no }}</td> --}}
                                <td>{{ $tracking->client }}</td>
                                <td>{{ \Carbon\Carbon::parse($tracking->tracking_date)->format('M d, Y') }}</td>
                                <td>{{ $tracking->item_tested }}</td>
                                <td>{{ $tracking->technique }}</td>
                                <td>{{ $tracking->inspector }}</td>
                                <td>{{ $tracking->location }}</td>
                                <td>{{ $tracking->remarks }}</td>
                                @canany(['delete tracking','view tracking', 'update tracking'])
                                    <td class="d-flex">
                                        @canany(['delete tracking'])
                                            <form action="{{ route('dashboard.trackings.destroy', $tracking->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Tracking') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update tracking'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.trackings.edit', $tracking->id) }}"
                                                    class="btn btn-icon btn-text-success waves-effect waves-light rounded-pill me-1 edit-order-btn"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Tracking') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                        @endcan
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{asset('assets/js/app-user-list.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection
