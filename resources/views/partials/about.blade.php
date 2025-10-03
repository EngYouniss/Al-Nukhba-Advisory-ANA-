<div class="container-xxl py-6" dir="rtl" id="about-us">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- الصورة المحسنة -->
            <div class="col-lg-6 wow zoomIn order-lg-2" data-wow-delay="0.1s">
                <div class="image-container position-relative">
                    <img class="img-fluid rounded-3 shadow-lg" src="{{ asset('front/img/about.png') }}"
                        alt="فريق المحامين والمستشارين القانونيين">
                    <div class="floating-badge bg-primary text-white rounded-pill px-3 py-2 shadow">
                        <i class="fas fa-balance-scale me-2"></i>خبرة قانونية ممتدة
                    </div>
                </div>
            </div>

            <!-- النص المحسن -->
            <div class="col-lg-6 wow fadeInUp order-lg-1 text-end" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3 bg-light">من نحن</div>
                <h2 class="mb-4 fw-bold text-dark">شركاؤك في تحقيق العدالة والتميز القانوني</h2>
                <p class="mb-4 lead text-muted">
                    نحن فريق من المحامين والمستشارين القانونيين المتخصصين نقدم استشارات قضائية وقانونية شاملة.
                    نتمتع بخبرة عميقة في مختلف المجالات القانونية ونضع خبرتنا تحت تصرفكم لحماية حقوقكم وتحقيق أفضل
                    النتائج.
                </p>

                <!-- الإحصائيات -->
                <div class="row mb-4 text-center">
                    <div class="col-4">
                        <div class="stat-box">
                            <h4 class="text-primary fw-bold mb-1">+500</h4>
                            <span class="text-muted small">قضية ناجحة</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-box">
                            <h4 class="text-primary fw-bold mb-1">+25</h4>
                            <span class="text-muted small">سنة خبرة</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-box">
                            <h4 class="text-primary fw-bold mb-1">98%</h4>
                            <span class="text-muted small">نسبة النجاح</span>
                        </div>
                    </div>
                </div>

                <!-- الميزات المحسنة -->
                <div class="row g-3 mb-4">
                    <div class="col-12 d-flex justify-content-end text-end feature-item">
                        <div
                            class="ms-3 flex-shrink-0 btn-lg-square rounded-circle bg-primary d-flex align-items-center justify-content-center">
                            <i class="fas fa-gavel text-white"></i>
                        </div>
                        <div class="feature-content">
                            <h6 class="fw-bold">الاستشارات القضائية المتخصصة</h6>
                            <span class="text-muted">
                                نقدم استشارات قضائية متخصصة في جميع المجالات القانونية، مع تحليل دقيق للقضايا وتقديم
                                الحلول القانونية المثلى.
                            </span>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end text-end feature-item">
                        <div
                            class="ms-3 flex-shrink-0 btn-lg-square rounded-circle bg-primary d-flex align-items-center justify-content-center">
                            <i class="fas fa-file-contract text-white"></i>
                        </div>
                        <div class="feature-content">
                            <h6 class="fw-bold">صياغة العقود واللوائح</h6>
                            <span class="text-muted">
                                نضمن صياغة العقود واللوائح القانونية بدقة عالية لحماية مصالحكم ومنع النزاعات المستقبلية.
                            </span>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end text-end feature-item">
                        <div
                            class="ms-3 flex-shrink-0 btn-lg-square rounded-circle bg-primary d-flex align-items-center justify-content-center">
                            <i class="fas fa-handshake text-white"></i>
                        </div>
                        <div class="feature-content">
                            <h6 class="fw-bold">التسويات والوساطة القانونية</h6>
                            <span class="text-muted">
                                نسعى لحل النزاعات بالطرق الودية من خلال الوساطة القانونية المهنية، مع الحفاظ على حقوق
                                العملاء.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- الأزرار المحسنة -->
                <div class="d-flex gap-3 flex-wrap justify-content-end">
                    <a class="btn btn-primary rounded-pill py-3 px-5 shadow-sm hover-lift" href="{{ route('about') }}">
                        <span>تعرف على فريقنا</span>
                        <i class="fas fa-arrow-left me-2"></i>
                    </a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5 shadow-sm hover-lift" href="#">
                        <span>احجز استشارة</span>
                        <i class="fas fa-phone me-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* تحسينات التصميم */
    #about-us {
        background: linear-gradient(135deg, #f8f9fa 0%, #f0f4f8 100%);
        position: relative;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        border: 1px solid #e9ecef;
    }

    .floating-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        animation: float 3s ease-in-out infinite;
        font-weight: 600;
        z-index: 2;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .feature-item {
        transition: transform 0.3s ease;
        padding: 15px;
        border-radius: 10px;
        border-right: 3px solid transparent;
    }

    .feature-item:hover {
        transform: translateX(-5px);
        background-color: rgba(13, 110, 253, 0.05);
        border-right-color: #0d6efd;
    }

    .feature-content h6 {
        color: #2c3e50;
        margin-bottom: 8px;
    }

    .stat-box {
        padding: 15px 10px;
        border-radius: 8px;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .stat-box:hover {
        transform: translateY(-5px);
        background-color: rgba(13, 110, 253, 0.1);
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.1);
    }

    .hover-lift {
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2) !important;
    }

    .btn-outline-primary {
        border-width: 2px;
    }

    /* تحسينات التجاوب */
    @media (max-width: 768px) {
        .feature-item {
            text-align: center !important;
            justify-content: center !important;
            flex-direction: column-reverse;
        }

        .feature-item .ms-3 {
            margin-left: 0 !important;
            margin-top: 15px;
        }

        .floating-badge {
            position: relative;
            top: auto;
            left: auto;
            display: inline-block;
            margin-bottom: 15px;
        }

        .d-flex.gap-3 {
            justify-content: center !important;
        }

        .d-flex.gap-3 .btn {
            width: 100%;
            max-width: 280px;
        }
    }

    /* تأثيرات إضافية */
    .image-container::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(45deg, rgba(13, 110, 253, 0.1) 0%, transparent 100%);
        z-index: 1;
        border-radius: 12px;
        pointer-events: none;
    }

    .image-container img {
        position: relative;
        z-index: 0;
    }
</style>
