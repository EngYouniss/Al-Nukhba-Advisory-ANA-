<nav class="navbar navbar-expand-lg navbar-light main-nav px-4 px-lg-5 py-3 py-lg-0" dir="rtl"
    aria-label="التنقل الرئيسي">
    <div class="container-xxl">
        <!-- الشعار -->
        <a href="{{ route('client.index') }}" class="navbar-brand p-0 d-flex align-items-center gap-2">
            <!-- استخدم الصورة إن وجدت -->
            <!-- <img src="{{ asset('front/img/logo.svg') }}" alt="شعار المكتب" height="34"> -->
            <h1 class="m-0 fw-semibold brand-text">النخبة  </h1>
        </a>

        <!-- زر القائمة على الموبايل -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="تبديل القائمة">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- القوائم -->
            <div class="navbar-nav ms-lg-auto py-0">
                <a href="{{ route('client.index') }}" class="nav-item nav-link @yield('active-index')">الرئيسية</a>
                <a href="{{ route('about') }}" class="nav-item nav-link @yield('active-about')">من نحن</a>

                <!-- يمكنك تحويل خدماتنا إلى دروبداون لاحقًا -->
                <!--
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle @yield('active-services')" data-bs-toggle="dropdown" role="button" aria-expanded="false">خدماتنا</a>
          <div class="dropdown-menu border-0 shadow-sm rounded-3 mt-2">
            <a href="{{ route('client.services') }}" class="dropdown-item">كل الخدمات</a>
            <a href="#" class="dropdown-item">صياغة العقود</a>
            <a href="#" class="dropdown-item">تحكيم</a>
          </div>
        </div>
        -->
                <a href="{{ route('client.services') }}" class="nav-item nav-link @yield('active-services')">خدماتنا</a>
                <a href="{{ route('client.contact.index') }}" class="nav-item nav-link @yield('active-contact')">اتصل بنا</a>
            </div>

            <!-- CTA: اتصال سريع -->
            <div class="d-none d-lg-flex align-items-center gap-3 ms-3">
                <a href="tel:+967XXXXXXXX" class="btn btn-sm btn-outline-primary rounded-pill cta-phone">
                    <i class="bi bi-telephone ms-1"></i> اتصال سريع
                </a>
                <!-- لو عندك دخول لوحة -->
                <!-- <a href="#" class="btn btn-sm btn-primary rounded-pill">تسجيل الدخول</a> -->
            </div>
        </div>
    </div>
</nav>
<style>
    /* أساسيات المظهر */
    .main-nav {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        border-bottom: 1px solid rgba(255, 255, 255, .18);
        transition: background-color .25s ease, box-shadow .25s ease, border-color .25s ease;
        background: transparent;
    }

    .main-nav .brand-text {
        color: #fff;
    }

    /* روابط */
    .main-nav .nav-link {
        position: relative;
        color: #fff;
        padding: 1.25rem .25rem;
        margin-inline: .85rem;
        font-weight: 500;
        transition: color .2s ease;
    }

    .main-nav .nav-link:hover,
    .main-nav .nav-link:focus {
        color: #fff;
    }

    .main-nav .nav-link:focus-visible {
        outline: 2px solid #fff;
        outline-offset: 2px;
        border-radius: .25rem;
    }

    /* شريط سفلي للحالة النشطة/الهوفر */
    .main-nav .nav-link::before {
        content: "";
        position: absolute;
        inset: auto 0 10px 0;
        height: 2px;
        background: #fff;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform .25s ease, bottom .25s ease;
        opacity: .95;
    }

    .main-nav .nav-link:hover::before,
    .main-nav .nav-link.active::before,
    .main-nav .nav-link.@yield('active-index')

    ::before {
        transform: scaleX(1);
        bottom: -2px;
    }

    /* عند التثبيت (بعد الهيرو) */
    .navbar-stuck {
        position: fixed;
        background: #fff;
        border-bottom-color: rgba(16, 24, 40, .08);
        box-shadow: 0 8px 24px rgba(16, 24, 40, .08);
    }

    .navbar-stuck .brand-text {
        color: var(--primary);
    }

    .navbar-stuck .nav-link {
        color: var(--dark);
    }

    .navbar-stuck .nav-link:hover,
    .navbar-stuck .nav-link:focus {
        color: var(--primary);
    }

    .navbar-stuck .nav-link::before {
        background: var(--primary);
    }

    /* Dropdown (إن استخدمت الدروبداون أعلاه) */
    @media (min-width: 992px) {
        .main-nav .dropdown-menu {
            display: block;
            visibility: hidden;
            opacity: 0;
            transform: translateY(6px);
            transition: .2s ease;
            border: 0;
            background: #fff;
        }

        .main-nav .nav-item:hover .dropdown-menu {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* موبايل */
    @media (max-width: 991.98px) {
        .main-nav {
            position: relative;
            background: #fff;
            border-bottom-color: rgba(16, 24, 40, .08);
        }

        .main-nav .brand-text {
            color: var(--primary);
        }

        .main-nav .nav-link {
            color: var(--dark);
            padding: .75rem 0;
            margin-inline: 0;
        }

        .main-nav .nav-link::before {
            background: var(--primary);
            bottom: 0;
        }
    }

    /* زر الاتصال */
    .cta-phone {
        --bs-btn-color: #0B3B6F;
        --bs-btn-border-color: #0B3B6F;
        --bs-btn-hover-bg: #0B3B6F;
        --bs-btn-hover-border-color: #0B3B6F;
        --bs-btn-hover-color: #fff;
    }

    /* اختياري: زجاج خفيف خلف النافبار لما يكون فوق الهيرو */
    .main-nav.navbar-glass {
        background: rgba(255, 255, 255, .06);
        border-bottom-color: rgba(255, 255, 255, .18);
        backdrop-filter: saturate(130%) blur(8px);
        -webkit-backdrop-filter: saturate(130%) blur(8px);
    }
</style>
<script>
    (function() {
        const nav = document.querySelector('.main-nav');
        const onScroll = () => {
            const stuck = window.scrollY > 24; // متى يتحول لثابت/أبيض
            nav.classList.toggle('navbar-stuck', stuck);
            nav.classList.toggle('navbar-glass', !stuck); // زجاجي فوق الهيرو
        };
        onScroll();
        window.addEventListener('scroll', onScroll, {
            passive: true
        });
    })();
</script>
