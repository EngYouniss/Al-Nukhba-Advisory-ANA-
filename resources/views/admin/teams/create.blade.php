@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card fi-card">
                @if (session('error'))
                    <x-alert :type="session('error')"></x-alert>
                @endif

                <div class="fi-header d-flex justify-content-between align-items-center">
                    <h6 class="fi-title m-0">إضافة شهادة عميل</h6>
                    <a href="{{ route('teams.index') }}" class="btn btn-light btn-sm">رجوع للقائمة</a>
                </div>

                <div class="fi-body">
                    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>الاسم</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="مثال: أحمد محمد">
                                <x-validation-error field="name" />
                            </div>

                            <div class="form-group col-md-6">
                                <label>التخصص / الوظيفة</label>
                                <input type="text" class="form-control" name="position" value="{{ old('position') }}"
                                    placeholder="مثال: مدير تسويق">
                                <x-validation-error field="position" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>الوصف</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="اكتب وصف مختصر">{{ old('description') }}</textarea>
                            <x-validation-error field="description" />
                        </div>

                        <div class="form-group mt-3">
                            <label>روابط السوشيال ميديا</label>
                            <input type="text" class="form-control mb-2" name="social_media[facebook]"
                                value="{{ old('social_media.facebook') }}" placeholder="رابط فيسبوك">
                            <input type="text" class="form-control mb-2" name="social_media[twitter]"
                                value="{{ old('social_media.twitter') }}" placeholder="رابط تويتر">
                            <input type="text" class="form-control mb-2" name="social_media[linkedin]"
                                value="{{ old('social_media.linkedin') }}" placeholder="رابط لينكدإن">
                        </div>

                        <div class="form-group mt-3">
                            <label>الصورة</label>
                            <input type="file" class="form-control-file" name="image" accept="image/*"
                                id="image_input">
                            <x-validation-error field="image" />
                            <small class="fi-help d-block mt-1">يفضّل صور مربعة 512×512 أو 1:1.</small>
                            <img id="image_preview" src="#" alt="" class="img-thumbnail d-none mt-2"
                                style="max-height:160px;">
                        </div>

                        <div class="fi-actions d-flex justify-content-between align-items-center">
                            <a href="{{ route('teams.index') }}" class="btn btn-light">رجوع</a>
                            <button type="submit" class="btn btn-primary">حفظ الشهادة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('image_input');
            var preview = document.getElementById('image_preview');

            if (input) {
                input.addEventListener('change', function() {
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
