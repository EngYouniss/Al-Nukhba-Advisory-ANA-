<!-- القسم كامل -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">آراء العملاء</div>
            <h2 class="mb-5">ماذا يقول عملاؤنا</h2>
        </div>

        <!-- ملاحظة مهمة: نخلي اتجاه الكاروسيل نفسه LTR، ونعكس العناصر داخله -->
        <div class="owl-carousel testimonial-carousel">

            @forelse ($testmonials as $testmonial)
                <div class="testimonial-item rounded p-4 text-end">
                    <i class="fa fa-quote-right fa-2x text-primary mb-3"></i>
                    <p> {{$testmonial->description}}
                    <!-- نعكس الصف عشان الصورة تكون يمين والنص يسار مع بقاء المحاذاة يمين -->
                    <div class="d-flex align-items-center flex-row-reverse gap-3">
                        <img class="img-fluid rounded-circle" style="width:56px;height:56px;object-fit:cover"
                            src="{{$testmonial->image}}" alt="أحمد علي">
                        <div class="text-end">
                            <h6 class="mb-1"> {{$testmonial->name}}</h6>
                            <small class="text-muted">{{$testmonial->position}} </small>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>

<!-- إصلاحات RTL الخاصة بالكاروسيل -->
<style>
    /* خله LTR داخليًا لأغراض الحساب، وأرجع RTL على عناصره */
    .owl-carousel {
        direction: ltr;
    }

    .owl-carousel .owl-item {
        direction: rtl;
        text-align: right;
    }

    /* تحسينات شكل */
    .testimonial-item {
        background: #fff;
        border: 1px solid #e9ecef;
    }
</style>


