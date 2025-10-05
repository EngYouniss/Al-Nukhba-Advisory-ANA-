<!-- القسم كامل -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center" style="max-width:600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">آراء العملاء</div>
            <h2 class="mb-5">ماذا يقول عملاؤنا</h2>
        </div>

        <!-- نخلي اتجاه الكاروسيل LTR للحسابات، والعناصر نفسها RTL -->
        <div class="owl-carousel testimonial-carousel">

            @forelse ($testmonials as $testmonial)
                <div class="testimonial-item rounded p-4 text-end">
                    <!-- أيقونة الاقتباس -->
                    <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>

                    <!-- نص الرأي -->
                    <p class="mb-3">{{ $testmonial->description }}</p>

                    <!-- الصورة يمين والنص يسار -->
                    <div class="d-flex align-items-center">
                        <div class="order-2 me-3 text-end">
                            <h6 class="mb-0">{{ $testmonial->name }}</h6>
                            <small class="text-muted">{{ $testmonial->position }}</small>
                        </div>
                        <img class="order-1 rounded-circle flex-shrink-0"
                            style="width:56px;height:56px;object-fit:cover" src="{{ $testmonial->image }}"
                            alt="{{ $testmonial->name }}">
                    </div>

                </div>
            @empty
                <div class="text-center text-muted">لا توجد آراء حالياً.</div>
            @endforelse

        </div>
    </div>
</div>

<!-- إصلاحات RTL الخاصة بالكاروسيل وتحسينات الشكل -->
<style>
    /* الكاروسيل نفسه LTR للحسابات الداخلية */
    .owl-carousel {
        direction: ltr;
    }

    /* عناصر السلايد RTL حتى تبقى المحاذاة يمين */
    .owl-carousel .owl-item {
        direction: rtl;
        text-align: right;
    }

    .testimonial-item {
        background: #fff;
        border: 1px solid #e9ecef;
    }

    /* منع تمدد الصورة */
    .testimonial-item img {
        display: block;
    }
</style>
