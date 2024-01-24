@extends('admin.layouts.master')


@section('head-tag')
    <title>داشبرد | کنترل پنل مدیریت</title>
@endsection
@section('content')
<div class="content-wrapper">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">دسته بندی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد دسته بندی</li>
        </ol>
    </nav>

    <div class="content-wrapper">
        <section class="row">
            <section class="col-12">
                <section class="main-body-container">
                    <section class="main-body-container-header">
                        <h5>
                            ایجاد دسته بندی
                        </h5>
                    </section>

                    <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                        <a href="{{ route('admin.market.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                    </section>

                    <section>
                        <form action="" method="">
                            <section class="row">

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">نام دسته</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </section>

                                <section class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">دسته والد</label>
                                        <select name="" id="" class="form-control form-control-sm">
                                            <option value="">دسته را انتخاب کنید</option>
                                            <option value="">وسایل الکترونیکی</option>
                                        </select>
                                    </div>
                                </section>
                                <section class="col-12">
                                    <button class="btn btn-primary btn-sm">ثبت</button>
                                </section>
                            </section>
                        </form>
                    </section>

                </section>
            </section>
    </div>
</div>
</section>
@endsection