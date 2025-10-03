<div class="toast-container position-fixed" style="top:1rem; right:1rem; z-index:20000;">
    <div class="toast custom-toast-{{ $type }}"
         role="alert" aria-live="assertive" aria-atomic="true"
         data-delay="4000" id="toast-{{ $type }}">
        <div class="d-flex align-items-center">
            <div class="toast-body flex-grow-1">
                {{ $message }}
            </div>
            <button type="button" class="close btn-close-white ms-3" data-bs-dismiss="toast" aria-label="إغلاق">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function(){
        var el = document.getElementById("toast-{{ $type }}");
        if (el && window.bootstrap && typeof bootstrap.Toast === 'function') {
            new bootstrap.Toast(el, { delay: 4000, autohide: true }).show();
        }
    });
</script>
@endpush

<style>
    .custom-toast-success{ background:#16a34a; color:#fff; font-weight:500; padding:.9rem 1.1rem; border-radius:.75rem; box-shadow:0 8px 24px rgba(0,0,0,.18);}
    .custom-toast-danger{ background:#dc2626; color:#fff; font-weight:500; padding:.9rem 1.1rem; border-radius:.75rem; box-shadow:0 8px 24px rgba(0,0,0,.18);}
    .custom-toast-warning{ background:#f59e0b; color:#fff; font-weight:500; padding:.9rem 1.1rem; border-radius:.75rem; box-shadow:0 8px 24px rgba(0,0,0,.18);}
    .custom-toast-info{ background:#0ea5e9; color:#fff; font-weight:500; padding:.9rem 1.1rem; border-radius:.75rem; box-shadow:0 8px 24px rgba(0,0,0,.18);}
    .btn-close-white{ color:#fff; font-size:1.4rem; opacity:.85; line-height:1; border:none; background:none;}
    .btn-close-white:hover{ opacity:1; }
</style>
