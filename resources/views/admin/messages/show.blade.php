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
                <div class="fi-body">

                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="">اسم المرسل</label>
                            <p class="form-control">{{ $message->name }}</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">البريد الالكتروني</label>
                            <p class="form-control">{{ $message->email }}</p>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <p class="form-control">{{ $message->subject }}</p>

                        </div>
                        <div class="form-group col-md-6">
                            <label>الرساله</label>
                            <p rows="2" class="form-control">{{ $message->message }}</p>

                        </div>
                    </div>


                    <div class="fi-actions d-flex justify-content-between align-items-center">
                        <a href="{{ route('messages.index') }}" class="btn btn-light">رجوع</a>
                        <input type="submit" class="btn btn-primary" value="حفظ الخدمة">
                    </div>
                </div><!-- /.fi-body -->

            </div><!-- /.fi-card -->
        </div>
    </div>
@endsection
