<section class="container-xxl py-6" dir="rtl" aria-labelledby="svc-title">
    <div class="container">

        <!-- رأس القسم -->
        <header class="text-center mb-5">
            <span class="svc-kicker d-inline-block rounded-pill px-3 py-1 mb-2">خدماتنا</span>
            <h2 class="fw-bold m-0" id="svc-title">حلول قانونية متكاملة لنجاح أعمالك</h2>
            <p class="text-muted mt-2 mb-0">تمثيل قضائي • عقود ولوائح • تحكيم وتسوية نزاعات</p>
        </header>

        <!-- الشبكة -->
        <div class="row g-4 align-items-stretch ">
            @forelse ($services->take(6) as $service)
                <div class="col-12 col-md-6 col-lg-4 ">
                    <article class="svc-pro h-100 rounded-4 position-relative overflow-hidden"
                        style="background-color: rgb(255, 247, 247)">
                        <!-- شريط علوي متدرّج (تفصيلة فاخرة) -->
                        <span class="svc-topline"></span>

                        <!-- الهيدر: أيقونة + وسم قصير (اختياري) -->
                        <div class="d-flex justify-content-between align-items-start flex-row-reverse p-4">
                            <div class="svc-icon">
                                <i class="{{ $service->icon }}" aria-hidden="true"></i>
                            </div>
                            <h5 class="fw-semibold mb-2 text-dark">{{ $service->title }}</h5>
                        </div>

                        <!-- المحتوى -->
                        <div class="px-4 pb-4 text-end">
                            <p class="text-muted mb-4">{{ $service->description }}</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- شارة مصغّرة (اختياري: أضف حقلاً في الداتا لاحقاً) -->
                                <span class="svc-badge small"><i class="bi bi-shield-check me-1"></i>سرّية تامة</span>

                                <!-- رابط أنيق -->
                                <a href="#" class="svc-cta" aria-label="التفاصيل عن {{ $service->title }}">
                                    <span>التفاصيل</span>
                                    <i class="bi bi-arrow-left-short ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border rounded-4 text-center mb-0">لا توجد خدمات متاحة حاليًا.</div>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('client.services') }}" class="btn btn-primary rounded-pill px-4">عرض كل الخدمات</a>
        </div>
    </div>
</section>


<style>
    /* رابط التفاصيل */
    .svc-cta {
        display: inline-flex;
        align-items: center;
        gap: .25rem;
        color: rgb(var(--bs-primary-rgb));
        font-weight: 600;
        text-decoration: none;
        position: relative;
    }

    .svc-cta::after {
        content: "";
        position: absolute;
        inset: auto 0 -2px 0;
        height: 2px;
        background: currentColor;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform .25s ease;
    }

    .svc-cta:hover::after {
        transform: scaleX(1);
    }
</style>
