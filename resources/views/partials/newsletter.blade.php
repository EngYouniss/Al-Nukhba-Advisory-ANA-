<div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container px-lg-5">
    <div class="row align-items-center" style="height: 250px;">

      <!-- النص والإيميل -->
      <div class="col-12 col-md-6 text-white">
        <h3 class="text-white mb-2">هل أنت مستعد للبدء؟</h3>
        <small class="text-white">اشترك الآن ليصلك كل جديد وخدماتنا القانونية.</small>

        <div class="position-relative w-100 mt-3">
          <!-- لاحظ: pe → ps (لأن RTL) -->
          <input class="form-control border-0 rounded-pill w-100 pe-4 ps-5"
                 type="email" placeholder="أدخل بريدك الإلكتروني" style="height: 48px;">

          <button type="button"
                  class="btn shadow-none position-absolute top-0 start-0 mt-1 ms-2">
            <i class="fa fa-paper-plane text-primary fs-4"></i>
          </button>
        </div>
      </div>

      <!-- الصورة -->
      <div class="col-md-6 text-center mb-n5 d-none d-md-block">
        <img class="img-fluid mt-5" style="max-height: 250px;"
             src="{{ asset('front/img') }}/newsletter.png" alt="اشترك في النشرة">
      </div>

    </div>
  </div>
</div>
