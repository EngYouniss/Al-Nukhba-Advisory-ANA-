@extends('layout.master')

@section('title', 'عن المكتب')

@section('content')
    <!-- لا تكرّر هذه إن كانت مضافة في الـlayout -->

    <style>
        .icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #0d5c63;
            color: #fff;
            box-shadow: 0 6px 18px rgba(13, 92, 99, .18)
        }

        :root {
            --law-primary: #0d5c63;
            --law-muted: 00b98e;
        }

        .section-muted {
            background: var(--law-muted)
        }

        .law-card {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 16px;
            padding: 24px;
            transition: transform .2s ease, box-shadow .2s ease
        }

        /* .stat-card {
                background: #fff;
                border: 1px solid #e9ecef;
                border-radius: 16px;
                padding: 24px;
                font-size: 20px;
                font-weight: bold
            } */

        /* عكس أسهم الأكورديون لتكون يمين */
        .force-rtl .accordion-button {
            justify-content: space-between;
        }

        .force-rtl .accordion-button::after {
            margin-left: 0 !important;
            margin-right: .5rem !important;
            transform: scaleX(-1);
        }

        /* بطاقات الميزة: أيقونة يمين والنص يسار (لكن كلاهما بمحاذاة يمين) */
        .feature-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: .75rem;
        }

        /* فواصل بسيطة */
    </style>

    <div class="force-rtl">
        <div class="container-xxl bg-primary page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item text-white active" aria-current="page">

                        </li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">عننا</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- نبذة -->
        <section id="about" class="py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="d-inline-block border rounded-pill px-4 mb-3"
                            style="border-color:var(--law-primary);color:var(--law-primary)">نبذة</div>
                        <h2 class="mb-3">خبرة قضائية وصياغة قانونية دقيقة</h2>
                        <p class="mb-0 text-muted">
                            فريق من المحامين والمستشارين القانونيين يقدّم حلولاً عملية: مذكرات ولوائح، مرافعات،
                            تأسيس شركات، وصياغة وتدقيق عقود، مع متابعة إلكترونية للجلسات والتنفيذ.
                        </p>

                        <div class="vstack gap-3 mt-4">
                            <div class="feature-row">
                                <div class="icon-circle"><i class="fa-solid fa-scale-balanced"></i></div>
                                <div>
                                    <h6 class="mb-1">استشارات قضائية مكتوبة</h6>
                                    <small class="text-muted d-block">رأي نظامي واضح وخيارات متاحة وخطوات عملية.</small>
                                </div>
                            </div>
                            <div class="feature-row">
                                <div class="icon-circle"><i class="fa-solid fa-file-contract"></i></div>
                                <div>
                                    <h6 class="mb-1">صياغة وتدقيق العقود</h6>
                                    <small class="text-muted d-block">عقود متوازنة تقلّل المخاطر وتحفظ الحقوق.</small>
                                </div>
                            </div>
                            <div class="feature-row">
                                <div class="icon-circle"><i class="fa-solid fa-gavel"></i></div>
                                <div>
                                    <h6 class="mb-1">مرافعات وتمثيل</h6>
                                    <small class="text-muted d-block">إعداد مذكرات، حضور جلسات، ومتابعة التنفيذ.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{ asset('front/img/about.png') }}" class="img-fluid rounded-3" alt="عن المكتب">
                    </div>
                </div>
            </div>
        </section>

        <div class="law-divider container mb-5"></div>

        <!-- مجالات الممارسة -->
        <section class="py-5 section-muted">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="d-inline-block border rounded-pill px-4 mb-2"
                        style="border-color:var(--law-primary);color:var(--law-primary)">مجالات الممارسة</div>
                    <h2 class="mb-0">نغطي أهم القطاعات القانونية</h2>
                </div>

                <div class="row g-4">
                    @foreach ([['ic' => 'fa-scale-balanced', 't' => 'القضاء المدني', 'd' => 'مطالبات، تعويضات، تنفيذ، نزاعات مالية.'], ['ic' => 'fa-briefcase', 't' => 'التجاري والشركات', 'd' => 'تأسيس، عقود شراكة، حوكمة، منازعات تجارية.'], ['ic' => 'fa-handcuffs', 't' => 'الجزائي', 'd' => 'قضايا جزائية، مذكرات دفاع، متابعة التحقيق.'], ['ic' => 'fa-people-roof', 't' => 'الأحوال الشخصية', 'd' => 'طلاق، حضانة، نفقة، إثبات ونفي.'], ['ic' => 'fa-file-signature', 't' => 'العقود والتفاوض', 'd' => 'صياغة، مراجعة، ملحقات، تفاوض منهجي.'], ['ic' => 'fa-briefcase-medical', 't' => 'العمل والعمّال', 'd' => 'عقود عمل، فصل، مستحقات ونزاعات.']] as $p)
                        <div class="col-md-6 col-lg-4">
                            <div class="law-card h-100">
                                <i class="fa-solid {{ $p['ic'] }} mb-3"
                                    style="font-size:24px;color:var(--law-primary)"></i>
                                <h6 class="mb-1">{{ $p['t'] }}</h6>
                                <p class="text-muted mb-0">{{ $p['d'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- أرقام -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-6 col-lg-3">
                        <div class="stat-card">
                            <div class="num">10+</div>
                            <div class="text-muted">سنوات خبرة</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="stat-card">
                            <div class="num">900+</div>
                            <div class="text-muted">استشارة مُقدّمة</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="stat-card">
                            <div class="num">350+</div>
                            <div class="text-muted">قضية ممثَّلة</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="stat-card">
                            <div class="num">٪95</div>
                            <div class="text-muted">رضا العملاء</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--
    <!-- الاعتمادات -->
    <section class="py-5 section-muted">
      <div class="container">
        <div class="text-center mb-4">
          <div class="d-inline-block border rounded-pill px-4 mb-2" style="border-color:var(--law-primary);color:var(--law-primary)">اعتمادات</div>
          <h2 class="mb-0">عضويات ومزاولات</h2>
        </div>
        <div class="row g-3 text-center">
          <div class="col-6 col-lg-3"><div class="law-card py-3">ترخيص مزاولة محاماة</div></div>
          <div class="col-6 col-lg-3"><div class="law-card py-3">غرفة التجارة</div></div>
          <div class="col-6 col-lg-3"><div class="law-card py-3">هيئة المحامين</div></div>
          <div class="col-6 col-lg-3"><div class="law-card py-3">وساطة وتحكيم</div></div>
        </div>
      </div>
    </section> --}}

        <!-- الفريق -->
        @include('partials.team')
        <!-- قالوا عنّا -->
        @include('partials.testmonials')
        <!-- الأسئلة الشائعة -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="d-inline-block border rounded-pill px-4 mb-2"
                        style="border-color:var(--law-primary);color:var(--law-primary)">الأسئلة الشائعة</div>
                    <h2 class="mb-0">أسئلة متكرّرة</h2>
                </div>

                <div class="accordion" id="faq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="q1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#a1" aria-expanded="false" aria-controls="a1">
                                كيف تتم الاستشارة الأولى؟
                            </button>
                        </h2>
                        <div id="a1" class="accordion-collapse collapse" aria-labelledby="q1" data-bs-parent="#faq">
                            <div class="accordion-body text-muted">
                                تحجز موعدًا، نطّلع على مستنداتك، نحدّد الخيار القانوني ونقدّم عرض أتعاب واضح.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="q2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                                هل الاستشارات سرّية؟
                            </button>
                        </h2>
                        <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2"
                            data-bs-parent="#faq">
                            <div class="accordion-body text-muted">
                                نعم. السرّية مبدأ أساسي، ولا نشارك معلوماتك دون موافقتك أو مسوّغ نظامي.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="q3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
                                ما نطاق التمثيل في القضايا؟
                            </button>
                        </h2>
                        <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3"
                            data-bs-parent="#faq">
                            <div class="accordion-body text-muted">
                                إعداد المذكرات، تقديمها عبر المنصات، المرافعة، متابعة الجلسات والتنفيذ حتى إقفال الملف.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- دعوة لاتخاذ إجراء -->
        <section class="py-5 text-white text-center"
            style="background:linear-gradient(135deg,var(--law-primary),#07363a)">
            <div class="container">
                <h3 class="mb-3">تحتاج رأيًا نظاميًا واضحًا؟</h3>
                <p class="mb-4">احجز استشارة الآن، واستلم ملخّص إجراءات خلال ٢٤ ساعة عمل.</p>
                <a href="#" class="btn btn-light rounded-pill px-4">احجز استشارة</a>
            </div>
        </section>
    </div>
@endsection
