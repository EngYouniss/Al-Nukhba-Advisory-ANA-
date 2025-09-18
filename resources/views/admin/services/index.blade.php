@extends('admin.layout.master')
@section('content')
  <div class="d-flex justify-content-end " style="margin-left: 20px;margin-top:7px; ">
            <!-- زر الإضافة -->
            <button class="btn btn-primary btn-md fw-bold ps-3 ">
                <i class="bi bi-plus-lg "></i> إضافة خدمة
            </button>
        </div>
    <div class="col-md-6 col-lg-12 my-4">

        <div class="card shadow">

            <div class="card-body">
                <!-- مربع البحث -->
                <div class="input-group input-group-sm" style="max-width: 200px;">
                    <input type="text" class="form-control" placeholder="ابحث عن خدمة">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chall">
                                <label class="custom-control-label" for="d1"></label>
                            </div>
                        </th>
                        <th>#</th>
                        <th>اسم الخدمة</th>
                        <th>الأيقونة</th>
                        <th>الحالة</th>
                        <th>تاريخ الانشاء</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="d1">
                                <label class="custom-control-label" for="d1"></label>
                            </div>
                        </td>
                        <td>2474</td>
                        <td>Brown, Asher D.</td>
                        <td>Ap #331-7123 Lobortis Avenue</td>
                        <td>(958) 421-0798</td>
                        <td>13/09/2020</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle" type="button" id="dr1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                    <a class="dropdown-item" href="#">تعديل</a>
                                    <a class="dropdown-item" href="#">حذف</a>
                                    <a class="dropdown-item" href="#">تفعيل</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
