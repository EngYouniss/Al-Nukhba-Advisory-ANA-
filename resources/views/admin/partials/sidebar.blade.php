


<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- logo -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('/') }}">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm"
             xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87"/>
            <polygon class="st0" points="96,69 33,69 42,51 105,51"/>
            <polygon class="st0" points="78,33 15,33 24,15 87,15"/>
          </g>
        </svg>
      </a>
    </div>

    <!-- لوحة التحكم -->
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item">
        <a href="{{ route('admin.index') }}" aria-expanded="false" class="nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">لوحة التحكم</span>
        </a>
      </li>
    </ul>

    <!-- الأقسام -->
    <p class="text-muted nav-heading mt-4 mb-1"><span>الأجزاء</span></p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      {{-- Services --}}
      <x-side-bar-tab href="{{ route('services.index') }}" icon="fe-briefcase" name="الخدمات"/>
      {{-- Features --}}
      <x-side-bar-tab href="{{ route('features.index') }}" icon="fe-star" name="الميزات"/>
      {{-- Messages --}}
      <x-side-bar-tab href="{{ route('messages.index') }}" icon="fe-mail" name="الرسائل"/>
      {{-- Subscribers --}}
      <x-side-bar-tab href="{{ route('subscribers.index') }}" icon="fe-users" name="المشتركين"/>
      {{-- Testimonials --}}
      <x-side-bar-tab href="{{ route('testmonials.index') }}" icon="fe-message-square" name="شهادات عملائنا"/>
      {{-- FAQs --}}
      <x-side-bar-tab href="{{ route('faqs.index') }}" icon="fe-help-circle" name="الأسئلة الشائعة"/>
      <x-side-bar-tab href="{{ route('faqs.index') }}" icon="fe-help-circle" name="الأسئلة الشائعة"/>
    </ul>
  </nav>
</aside>
