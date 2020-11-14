@extends('layouts.app')
@section('content')
{{-- @include('layouts.patient_sidebar')
<div class="right-panel">
    <div class="content-container">
        <div class="outer-container">

            <div class="doctors-appointment">
                <div class="title-box">
                    <h3>Doctors Appointment</h3>
                    <div class="btn-box">
                        <a href="patient-dashboard.html" class="theme-btn-one">Upcoming<i class="icon-Arrow-Right"></i></a>
                        <a href="patient-dashboard.html" class="theme-btn-two">Today</a>
                    </div>
                </div>
                <div class="doctors-list">
                    <div class="table-outer">
                        <table class="doctors-table">
                            <thead class="table-header">
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Appt Date</th>
                                    <th>Booking Date</th>
                                    <th>Status</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td>
                                        <div class="name-box">
                                            <figure class="image"><img src="assets/images/resource/dashboard-doc-1.png" alt=""></figure>
                                            <h5>Dr. Amelia Anna</h5>
                                            <span class="designation">Cardiology</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p>20 Oct 2020</p>
                                        <span class="time">10:30AM</span>
                                    </td>
                                    <td>
                                        <p>18 Oct, 2020</p>
                                    </td>
                                    <td>
                                        <span class="status">Confirm</span>
                                    </td>
                                    <td>
                                        <span class="print"><i class="fas fa-print"></i>Print</span>
                                    </td>
                                    <td>
                                        <span class="view"><i class="fas fa-eye"></i>View</span>
                                    </td>
                                </tr>

                            </tbody> --}}
                        {{-- </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}
<div class="boxed_wrapper">
<section class="pricing-section bg-color-3 sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>My Appointments</h2>
        </div>
        <div class="tabs-box">
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table">
                                    <div class="pattern">
                                        <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-75.png')}});"></div>
                                        <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-76.png')}});"></div>
                                    </div>
                                    {{-- Table goes here --}}

                                    <div class="content-container">
                                        <div class="outer-container">
                                            <div class="doctors-appointment">

                                                <div class="doctors-list">
                                                    <div class="table-outer">
                                                        <table class="doctors-table">
                                                            <thead class="table-header">
                                                                <tr>
                                                                    <th>Doctor Name</th>
                                                                    <th>Appt Date</th>
                                                                    <th>Booking Date</th>
                                                                    <th>Status</th>
                                                                    <th>&nbsp;</th>
                                                                    <th>&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($appointments as $appointment)
                                                                <tr>
                                                                    <td>
                                                                        <div class="name-box">
                                                                            <figure class="image"><img src="{{asset('images/resource/dashboard-doc-1.png')}}" alt=""></figure>
                                                                            <h5>Dr. Amelia Anna</h5>
                                                                            <span class="designation">Cardiology</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p>{{date('F d, Y', $appointment->appt_date)}}</p>
                                                                        <span class="time">{{$appointment->appt_time}}</span>
                                                                    </td>
                                                                    <td>
                                                                        <p>{{date('F d, Y', $appointment->created_at)}}</p>
                                                                    </td>
                                                                    <td>
                                                                        @if ($appointment->status == 'confirm')
                                                                            <span class="status">Confirm</span>
                                                                        @elseif($appointment->status == 'pending')
                                                                            <span class="status pending">Pending</span>
                                                                        @else
                                                                            <span class="status cancel">Cancelled</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <span class="print"><i class="fas fa-print"></i>Print</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="view"><i class="fas fa-eye"></i>View</span>
                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table-footer">
                                                    <div class="link"><a href="pricing.html"><i class="icon-Arrow-Right"></i></a></div>
                                                    <div class="btn-box"><a href="/dashboard" class="theme-btn-one">Back to Dashboard<i class="icon-Arrow-Right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{$appointments->links()}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table">
                                    <div class="pattern">
                                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-75.png);"></div>
                                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-76.png);"></div>
                                    </div>
                                    <div class="table-header">
                                        <h2>Basic Pack</h2>
                                        <h3>$50 USD</h3>
                                    </div>
                                    <div class="table-content">
                                        <ul class="list clearfix">
                                            <li>1 Bathroom Cleaning</li>
                                            <li>Up to 3 Bedrooms Cleaning</li>
                                            <li class="light">1 Livingroom Cleaning</li>
                                            <li class="light">Kitchen Cleaning</li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <div class="link"><a href="pricing.html"><i class="icon-Arrow-Right"></i></a></div>
                                        <div class="btn-box"><a href="pricing.html" class="theme-btn-one">Buy Package<i class="icon-Arrow-Right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table active">
                                    <div class="pattern">
                                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-75.png);"></div>
                                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-76.png);"></div>
                                        <div class="pattern-3" style="background-image: url(assets/images/shape/shape-77.png);"></div>
                                    </div>
                                    <div class="table-header">
                                        <h2>Popular Pack</h2>
                                        <h3>$60 USD</h3>
                                    </div>
                                    <div class="table-content">
                                        <ul class="list clearfix">
                                            <li>1 Bathroom Cleaning</li>
                                            <li>Up to 3 Bedrooms Cleaning</li>
                                            <li>1 Livingroom Cleaning</li>
                                            <li class="light">Kitchen Cleaning</li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <div class="link"><a href="pricing.html"><i class="icon-Arrow-Right"></i></a></div>
                                        <div class="btn-box"><a href="pricing.html" class="theme-btn-one">Buy Package<i class="icon-Arrow-Right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table">
                                    <div class="pattern">
                                        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-75.png);"></div>
                                        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-76.png);"></div>
                                    </div>
                                    <div class="table-header">
                                        <h2>Premium Pack</h2>
                                        <h3>$70 USD</h3>
                                    </div>
                                    <div class="table-content">
                                        <ul class="list clearfix">
                                            <li>1 Bathroom Cleaning</li>
                                            <li>Up to 3 Bedrooms Cleaning</li>
                                            <li>1 Livingroom Cleaning</li>
                                            <li>Kitchen Cleaning</li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <div class="link"><a href="pricing.html"><i class="icon-Arrow-Right"></i></a></div>
                                        <div class="btn-box"><a href="pricing.html" class="theme-btn-one">Buy Package<i class="icon-Arrow-Right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection
