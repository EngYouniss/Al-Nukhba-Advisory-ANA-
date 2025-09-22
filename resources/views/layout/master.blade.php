
<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('partials.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
          @include('partials.navbar')

        </div>
        <!-- Navbar & Hero End -->

        {{-- content --}}
        @yield('content')

    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->

 <!-- JavaScript Libraries -->
  @include('partials.scripts')
</body>

</html>
