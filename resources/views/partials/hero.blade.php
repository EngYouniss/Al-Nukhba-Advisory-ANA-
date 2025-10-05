<!-- HERO: يعتمد على ألوانك الحالية -->
<section class="container-xxl bg-primary hero-header position-relative overflow-hidden"
         dir="rtl" lang="ar" aria-label="الجزء التعريفي">
  <!-- خلفية متدرجة من لونك الأساسي -->
  <div class="hero-bg position-absolute top-0 start-0 w-100 h-100"></div>
  <!-- أشكال خفيفة من primary/secondary -->
  <span class="hero-shape hero-a"></span>
  <span class="hero-shape hero-b"></span>

  <div class="container position-relative" style="z-index:1;">
    <div class="row g-5 align-items-center glass-super rounded-4 p-4 p-lg-5 shadow-ultra">

      <!-- النصوص -->
      <div class="col-lg-6 text-center text-lg-end">
        <!-- شارة ثقة -->
        <div class="trust-dot d-inline-flex align-items-center gap-2 small text-white-50 mb-2">
          <i class="bi bi-shield-check"></i><span>موثوقية وخصوصية عالية</span>
        </div>

        <h1 class="text-white mb-3 lh-base">
          نساعدك في دفع عملك إلى <span class="hl-ink">المستوى الأعلى</span>
        </h1>

        <p class="text-white-50 mb-4">
          استشارات عملية وخطط تنفيذية واضحة تُحوِّل الأهداف إلى نتائج ملموسة—بكفاءة وسرعة.
        </p>

        <!-- شرائط خدمات (اختياري: احذفها إن لم تردها) -->
        <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end mb-3">
          <span class="chip-ghost"><i class="bi bi-gavel me-1"></i> تمثيل قضائي</span>
          <span class="chip-ghost"><i class="bi bi-journal-text me-1"></i> صياغة العقود</span>
          <span class="chip-ghost"><i class="bi bi-briefcase me-1"></i> تحكيم</span>
        </div>

        <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
          <a href="#contact" class="btn btn-light rounded-pill border-0 py-3 px-5">ابدأ الآن</a>
          <a href="#more" class="btn btn-outline-light rounded-pill py-3 px-5">اعرف المزيد</a>
        </div>
      </div>

      <!-- الصورة -->
      <div class="col-lg-6 text-center text-lg-start">
        <figure class="hero-figure m-0 position-relative">
          <picture>
            <!-- إن توفّرت نسخة webp -->
            <!-- <source srcset="{{ asset('front/img') }}/hero.webp" type="image/webp"> -->
            <img class="img-fluid hero-illustration"
                 src="{{ asset('front/img') }}/hero.png"
                 alt="عرض بصري للخدمات"
                 loading="lazy"
                 decoding="async"
                 sizes="(min-width: 992px) 78vw, 90vw">
          </picture>
          <figcaption class="figure-badge small">
            <i class="bi bi-award me-1"></i> نتائج قابلة للقياس
          </figcaption>
        </figure>
      </div>

    </div>
  </div>
</section>

<!-- إن لم تكن محمّل Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
  /* تحسينات عامة صغيرة */
  .shadow-ultra{ box-shadow: 0 22px 60px rgba(16,24,40,.18); }
  .text-white-50{ color: rgba(255,255,255,.78)!important; }

  /* إبراز راقٍ تحت كلمة */
  .hl-ink{ position:relative; display:inline-block; }
  .hl-ink::after{
    content:""; position:absolute; left:0; right:0; bottom:-6px; height:8px;
    background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,.55) 40%, rgba(255,255,255,0) 100%);
    border-radius:999px;
  }

  /* زرّ يمكن الوصول له بلوحة المفاتيح */
  .btn:focus-visible{ outline:2px solid #fff; outline-offset:2px; }

  /* شارة خدمات شفافة */
  .chip-ghost{
    display:inline-flex; align-items:center; gap:.25rem;
    padding:.35rem .7rem; border-radius:999px;
    background: rgba(255,255,255,.12);
    border:1px solid rgba(255,255,255,.28);
    color:#fff; font-size:.9rem; backdrop-filter: blur(6px);
  }

  /* شارة ثقة صغيرة */
  .trust-dot{ user-select:none; }

  /* زجاج احترافي يراعي primary الحالي */
  .glass-super{
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.18);
    backdrop-filter: blur(16px) saturate(140%);
    -webkit-backdrop-filter: blur(16px) saturate(140%);
    position: relative; overflow:hidden;
  }
  .glass-super::before{
    content:""; position:absolute; inset:-2px; border-radius:inherit; z-index:-1;
    background: conic-gradient(from 140deg,
      rgba(255,255,255,0) 0%,
      rgba(255,255,255,.35) 25%,
      rgba(255,255,255,0) 50%,
      rgba(255,255,255,.25) 75%,
      rgba(255,255,255,0) 100%);
    filter: blur(10px);
  }
  /* لمعة + شبكة خفيفة جدًا داخل الزجاج */
  .glass-super .glass-sheen{
    content:""; position:absolute; inset:0; pointer-events:none; z-index:0;
    background:
      radial-gradient(520px 180px at 85% 0%, rgba(255,255,255,.14), transparent 60%),
      linear-gradient(to right, rgba(255,255,255,.05) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255,255,255,.05) 1px, transparent 1px);
    background-size: auto, 44px 44px, 44px 44px;
    mix-blend-mode: screen; opacity:.55;
  }

  /* خلفية الهيرو المبنية على لونك الأساسي */
  .hero-header .hero-bg{
    background:
      radial-gradient(900px 420px at 100% -10%, rgba(var(--bs-primary-rgb), .22) 10%, transparent 55%),
      radial-gradient(720px 360px at -10% 110%, rgba(var(--bs-primary-rgb), .18) 10%, transparent 60%),
      linear-gradient(135deg,
        rgb(var(--bs-primary-rgb)) 0%,
        rgba(var(--bs-primary-rgb), .96) 45%,
        rgba(var(--bs-primary-rgb), .92) 100%);
  }

  /* أشكال خفيفة */
  .hero-header .hero-shape{
    position:absolute; filter:blur(38px); opacity:.45; pointer-events:none; z-index:0;
  }
  .hero-header .hero-a{
    width:360px; height:360px; border-radius:50%;
    background: rgba(var(--bs-primary-rgb), .35); top:-80px; left:-80px;
  }
  .hero-header .hero-b{
    width:400px; height:400px; border-radius:50%;
    background: rgba(var(--bs-secondary-rgb,108,117,125), .30); bottom:-100px; right:-80px;
  }

  /* الصورة + الشارة */
  .hero-figure{ display:inline-block; position:relative; z-index:1; }
  .hero-illustration{ max-width: 88%; transform: translateZ(0); }
  @media (min-width: 992px){ .hero-illustration{ max-width: 82%; } }

  .figure-badge{
    position:absolute; bottom:6%; right:10%;
    background: rgba(255,255,255,.14);
    color:#fff; border:1px solid rgba(255,255,255,.26);
    padding:.5rem .75rem; border-radius:.8rem;
    backdrop-filter: blur(8px);
  }

  /* طبقة لمعة داخل الزجاج */
  .glass-super::after{
    content:""; position:absolute; inset:0; pointer-events:none; z-index:0;
    box-shadow: inset 0 0 120px rgba(0,0,0,.08);
  }

  /* احترام تقليل الحركة */
  @media (prefers-reduced-motion: reduce){
    *{ animation:none!important; transition:none!important; }
  }
</style>
