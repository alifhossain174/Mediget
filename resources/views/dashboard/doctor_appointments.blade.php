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
                    <div class="doctor-appoinment mgTop24">
                        <div class="dashboard-head-widget style-2" style="margin: 0px">
                            <h5 class="dashboard-head-widget-title">
                                Doctor appointments
                            </h5>
                            <div class="dashboard-head-widget-btn">
                                <a href="{{url('/doctors')}}" class="theme-btn secondary-btn">
                                    Visit doctor page
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
                                            <th>Doctor name</th>
                                            <th>Appointment date</th>
                                            <th>Patient info</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($data->total() > 0)
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{$item->serial_no}}</td>
                                                    <td>{{date("d M, Y g:iA", strtotime($item->created_at))}}</td>
                                                    <td>
                                                        <p>{{$item->doctor_name}}</p>
                                                        <span>{{$item->degree}}, <br>{{$item->institution}}</span>
                                                    </td>
                                                    <td>{{date("d M, Y g:iA", strtotime($item->visit_date_time))}}</td>
                                                    <td>
                                                        <p>{{$item->name}}</p>
                                                        <span>{{$item->phone}}</span>
                                                        <span>{{$item->age}} | {{$item->weight}}</span>
                                                    </td>
                                                    <td>{{$item->visiting_charge}}</td>

                                                    @if($item->status == 0)
                                                        <td class="pending-status" style="color: var(--yellow-color)">Pending</td>
                                                    @elseif($item->status == 1)
                                                        <td class="pending-status" style="color: var(--success-color)">Approved</td>
                                                    @else
                                                        <td class="pending-status" style="color: var(--alert-color)">Cancel</td>
                                                    @endif

                                                    <td>
                                                        <div class="d-appoinment-action-menu dropdown">
                                                            <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fi-rs-menu-dots-vertical"></i>
                                                            </button>
                                                            <style>
                                                                .dropdown-menu {
                                                                    inset: -5px -30px auto auto !important;
                                                                }
                                                            </style>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                <a class="dropdown-item" href="{{url('edit/doctor/appointment')}}/{{$item->slug}}">Edit</a>
                                                                <a class="dropdown-item" href="{{url('remove/doctor/appointment')}}/{{$item->slug}}">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center">No Data Found !</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>

                                {{$data->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
