<!-- القسم كامل -->
<div class="container-xxl py-6" >
  <div class="container">
    <div class="mx-auto text-center" style="max-width: 600px;">
      <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">آراء العملاء</div>
      <h2 class="mb-5">ماذا يقول عملاؤنا</h2>
    </div>

    <!-- ملاحظة مهمة: نخلي اتجاه الكاروسيل نفسه LTR، ونعكس العناصر داخله -->
    <div class="owl-carousel testimonial-carousel">

      <!-- بطاقة 1 -->
      <div class="testimonial-item rounded p-4 text-end">
        <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>
        <p>مكتب احترافي ومتابعة دقيقة. الاستشارة كانت واضحة وسهّلت قراري.</p>

        <!-- نعكس الصف عشان الصورة تكون يمين والنص يسار مع بقاء المحاذاة يمين -->
        <div class="d-flex align-items-center flex-row-reverse gap-3">
          <img class="img-fluid rounded-circle" style="width:56px;height:56px;object-fit:cover"
               src="{{ asset('front/img') }}/testimonial-1.jpg" alt="أحمد علي">
          <div class="text-end">
            <h6 class="mb-1">أحمد علي</h6>
            <small class="text-muted">رجل أعمال</small>
          </div>
        </div>
      </div>

      <!-- بطاقة 2 -->
      <div class="testimonial-item rounded p-4 text-end">
        <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>
        <p>تدقيق العقد كان ممتازًا وأنقذنا من مخاطرة كبيرة.</p>
        <div class="d-flex align-items-center flex-row-reverse gap-3">
          <img class="img-fluid rounded-circle" style="width:56px;height:56px;object-fit:cover"
               src="{{ asset('front/img') }}/testimonial-2.jpg" alt="سارة محمد">
          <div class="text-end">
            <h6 class="mb-1">سارة محمد</h6>
            <small class="text-muted">مديرة شركة</small>
          </div>
        </div>
      </div>

      <!-- بطاقة 3 -->
      <div class="testimonial-item rounded p-4 text-end">
        <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>
        <p>شرح قانوني مبسّط وتحديثات مستمرة على مسار القضية.</p>
        <div class="d-flex align-items-center flex-row-reverse gap-3">
          <img class="img-fluid rounded-circle" style="width:56px;height:56px;object-fit:cover"
               src="{{ asset('front/img') }}/testimonial-3.jpg" alt="خالد يوسف">
          <div class="text-end">
            <h6 class="mb-1">خالد يوسف</h6>
            <small class="text-muted">مستثمر</small>
          </div>
        </div>
      </div>

      <!-- بطاقة 4 -->
      <div class="testimonial-item rounded p-4 text-end">
        <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>
        <p>فريق متعاون وموثوق. التقارير الدورية توفر رؤية واضحة.</p>
        <div class="d-flex align-items-center flex-row-reverse gap-3">
          <img class="img-fluid rounded-circle" style="width:56px;height:56px;object-fit:cover"
               src="{{ asset('front/img') }}/testimonial-4.jpg" alt="ندى أحمد">
          <div class="text-end">
            <h6 class="mb-1">ندى أحمد</h6>
            <small class="text-muted">موظفة</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- إصلاحات RTL الخاصة بالكاروسيل -->
<style>
  /* خله LTR داخليًا لأغراض الحساب، وأرجع RTL على عناصره */
  .owl-carousel{ direction:ltr; }
  .owl-carousel .owl-item{ direction:rtl; text-align:right; }

  /* تحسينات شكل */
  .testimonial-item{ background:#fff; border:1px solid #e9ecef; }
</style>

<!-- تهيئة Owl (مهم: rtl:true) -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('.testimonial-carousel').owlCarousel({
      rtl: true,            // هذا هو المفتاح
      loop: true,
      margin: 24,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 600,
      responsive: {
        0:   { items: 1 },
        768: { items: 2 },
        992: { items: 3 }
      }
    });
  });
</script>
