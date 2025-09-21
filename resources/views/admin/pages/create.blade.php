@extends('admin.layout.master')

@section('content')
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <x-validation-error field="name"></x-validation-error>

        <div class="form-group">
            <label>المحتوى</label>
            <textarea id="editor" name="content" class="form-control" rows="10"></textarea>
        </div>
        <x-validation-error field="content"></x-validation-error>


        <input type="submit" value="حفظ" class="btn btn-primary">
    </form>
@endsection

@push('scripts')
    {{-- TinyMCE CDN --}}
    <script src="https://cdn.tiny.cloud/1/9v71x66vl3a522j5wb3ocfoqn0337pogwetvzk0qsi1cv928/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#editor',
            language: 'ar',
            directionality: 'rtl',
            plugins: 'image link lists code table',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | table | code',
            menubar: false,

            // نرفع الصورة إلى راوت لارافيل (سنضيفه في الخطوة 2)
            images_upload_handler: function(blobInfo, success, failure, progress) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.upload-image') }}');
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                xhr.upload.onprogress = function(e) {
                    if (e.lengthComputable) {
                        progress(e.loaded / e.total * 100);
                    }
                };

                xhr.onload = function() {
                    if (xhr.status !== 200) {
                        return failure('HTTP Error: ' + xhr.status);
                    }
                    var json;
                    try {
                        json = JSON.parse(xhr.responseText);
                    } catch (e) {
                        return failure('Invalid JSON: ' + xhr.responseText);
                    }
                    if (!json || typeof json.location !== 'string') {
                        return failure('Invalid response');
                    }
                    success(json.location); // TinyMCE يدرج <img src="location">
                };

                xhr.onerror = function() {
                    failure('Upload failed');
                };

                var formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            },

            // روابط مطلقة (لا تحوّلها نسبية)
            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,
        });
    </script>
@endpush
