@extends('admin.layout.master')

@section('content')
    <div class="container-fluid py-3" dir="rtl">
        <style>
            .card {
                border-radius: 12px
            }

            .kpi .value {
                font-weight: 700;
                font-size: 1.6rem
            }

            .text-truncate-2 {
                -webkit-line-clamp: 2;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                overflow: hidden
            }

            /* احترافية الجدول */
            .table-compact {
                font-size: .875rem
            }

            .table-compact .table td,
            .table-compact .table th {
                padding: .45rem .6rem;
                vertical-align: middle
            }

            .table-compact thead th {
                position: sticky;
                top: 0;
                z-index: 2;
                background: #f8f9fa
            }

            .h-fixed-460 {
                max-height: 460px;
                overflow: auto
            }

            /* الشريط الجانبي */
            .sidebar-sticky {
                position: sticky;
                top: 84px
            }

            /* شارات متّسقة (Bootstrap 4) */
            .badge-soft {
                background: #f8f9fa;
                border: 1px solid #e9ecef;
                color: #6c757d;
                border-radius: 999px;
                padding: .2rem .5rem
            }

            /* شريط أدوات أعلى الجدول */
            .toolbar .form-control {
                height: 31px
            }

            .toolbar .btn {
                line-height: 1.1
            }
        </style>

        {{-- ترويسة --}}
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3">
            <div>
                <h1 class="h5 mb-1">لوحة تعريف المكتب</h1>
                <div class="text-muted small">الخدمات • الميزات • الفريق • الآراء • الأسئلة الشائعة</div>
            </div>
            <div class="d-flex gap-2 mt-2 mt-md-0">
                <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary">+ إضافة خدمة</a>
                <a class="btn btn-sm btn-outline-secondary">معاينة</a>
                <a class="btn btn-sm btn-outline-success">نشر</a>
            </div>
        </div>

        {{-- البطاقات العلوية (محتفظ بها) --}}
        <div class="row g-3 mb-3">
            <div class="col-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body kpi">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">الخدمات</span>
                            <span class="badge-soft">+2 هذا الأسبوع</span>
                        </div>
                        <div class="value">{{ $services->total() }}</div>
                        <small class="text-muted">منشور: 9 • مسودة: 3 (وهمي)</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body kpi">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">الميزات</span>
                            <span class="badge-soft">3 مميزة</span>
                        </div>
                        <div class="value">{{ $features->count() }}</div>
                        <small class="text-muted">ظاهرة: 15 (وهمي)</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body kpi">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">الأسئلة الشائعة</span>
                            <span class="badge-soft">مراجعة مطلوبة</span>
                        </div>
                        <div class="value">{{ $faqs->count() }}</div>
                        <small class="text-muted">جاهز: 20 • يحتاج تعديل: 4 (وهمي)</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="card h-100">
                    <div class="card-body kpi">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">الرسائل/ المشتركين</span>
                            <span class="badge-soft">+6 اليوم</span>
                        </div>
                        <div class="value">{{ $messages->count() }} / {{ $subscribers->count() }}</div>
                        <small class="text-muted">رسائل جديدة: 5 • مشترك: 1 (وهمي)</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- يسار: المحتوى الإداري (الخدمات) --}}
            <div class="col-12 col-xl-8 mb-3 mb-xl-0">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="d-flex flex-wrap align-items-center justify-content-between toolbar">
                            <strong>قائمة الخدمات</strong>
                            <div class="d-flex align-items-center">
                                {{-- <form action="{{ route('services.index') }}" method="GET"
                                    class="input-group input-group-sm mr-2" style="max-width:260px;">
                                    <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                                        placeholder="ابحث عن خدمة...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">بحث</button>
                                    </div>
                                </form> --}}
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-outline-secondary active">الكل</a>
                                    <a href="#" class="btn btn-outline-secondary ">مفعل</a>
                                    <a href="#" class="btn btn-outline-secondary ">غير مفعل</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0 table-compact">
                        <div class="table-responsive h-fixed-460">
                            <table class="table table-sm table-hover mb-0 align-middle">
                                <thead class="thead-light">
                                    <tr>

                                        <th style="width:64px;">#</th>
                                        <th>اسم الخدمة</th>
                                        <th style="width:120px;">الأيقونة</th>
                                        <th style="width:120px;">الحالة</th>
                                        <th style="width:130px;">تاريخ الإنشاء</th>
                                        <th class="text-nowrap text-right" style="width:120px;">العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($services as $service)
                                        <tr>
                                            <td>
                                                @if (method_exists($services, 'firstItem'))
                                                    {{ $services->firstItem() + $loop->index }}
                                                @else
                                                    {{ $loop->iteration }}
                                                @endif
                                            </td>
                                            <td class="text-truncate-2" style="max-width:320px">{{ $service->title }}</td>
                                            <td>
                                                @if (!empty($service->icon))
                                                <i class="{{ $service->icon }} fa-lg"></i>@else<span
                                                        class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td>
                                                @php $active = (int)$service->status === 1; @endphp
                                                <span
                                                    class="badge badge-pill badge-{{ $active ? 'success' : 'secondary' }}">{{ $active ? 'مفعل' : 'غير مفعل' }}</span>
                                            </td>
                                            <td>{{ optional($service->created_at)->format('d-m-Y') }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown">إجراءات</button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="{{ route('services.edit', $service->id) }}">تعديل</a>
                                                        <form action="{{ route('services.destroy', $service->id) }}"
                                                            method="POST" onsubmit="return confirm('حذف الخدمة؟')">
                                                            @csrf @method('DELETE')
                                                            <button class="dropdown-item text-danger"
                                                                type="submit">حذف</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">
                                                <div class="p-4 text-center text-muted">لا توجد خدمات.</div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

                {{-- ملاحظات سريعة --}}
                <div class="card mt-3">
                    <div class="card-header bg-white"><strong>ملاحظات محتوى</strong></div>
                    <div class="card-body small text-muted">
                        <ul class="mb-0">
                            <li>ارفَع صورًا لكل خدمة.</li>
                            <li>الوصف لا يتجاوز 160 حرفًا.</li>
                            <li>أضف روابط داخلية بين الخدمات المتشابهة.</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- يمين: الشريط الجانبي (رسائل جديدة / مشتركين / إشعارات / روابط سريعة) --}}
            <div class="col-12 col-xl-4">
                <div class="sidebar-sticky">
                    {{-- الرسائل الجديدة --}}
                    <div class="card mb-3">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <strong>الرسائل الجديدة</strong>
                            <a href="{{ route('messages.index') }}" class="btn btn-sm btn-outline-secondary">عرض الكل</a>
                        </div>
                        <div class="list-group list-group-flush">
                            @forelse ($messages as $message)
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">استشارة: عقد توريد</h6>
                                        <small class="text-muted">قبل ساعة</small>
                                    </div>
                                    <small class="text-muted">شركة الهدى</small>
                                </a>
                            @empty
                                <x-alert-no-found></x-alert-no-found>
                            @endforelse


                        </div>
                    </div>

                    {{-- المشتركين الجدد --}}
                    <div class="card mb-3">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <strong>المشتركين الجدد</strong>
                            <a href="{{ route('subscribers.index') }}" class="btn btn-sm btn-outline-secondary">إدارة</a>
                        </div>
                        <ul class="list-group list-group-flush small">

                            @forelse ($subscribers as $subscriber)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>{{ $subscriber->email }}</span><span
                                        class="text-muted">{{ optional($subscriber->created_at)->locale('ar')->diffForHumans() }}
                                    </span>
                                </li>
                            @empty
                                <x-alert-no-found></x-alert-no-found>
                            @endforelse

                        </ul>
                    </div>

                    {{-- إشعارات --}}
                    <div class="card mb-3">
                        <div class="card-header bg-white"><strong>إشعارات</strong></div>
                        <ul class="list-group list-group-flush small">
                            <li class="list-group-item">تم تفعيل خدمة “التحكيم” <span class="text-muted">— اليوم</span>
                            </li>
                            <li class="list-group-item">تحديث سياسة الخصوصية <span class="text-muted">— أمس</span></li>
                        </ul>
                    </div>

                    {{-- روابط سريعة --}}
                    <div class="card">
                        <div class="card-header bg-white"><strong>روابط سريعة</strong></div>
                        <div class="card-body d-flex flex-wrap gap-2">
                            <a href="{{ route('features.index') }}" class="btn btn-sm btn-outline-secondary">الميزات</a>
                            <a href="{{ route('faqs.index') }}" class="btn btn-sm btn-outline-secondary">الأسئلة
                                الشائعة</a>
                            <a href="{{ route('testmonials.index') }}" class="btn btn-sm btn-outline-secondary">آراء
                                العملاء</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">نبذة المكتب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
