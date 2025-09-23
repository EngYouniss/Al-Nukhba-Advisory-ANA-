<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" >
  <a href="index.html" class="navbar-brand p-0">
    <h1 class="m-0">مكتب الاستشارات</h1>
    <!-- <img src="img/logo.png" alt="الشعار"> -->
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <!-- لاحظ: استبدلنا ms-auto بـ me-auto ليُدفع للقائمة يسار مع RTL -->
    <div class="navbar-nav me-auto py-0">
      <a href="{{route('client.index')}}" class="nav-item nav-link @yield('active-index')">الرئيسية</a>
      <a href="{{route('about')}}" class="nav-item nav-link">من نحن</a>
      <a href="{{route('client.services')}}" class="nav-item nav-link @yield('active-services')">خدماتنا</a>
      <a href="contact.html" class="nav-item nav-link @yield('active-contact')">اتصل بنا</a>
    </div>
  </div>
</nav>
