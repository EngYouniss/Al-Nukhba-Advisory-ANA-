@extends('layout.master')
@section('content')
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">


            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">الخدمات</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"></li>
                            <li><a class="text-white" href="#">خدماتنا</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        @include('partials.services')
        <!-- Service End -->


        <!-- Testimonial Start -->
        @include('partials.testmonials')
        <!-- Testimonial End -->





        <!-- Back to Top -->
    </div>



@endsection
