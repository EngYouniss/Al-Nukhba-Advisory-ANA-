<aside class="sidebar-left sidebar-pro border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>

    <nav class="vertnav navbar navbar-light d-flex flex-column min-vh-100 theme-primary tabs-md">
        <!-- logo -->
        <div class="w-100 mb-3 d-flex brand-box">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('/') }}">
                <svg id="logo" class="navbar-brand-img brand-sm" viewBox="0 0 120 120">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                    </g>
                </svg>
                <div class="brand-title">المكتب القانوني</div>
            </a>
        </div>

        <!-- لوحة التحكم -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}"
                    class="nav-link nav-link--dashboard {{ request()->routeIs('admin.*') ? 'active' : '' }}"
                    aria-expanded="false">
                    <i class="fe fe-home fe-16"></i>
                    <span class="item-text">لوحة التحكم</span>
                </a>
            </li>
        </ul>

        <!-- الفاصل أسفل لوحة التحكم -->

        <!-- الأقسام -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <x-side-bar-tab href="{{ route('services.index') }}" icon="fe-briefcase" name="الخدمات" />
            <x-side-bar-tab href="{{ route('features.index') }}" icon="fe-star" name="الميزات" />
            <x-side-bar-tab href="{{ route('messages.index') }}" icon="fe-mail" name="الرسائل" />
            <x-side-bar-tab href="{{ route('subscribers.index') }}" icon="fe-users" name="المشتركين" />
            <x-side-bar-tab href="{{ route('testmonials.index') }}" icon="fe-message-square" name="شهادات عملائنا" />
            <x-side-bar-tab href="{{ route('faqs.index') }}" icon="fe-help-circle" name="الأسئلة الشائعة" />
            <x-side-bar-tab href="{{ route('teams.index') }}" icon="fe-help-circle" name="أعضاء الفريق " />
        </ul>

        <div class="mt-auto w-100 p-3 border-top">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center">
                    <i class="fe fe-log-out ml-2"></i>
                    <span>تسجيل الخروج</span>
                </button>
            </form>
        </div>
    </nav>
</aside>

<style>
    /* ——— غلاف السايدبار: خلفية فاتحة متدرجة + حافة ناعمة ——— */
    .sidebar-pro.sidebar-left {
        background:
            radial-gradient(120% 100% at 100% 0%, rgba(13, 110, 253, .06), transparent 55%),
            linear-gradient(180deg, #ffffff 0%, #f7f9fc 100%);
        border-right: 1px solid #e9eef6 !important;
        box-shadow: 0 12px 34px rgba(16, 24, 40, .08);
    }

    /* صندوق الشعار والعنوان */
    .sidebar-pro .brand-box {
        padding: .75rem 1rem 0;
        border-bottom: 1px solid #eef2f7;
    }

    .sidebar-pro .navbar-brand-img {
        filter: drop-shadow(0 2px 8px rgba(16, 24, 40, .12));
    }

    .sidebar-pro .brand-title {
        margin-top: .35rem;
        font-weight: 800;
        font-size: .9rem;
        letter-spacing: .3px;
        color: #284b8f;
        opacity: .9;
    }

    /* زر لوحة التحكم (مميز Primary) */
    .tabs-md .nav-link--dashboard {
        color: #fff;
        background: rgb(var(--bs-primary-rgb));
        border-color: rgba(var(--bs-primary-rgb), .95);
        box-shadow: 0 6px 18px rgba(var(--bs-primary-rgb), .25);
    }

    .tabs-md .nav-link--dashboard i {
        background: rgba(255, 255, 255, .18);
        border-color: rgba(255, 255, 255, .28);
        color: #fff;
    }

    .tabs-md .nav-link--dashboard:hover {
        filter: brightness(.96);
        transform: translateY(-1px);
        box-shadow: 0 8px 22px rgba(var(--bs-primary-rgb), .30);
    }

    /* Active لزر لوحة التحكم */
    .tabs-md .nav-link--dashboard.active {
        filter: brightness(.94);
        box-shadow: 0 10px 26px rgba(var(--bs-primary-rgb), .35);
    }

    /* تحسين بسيط للتابات العادية (توافق مع سِكِن السايدبار) */
    .tabs-md .navbar-nav {
        gap: .45rem;
        padding: .35rem 1rem 1rem;
    }

    .tabs-md .nav-link {
        position: relative;
        display: flex;
        align-items: center;
        gap: .6rem;
        padding: .7rem .9rem;
        border-radius: 12px;
        font-size: .98rem;
        font-weight: 700;
        color: #0b1930;
        background: #fff;
        border: 1px solid #e9eef6;
        transition: transform .12s ease, box-shadow .12s ease, border-color .12s ease, background .12s ease;
    }

    .tabs-md .nav-link i {
        width: 1.8rem;
        height: 1.8rem;
        display: grid;
        place-items: center;
        border-radius: 10px;
        font-size: 1.05rem;
        background: rgba(var(--bs-primary-rgb), .08);
        color: rgb(var(--bs-primary-rgb));
        border: 1px solid rgba(var(--bs-primary-rgb), .15);
        flex: 0 0 auto;
    }

    .tabs-md .nav-link:hover {
        border-color: rgba(var(--bs-primary-rgb), .28);
        background: rgba(var(--bs-primary-rgb), .06);
        box-shadow: 0 4px 14px rgba(var(--bs-primary-rgb), .14);
        transform: translateY(-1px);
    }

    .tabs-md .nav-link.active {
        color: rgb(var(--bs-primary-rgb));
        background: rgba(var(--bs-primary-rgb), .10);
        border-color: rgba(var(--bs-primary-rgb), .45);
        box-shadow: 0 6px 18px rgba(var(--bs-primary-rgb), .18);
    }

    [dir="rtl"] .tabs-md .nav-link.active::before {
        content: "";
        position: absolute;
        inset-inline-end: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: rgb(var(--bs-primary-rgb));
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
    }

    /* زر الخروج ينسجم مع الستايل */
    .tabs-md .logout-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: .5rem;
        padding: .75rem .9rem;
        border-radius: 12px;
        font-weight: 800;
        color: #fff;
        background: rgb(var(--bs-primary-rgb));
        border: 1px solid rgba(var(--bs-primary-rgb), .85);
        transition: filter .12s ease, box-shadow .12s ease, transform .12s ease;
    }

    .tabs-md .logout-btn:hover {
        filter: brightness(.96);
        box-shadow: 0 6px 18px rgba(var(--bs-primary-rgb), .22);
        transform: translateY(-1px);
    }

    /* موبايل */
    @media (max-width: 992px) {
        .tabs-md .nav-link {
            padding: .65rem .8rem;
            font-size: .96rem;
            border-radius: 10px;
        }

        .tabs-md .nav-link i {
            width: 1.7rem;
            height: 1.7rem;
            font-size: 1rem;
        }
    }
</style>
