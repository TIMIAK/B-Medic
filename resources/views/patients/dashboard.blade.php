@extends('layouts.app')
@section('content')
@include('layouts.patient_sidebar')
<div class="right-panel">
    <div class="content-container">
        <div class="outer-container">
            <div class="feature-content">
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                        <div class="feature-block-two">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-79.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-80.png);"></div>
                                </div>
                                <div class="icon-box"><i class="icon-Dashboard-3"></i></div>
                                <h3>170</h3>
                                <h5>Total Appointment</h5>
                                <p>Lorem ipsum dolor amet eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                        <div class="feature-block-two">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-81.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-82.png);"></div>
                                </div>
                                <div class="icon-box"><i class="icon-Dashboard-email-4"></i></div>
                                <h3>20</h3>
                                <h5>New Messages</h5>
                                <p>Lorem ipsum dolor amet eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 feature-block">
                        <div class="feature-block-two">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-83.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-84.png);"></div>
                                </div>
                                <div class="icon-box"><i class="icon-Dashboard-5"></i></div>
                                <h3>50</h3>
                                <h5>New Reviews</h5>
                                <p>Lorem ipsum dolor amet eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                        <p>$150.00</p>
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
                                <tr>
                                    <td>
                                        <div class="name-box">
                                            <figure class="image"><img src="assets/images/resource/dashboard-doc-2.png" alt=""></figure>
                                            <h5>Dr. Paolo Dybala</h5>
                                            <span class="designation">Dermatology</span>
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
                                        <p>$150.00</p>
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
                                <tr class="cancel-block">
                                    <td>
                                        <div class="name-box">
                                            <figure class="image"><img src="assets/images/resource/dashboard-doc-3.png" alt=""></figure>
                                            <h5>Dr. Samuel Daniels</h5>
                                            <span class="designation">ACL Surgeon</span>
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
                                        <p>$150.00</p>
                                    </td>
                                    <td>
                                        <span class="status cancel">Cancelled</span>
                                    </td>
                                    <td>
                                        <span class="print"><i class="fas fa-print"></i>Print</span>
                                    </td>
                                    <td>
                                        <span class="view"><i class="fas fa-eye"></i>View</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="name-box">
                                            <figure class="image"><img src="assets/images/resource/dashboard-doc-4.png" alt=""></figure>
                                            <h5>Dr. Julia Jhones</h5>
                                            <span class="designation">Dentist</span>
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
                                        <p>$150.00</p>
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
                                <tr>
                                    <td>
                                        <div class="name-box">
                                            <figure class="image"><img src="assets/images/resource/dashboard-doc-5.png" alt=""></figure>
                                            <h5>Dr. Mary Astor</h5>
                                            <span class="designation">Orthopedic</span>
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
                                        <p>$150.00</p>
                                    </td>
                                    <td>
                                        <span class="status pending">Pending</span>
                                    </td>
                                    <td>
                                        <span class="print"><i class="fas fa-print"></i>Print</span>
                                    </td>
                                    <td>
                                        <span class="view"><i class="fas fa-eye"></i>View</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection)
