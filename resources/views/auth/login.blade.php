<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>تسجيل الدخول | المكتب القانوني</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
      :root{
        --ink:#0b1930;          /* كحلي داكن */
        --gold:#c9a24b;         /* ذهبي هادئ */
        --muted:#6b7280;
      }
      body{
        background:#f5f7fb;
        font-family:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans";
        color:#101828;
      }
      /* حاوية أضيق ومركّزة */
      .auth-wrap{ max-width: 900px; margin-inline:auto; padding: 48px 16px; }
      .card-auth{
        border:0; border-radius:16px; overflow:hidden;
        box-shadow:0 14px 40px rgba(16,24,40,.1);
        background:#fff;
      }

      /* العمود الخاص بالصورة: هادئ وراسي */
      .media-side{
        background:#0f2443; position:relative; color:#fff;
      }
      .media-side .image{
        position:absolute; inset:0;

        background-image:url('{{asset('front/img/Couverture-2550-x-1440_967.jpg')}}'); /* ميزان العدل/مكتبة قانون */
        background-size:cover; background-position:center;
        opacity:.85;
      }
      .media-side .overlay{
        position:absolute; inset:0;
        background: radial-gradient(60% 60% at 20% 10%, rgba(255,255,255,.18), transparent 60%);
        pointer-events:none;
      }
      .media-content{
        position:relative; z-index:1;
      }
      .brand-mark{
        width:52px;height:52px;border-radius:12px;
        display:grid;place-items:center;
        background:rgba(255,255,255,.18); border:1px solid rgba(255,255,255,.28);
        color:#fff;
      }
      .mini-badge{
        display:inline-flex; gap:.5rem; align-items:center;
        border:1px solid rgba(255,255,255,.25);
        background:rgba(255,255,255,.12);
        padding:.4rem .6rem; border-radius:.6rem; backdrop-filter: blur(6px);
        font-size:.85rem;
      }

      /* نموذج الدخول */
      .title{ color:var(--ink); }
      .muted{ color:var(--muted); }
      .form-control:focus{
        border-color:#86b7fe;
        box-shadow:0 0 0 .2rem rgba(13,110,253,.15);
      }
      .btn-gold{
        background:var(--gold); border-color:var(--gold); color:#1e1e1e;
      }
      .btn-gold:hover{ background:#b69040; border-color:#b69040; color:#0f0f0f; }
      .note-line{ font-size:.85rem; color:#98a2b3; }

      @media (max-width: 991.98px){
        .media-side{ display:none; } /* إخفاء الصورة على الموبايل */
      }
    </style>
  </head>
  <body>

    <main class="auth-wrap">
      <div class="card card-auth">
        <div class="row g-0">
          <!-- جانب بصري هادئ ومهني -->
          <div class="col-lg-5 media-side">
            <div class="image"></div>
            <div class="overlay"></div>

            <div class="media-content h-100 d-flex flex-column justify-content-between p-4">
              <div class="d-flex align-items-center gap-3">
                <div class="brand-mark"><i class="bi bi-scale fs-4"></i></div>
                <div>
                  <div class="fw-semibold small text-white-50">المكتب القانوني</div>
                  <h2 class="h6 m-0">استشارات ونزاعات وتحكيم</h2>
                </div>
              </div>

              <div>
                <div class="mini-badge mb-2">
                  <i class="bi bi-award text-warning"></i>
                  <span>25+ سنة خبرة</span>
                </div>
                <p class="m-0 text-white-50 small">
                  خصوصية وسرية كاملة لبيانات العملاء.
                </p>
              </div>
            </div>
          </div>

          <!-- نموذج الدخول -->
          <div class="col-lg-7">
            <div class="p-4 p-lg-5">
              <div class="mb-4 text-end">
                <h1 class="title h4 mb-1">تسجيل الدخول</h1>
                <p class="muted mb-0">ادخل بياناتك للوصول إلى لوحة القضايا</p>
              </div>

              <form class="text-end" novalidate action="{{route('login.attempt')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">البريد الإلكتروني</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input id="email" type="email" class="form-control" placeholder="name@example.com" required name="email">
                  </div>
                </div>

                <div class="mb-2">
                  <label for="password" class="form-label">كلمة المرور</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key"></i></span>
                    <input id="password" type="password" class="form-control" placeholder="••••••••" required name="password">
                    <button class="btn btn-outline-secondary" type="button" id="toggleBtn" aria-label="إظهار/إخفاء">
                      <i class="bi bi-eye" id="toggleIcon"></i>
                    </button>
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">تذكرني</label>
                  </div>
                  <a href="#" class="link-secondary small text-decoration-none">نسيت كلمة المرور؟</a>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-gold btn-lg">
                    <i class="bi bi-box-arrow-in-right ms-1"></i> دخول
                  </button>
                </div>

                <div class="d-flex align-items-center gap-2 mt-4 small text-muted">
                  <i class="bi bi-shield-lock text-warning"></i>
                  <span>الحسابات تُنشأ من الإدارة فقط. يمنع مشاركة بيانات الدخول.</span>
                </div>
              </form>

              <p class="note-line text-center mt-4 mb-0">© جميع الحقوق محفوظة</p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Bootstrap JS + Toggle Password -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      (function () {
        const btn  = document.getElementById('toggleBtn');
        const icon = document.getElementById('toggleIcon');
        const input= document.getElementById('password');
        if (btn && icon && input) {
          btn.addEventListener('click', function () {
            const show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            icon.classList.toggle('bi-eye', !show);
            icon.classList.toggle('bi-eye-slash', show);
          });
        }
      })();
    </script>
  </body>
</html>
