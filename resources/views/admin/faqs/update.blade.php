@extends('admin.layout.master')
@section('content')
    <style>
        .fi-card {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .06);
            overflow: hidden
        }

        .fi-header {
            padding: .9rem 1rem;
            border-bottom: 1px solid #e5e7eb;
            background: #fff
        }

        .fi-title {
            font-weight: 700;
            font-size: 1.15rem;
            color: #111827;
            margin: 0
        }

        .fi-body {
            padding: 1.25rem
        }

        .fi-actions {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
            background: #fafafa
        }

        .fi-help {
            font-size: .85rem;
            color: #6b7280
        }
    </style>

    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card fi-card">
                @if (session('error'))
                    <p>{{ session('error') }}</p>
                @endif
                <div class="fi-header">
                    <h6 class="fi-title">تعديل </h6>
                </div>


                <div class="fi-body">
                    <form action="{{ route('faqs.update', ['faq' => $faq->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <label>السؤال</label>
                                <input type="text" class="form-control" placeholder="مثال:  كيف .."
                                    name="question" value="{{ $faq->question }}">
                                <x-validation-error field="question"></x-validation-error>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>الاجابة</label>
                                <textarea rows="2" class="form-control" placeholder="وصف مختصر للاجابة" name="answer">{{ $faq->answer }}</textarea>
                                <x-validation-error field="answer"></x-validation-error>

                            </div>
                            <div class="form-group col-md-4 ml-4">
                            <label>الحالة</label>
                            <input type="hidden" name="status" value="0">
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="status"
                                    value="1" {{ old('status', $faq->status) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">مفعل</label>
                            </div>
                        </div>
                        </div>



                        <div class="fi-actions d-flex justify-content-between align-items-center">
                            <a href="{{route('faqs.index')}}" class="btn btn-light">رجوع</a>
                            <input type="submit" class="btn btn-primary" value="حفظ التعديل">
                        </div>
                    </form>
                </div><!-- /.fi-body -->

            </div><!-- /.fi-card -->
        </div>
    </div>
@endsection
