@extends('master')

@section('header_css')
    <link rel="stylesheet" href="{{ url('assets') }}/css/user-pannel.css" />
@endsection

@push('site-seo')
    @php
        $generalInfo = DB::table('general_infos')->select('meta_title', 'company_name', 'fav_icon')->where('id', 1)->first();
    @endphp
    <title>
        @if ($generalInfo && $generalInfo->meta_title)
            {{ $generalInfo->meta_title }}
        @else
            {{ $generalInfo->company_name }}
        @endif
    </title>
    @if ($generalInfo && $generalInfo->fav_icon)
        <link rel="icon" href="{{ env('ADMIN_URL') . '/' . $generalInfo->fav_icon }}" type="image/x-icon" />
    @endif
@endpush

@section('header_css')
    <style>
        .pagination {
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection

@push('user_dashboard_menu')
    @include('dashboard.mobile_menu_offcanvus')
@endpush

@section('content')
    <section class="getcom-user-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="getcom-user-body-bg">
                        <img alt="" src="{{ url('assets') }}/img/user-hero-bg.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    @include('dashboard.menu')
                </div>
                <div class="col-lg-12 col-xl-9 col-12">
                    <div class="nursing-service mgTop24">
                        <div class="dashboard-head-widget style-2" style="margin: 0px">
                            <h5 class="dashboard-head-widget-title">Prescription</h5>
                            <div class="dashboard-head-widget-btn">
                                <a href="{{ url('upload/prescription') }}" class="theme-btn secondary-btn icon-left">
                                    <i class="fi-rr-plus"></i>Upload prescription
                                </a>
                            </div>
                        </div>
                        <div class="doctor-appoinment-table">
                            <div class="table-responsive">
                                <table class="doctor-appoinment-table-data table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Order date</th>
                                            <th>Patient name</th>
                                            <th>Phone number</th>
                                            <th>Delivery address</th>
                                            <th>Status</th>
                                            <th>Attachment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->serial_no }}</td>
                                                <td>{{ date('d M, Y g:iA', strtotime($item->created_at)) }}</td>
                                                <td>
                                                    <p>{{ $item->patient_name }}</p>
                                                </td>
                                                <td>{{ $item->patient_phone }}</td>
                                                <td>
                                                    <span>{{ $item->address }}</span>
                                                </td>

                                                @if ($item->status == 0)
                                                    <td class="pending-status" style="color: var(--yellow-color)">Just Uploaded</td>
                                                @elseif($item->status == 1)
                                                    <td class="pending-status" style="color: var(--bs-blue)">Checking</td>
                                                @elseif($item->status == 2)
                                                    <td class="pending-status" style="color: var(--bs-blue)">In Transit</td>
                                                @elseif($item->status == 3)
                                                    <td class="pending-status" style="color: var(--success-color);">Delivered</td>
                                                @else
                                                    <td class="pending-status" style="color: var(--alert-color)">Cancel</td>
                                                @endif

                                                <td class="text-center">
                                                    <div class="attachnment-item-buttons text-center">
                                                        <a href="{{url(env('ADMIN_URL').'/'.$item->attachment)}}" stream class="view-btn" target="_blank">View</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-appoinment-action-menu dropdown">
                                                        <button type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fi-rs-menu-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <a class="dropdown-item" href="{{url('edit/prescription')}}/{{$item->slug}}">Edit</a>
                                                            <a class="dropdown-item" href="{{url('remove/prescription')}}/{{$item->slug}}">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $data->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
