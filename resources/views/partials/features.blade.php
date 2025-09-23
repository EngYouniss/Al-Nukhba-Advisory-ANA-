<div class="container-xxl ">
    <div class="container">
        <div class="row g-5">

            <!-- النصوص -->
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">مميزاتنا</div>
                <h2 class="mb-4">لماذا يختارنا الناس؟ نحن مكتب موثوق وحائز على جوائز</h2>
                <p>
                    نقدم خدمات قانونية واستشارية شاملة بفضل خبرتنا الواسعة وفريقنا المؤهل.
                    نحرص على تحقيق النجاح لعملائنا وتقديم الحلول التي تناسب احتياجاتهم.
                </p>
                <p>
                    نلتزم بالشفافية والاحترافية في كل ما نقدمه، لنكون دائمًا الخيار الأول لعملائنا.
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{route('client.features')}}">اقرأ المزيد</a>
            </div>

            <!-- المميزات -->
            <div class="col-lg-7">
                <div class="row g-5">

                    @forelse ($features->take(6) as $feature)
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3 ">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle ms-3">
                                    <i class="{{$feature->icon}} text-white"></i>
                                </div>
                                <h6 class="mb-0">{{$feature->title}}</h6>
                            </div>
                            <span>{{$feature->description}}</span>
                        </div>
                    @empty
                    @endforelse








                </div>
            </div>
        </div>
    </div>
</div>
