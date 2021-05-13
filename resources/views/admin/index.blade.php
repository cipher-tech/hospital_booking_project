@extends('layouts.adminLayout')

<!-- Main Content Layout -->
<!-- Welcome Area -->
@section('content')

    <div class="welcome-area">
        <div class="row m-0 align-items-center">
            <div class="col-lg-5 col-md-12 p-0">
                <div class="welcome-content">
                    <h1 class="mb-2">Hi, Welcome back admin<h1>
                    <p class="mb-0">Just Do Somethings Better</p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 p-0">
                <div class="welcome-img">
                    <img src="/dassets/img/welcome-img.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome Area -->

    <!-- Stats Area -->
    <div class="ecommerce-stats-area">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-user-check'></i>
                    </div>
                    <span class="sub-title">Total</span>
                    <h3 class="row">
                        <span class="col-8"> {{$total}}</span>
                        
                    </h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bxs-badge-dollar'></i>
                    </div>
                    <span class="sub-title">User</span>
                    <h3>Admin</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-purchase-tag'></i>
                    </div>
                    <span class="sub-title">Country</span>
                    <h3>nigeria</h3>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-stats-card-box">
                    <div class="icon">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <span class="sub-title">Last login</span>
                    <h3> seconds</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Stats Area -->

    <h1>All Bookings</h1>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">CreatedAt</th>
                {{-- <th scope="col" style="text-align: center" colspan="2">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <th scope="row">{{$booking["id"]}}</th>
                <td>{{$booking["name"]}}</td>
                <td>{{$booking["email"]}}</td>
                <td>{{$booking["subject"]}}</td> 
                <td>{{$booking["message"]}}</td> 
                <td>{{$booking["created_at"]}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $bookings->links() }}
@endsection

<!-- Footer -->
<div class="flex-grow-1"></div>
<!-- End Footer -->

<!-- End Main Content Wrapper -->
