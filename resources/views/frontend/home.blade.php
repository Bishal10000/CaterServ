@extends('frontend.layout.app')  

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to CaterServ</small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Book <span class="text-primary">Cater</span>Serv For Your Dream Event</h1>
                    <a href="{{ route('frontend.booking') }}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                    <a href="{{ route('frontend.about') }}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('assets/frontend/img/hero.png') }}" class="img-fluid rounded animated zoomIn" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                    <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                    <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                        dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>
                    <div class="row g-4 text-dark mb-5">
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Fresh and Fast food Delivery
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                        </div>
                    </div>
                    <a href="{{ route('frontend.about') }}" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection