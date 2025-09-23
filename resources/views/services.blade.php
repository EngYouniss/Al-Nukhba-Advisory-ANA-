@extends('layout.master')
@section('active-services', 'active')
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


        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">خدماتنا</div>
                    <h2 class="mb-5">نوفّر حلولاً متكاملة لنجاح أعمالك</h2>
                </div>
                <div class="row g-4">

                    @forelse ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between flex-row-reverse">
                                    <div class="service-icon">
                                        <i class="{{ $service->icon }} fa-2x"></i>
                                    </div>
                                    <a class="service-btn" href="">
                                        <i class="fa fa-link fa-2x"></i>
                                    </a>
                                </div>
                                <div class="p-5 text-end">
                                    <h5 class="mb-3">{{ $service->title }} </h5>
                                    <span> {{ $service->description }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>

            </div>
        </div>


        <!-- Service End -->


        <!-- Testimonial Start -->
        @include('partials.testmonials')
        <!-- Testimonial End -->





        <!-- Back to Top -->
    </div>



@endsection
