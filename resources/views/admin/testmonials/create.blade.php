@extends('admin.layout.master')

@section('content')
<style>
  .fi-card {border:1px solid #e5e7eb;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06);overflow:hidden}
  .fi-header {padding:.9rem 1rem;border-bottom:1px solid #e5e7eb;background:#fff}
  .fi-title {font-weight:700;font-size:1.15rem;color:#111827;margin:0}
  .fi-body {padding:1.25rem}
  .fi-actions {padding:1rem;border-top:1px solid #e5e7eb;background:#fafafa}
  .fi-help {font-size:.85rem;color:#6b7280}
</style>

<div class="row">
  <div class="col-md-12 mb-5">
    <div class="card fi-card">
      @if (session('error'))
        <x-alert :type="session('error')"></x-alert>
      @endif

      <div class="fi-header d-flex justify-content-between align-items-center">
        <h6 class="fi-title m-0">إضافة شهادة عميل</h6>
        <a href="{{ route('testmonials.index') }}" class="btn btn-light btn-sm">رجوع للقائمة</a>
      </div>

      <div class="fi-body">
        <form action="{{ route('testmonials.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>الاسم</label>
              <input type="text" class="form-control" name="name" placeholder="مثال: أحمد محمد" value="{{ old('name') }}">
              <x-validation-error field="name"/>
            </div>

            <div class="form-group col-md-6">
              <label>التخصص / الوظيفة</label>
              <input type="text" class="form-control" name="position" placeholder="مثال: مدير تسويق" value="{{ old('position') }}">
              <x-validation-error field="position"/>
            </div>
          </div>

          <div class="form-group">
            <label>الوصف (نص الشهادة)</label>
            <textarea class="form-control" name="description" rows="3" placeholder="اكتب شهادة العميل باختصار">{{ old('description') }}</textarea>
            <x-validation-error field="description"/>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>الصورة (اختياري)</label>
              <input type="file" class="form-control-file" name="image" accept="image/*" id="image_input">
              <x-validation-error field="image"/>
              <small class="fi-help d-block mt-1">يفضّل صور مربعة 512×512 أو 1:1.</small>
            </div>

            <div class="form-group col-md-6">
              <label class="d-block">معاينة الصورة</label>
              <img id="image_preview" src="#" alt="" class="img-thumbnail d-none" style="max-height:160px;">
            </div>
          </div>

          <div class="form-group">
            <label>الحالة</label>
            <input type="hidden" name="status" value="0">
            <div class="custom-control custom-switch mt-2">
              <input type="checkbox" class="custom-control-input" id="is_active" name="status" value="1" {{ old('status', 1) ? 'checked' : '' }}>
              <label class="custom-control-label" for="is_active">مفعل</label>
            </div>
            <x-validation-error field="status"/>
          </div>

          <div class="fi-actions d-flex justify-content-between align-items-center">
            <a href="{{ route('testmonials.index') }}" class="btn btn-light">رجوع</a>
            <button type="submit" class="btn btn-primary">حفظ الشهادة</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('image_input');
    var preview = document.getElementById('image_preview');

    if (input) {
      input.addEventListener('change', function (e) {
        const [file] = input.files || [];
        if (file) {
          const url = URL.createObjectURL(file);
          preview.src = url;
          preview.classList.remove('d-none');
        } else {
          preview.src = '#';
          preview.classList.add('d-none');
        }
      });
    }
  });
</script>
@endsection
