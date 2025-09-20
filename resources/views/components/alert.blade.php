@if (session('success'))
  <div class="toast-container position-fixed" style="top:1rem; right:1rem; z-index:20000;">
    <div id="successToast"
         class="toast custom-toast-success"
         role="alert" aria-live="assertive" aria-atomic="true"
         data-delay="4000">
      <div class="d-flex align-items-center">
        <div class="toast-body flex-grow-1">
          {{ session('success') }}
        </div>
        <button type="button" class="close btn-close-white ml-3" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>

  @push('scripts')
  <script>
    (function () {
      function onReady(fn){ document.readyState!=='loading' ? fn() : document.addEventListener('DOMContentLoaded', fn); }
      onReady(function(){
        var el = document.getElementById('successToast');
        if (!el) return;

        try {
          // لو عندك Bootstrap 4 (jQuery)
        //   if (window.jQuery && typeof jQuery.fn.toast === 'function') {
        //     jQuery(el).toast({ delay: 4000, autohide: true }).toast('show');
        //     return;
        //   }
          // لو عندك Bootstrap 5 (لو القالب خلط الإصدارين بالغلط)
          if (window.bootstrap && typeof bootstrap.Toast === 'function') {
            new bootstrap.Toast(el, { delay: 4000, autohide: true }).show();
            return;
          }
          // fallback: أظهره 4 ثواني حتى بدون مكتبات
          el.classList.add('show');
          setTimeout(function(){ el.classList.remove('show'); }, 4000);
        } catch(e) { /* تجاهل */ }
      });
    })();
  </script>
  @endpush

  <style>
    .custom-toast-success{
      background-color:#16a34a; color:#fff;
      font-size:1.1rem; font-weight:500;
      padding:.9rem 1.1rem; border-radius:.75rem;
      min-width:320px; max-width:480px;
      box-shadow:0 8px 24px rgba(0,0,0,.18);
    }
    .btn-close-white{ color:#fff; font-size:1.5rem; opacity:.85; line-height:1; }
    .btn-close-white:hover{ opacity:1; }
  </style>
@endif
