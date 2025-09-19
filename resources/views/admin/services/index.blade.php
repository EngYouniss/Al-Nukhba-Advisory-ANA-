@extends('admin.layout.master')
@section('content')
    <!-- العنوان الرئيسي -->
    <div class="fi-page-title mt-4">قائمة الخدمات</div>
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="fi-card card ">
        <div class="fi-card-header card-header">
            <div class="d-flex justify-content-between align-items-center">
                <!-- البحث -->
                <div class="input-group input-group-sm fi-search" style="max-width: 200px;">
                    <input type="text" class="form-control" placeholder="ابحث عن خدمة">
                </div>

                <!-- الزر -->
                <a href="{{ route('services.create') }}" type="button" class="btn btn-primary btn-sm fi-btn-primary">
                    <i class="bi bi-plus-lg ml-1"></i> إضافة خدمة
                </a>
            </div>
        </div>


        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 fi-table">
                    <thead class="thead-light fi-thead">
                        <tr>
                            <th class="text-center" style="width:42px;">
                                <div class="custom-control custom-checkbox m-0 d-inline-block">
                                    <input type="checkbox" class="custom-control-input" id="select-all">
                                    <label class="custom-control-label" for="select-all"></label>
                                </div>
                            </th>
                            <th style="width:80px;">#</th>
                            <th>اسم الخدمة</th>
                            <th>الأيقونة</th>
                            <th>الحالة</th>
                            <th>تاريخ الإنشاء</th>
                            <th class="text-nowrap text-right" style="width:120px;">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td class="text-center">
                                    <div class="custom-control custom-checkbox m-0 d-inline-block">
                                        <input type="checkbox" class="custom-control-input row-check" id="r1">
                                        <label class="custom-control-label" for="r1"></label>
                                    </div>
                                </td>
                                <td>{{ $services->firstItem() + $loop->index }}</td>
                                <td>{{ $service->title }}</td>
                                <td><i class="bi {{ $service->icon }}"></i></td>
                                <td><span
                                        class="badge badge-{{ $service->status === 1 ? 'info' : 'success' }} badge-pill">{{ $service->status === 1 ? 'مفعل' : 'غير مفعل' }}</span>
                                </td>
                                <td>{{ $service->created_at->format('d-m-Y') }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            إجراءات
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ route('services.edit', $service->slug) }}">تعديل</a>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">حذف</button>
                                            </form> <a class="dropdown-item" href="#">تفعيل</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- صفوف أخرى -->
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var all = document.getElementById('select-all');
            var rows = document.querySelectorAll('.row-check');
            if (all) all.addEventListener('change', function() {
                rows.forEach(function(c) {
                    c.checked = all.checked;
                });
            });
        });
    </script>
@endsection
