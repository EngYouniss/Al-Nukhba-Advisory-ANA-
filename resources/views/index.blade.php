@extends('layout.master')
@section('active-route','active')
@section('content')
    @include('partials.hero')

    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Newsletter Start -->
    @include('partials.newsletter')

    <!-- Newsletter End -->

    <!-- Service Start -->
    @include('partials.services',['services'=>$services])
    <!-- Service End -->



    <!-- Features Start -->
    @include('partials.features',['features'=>$features])
    <!-- Features End -->


    <!-- Client Start -->
    @include('partials.client')
    <!-- Client End -->


    <!-- Testimonial Start -->
    @include('partials.testmonials')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
