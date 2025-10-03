@extends('admin.layout.master')
@section('content')
    <!-- العنوان الرئيسي -->
    <div class="fi-page-title mt-4">قائمة شهادات عملائنا</div>

    <div class="fi-card card ">
        <div class="fi-card-header card-header">
            <div class="d-flex justify-content-between align-items-center">
                <!-- البحث -->
                <div class="input-group input-group-sm fi-search" style="max-width: 200px;">
                    <form action="{{ route('teams.index') }}" method="GET" class="d-flex w-100">
                        <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                            placeholder="ابحث باسم الشخص...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary ml-1" type="submit">بحث</button>
                        </div>
                    </form>
                </div>


                <x-button-href :href="route('teams.create')" title="إضافة "></x-button-href>
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
                            <th>الاسم</th>
                            <th>التخصص</th>
                            <th>الصورة</th>
                            <th>فيسبوك </th>
                            <th>لينكد ان </th>
                            <th> تويتر </th>
                            <th>تاريخ الإنضمام</th>
                            <th class="text-nowrap text-right" style="width:120px;">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teams as $team)
                            <tr>
                                <td class="text-center">
                                    <div class="custom-control custom-checkbox m-0 d-inline-block">
                                        <input type="checkbox" class="custom-control-input row-check" id="r1">
                                        <label class="custom-control-label" for="r1"></label>
                                    </div>
                                </td>
                                <td>{{ $teams->firstItem() + $loop->index }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->position }}</td>
                                <td><img src="{{ $testmonial->image }}" class=" rounded-circle"
                                        style="width:50px; height:50px; object-fit:cover;" alt="{{ $testmonial->name }}">
                                </td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                </td>
                                {{-- <td><span
                                        class="badge badge-{{ $teams->status === 1 ? 'info' : 'success' }} badge-pill">{{ $testmonial->status === 1 ? 'مفعل' : 'غير مفعل' }}</span>
                                </td> --}}
                                <td>{{ $team->created_at->format('d-m-Y') }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            إجراءات
                                        </button>
                                        <x-operations-dropdown :edit-route="route('testmonials.edit', $team->id)" :delete-route="route('teams.destroy', $team->id)" />

                                    </div>
                                </td>
                            </tr>

                        @empty
                            <x-alert-no-found></x-alert-no-found>
                        @endforelse

                        {{-- Alert --}}
                    </tbody>
                </table>

                <div class="d-flex justify-content-center mt-3">
                    {{ $teams->links('pagination::bootstrap-5') }}
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
