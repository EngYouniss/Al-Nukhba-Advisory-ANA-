@extends('layout.master')
@section('content')
    <div class="container-xxl bg-white p-0">
        @if (session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif

        @if (session('error'))
            <x-alert type="danger" :message="session('error')" />
        @endif
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">تواصل معنا</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">الصفحات</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">اتصل بنا</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-xxl py-6" dir="rtl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">اتصل بنا</div>
                    <h2 class="mb-5">إذا كان لديك أي استفسار، لا تتردد في التواصل معنا</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">

                        <form action="{{ route('client.contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control text-end" id="name" name="name"
                                            placeholder="الاسم الكامل">
                                        <label for="name" class="text-end w-100">الاسم الكامل</label>
                                    </div>
                                    @error('name')
                                        <small class="text-danger d-block text-end">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control text-end" id="email" name="email"
                                            placeholder="البريد الإلكتروني">
                                        <label for="email" class="text-end w-100">البريد الإلكتروني</label>
                                    </div>
                                    @error('email')
                                        <small class="text-danger d-block text-end">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control text-end" id="subject" name="subject"
                                            placeholder="الموضوع">
                                        <label for="subject" class="text-end w-100">الموضوع</label>
                                    </div>
                                    @error('subject')
                                        <small class="text-danger d-block text-end">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control text-end" name="message" id="message" placeholder="اكتب رسالتك هنا"
                                            style="height: 150px"></textarea>
                                        <label for="message" class="text-end w-100">الرسالة</label>
                                    </div>
                                    @error('message')
                                        <small class="text-danger d-block text-end">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">إرسال الرسالة</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

    </div>
@endsection
