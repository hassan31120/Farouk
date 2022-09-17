@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px">تعديل الإعدادات</h5>
                        </div>
                        <div class="col-6" style="position: relative;"><a href="{{ route('admin.settings') }}"
                                style="position: absolute; left: 2%" class="btn btn-primary">عرض الإعدادات</a></div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class=" container-fluid">
                            <!--form section-->
                            <section class="vh-100 gradient-custom sectionFormDIR">
                                <div class="container py-5 h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-12 col-lg-9 col-xl-7">
                                            <div class="card shadow-2-strong card-registration"
                                                style="border-radius: 15px;">
                                                <div class="card-body p-4 p-md-5">
                                                    <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="customers"
                                                                        style="font-size: 18px">العملاء</label>
                                                                    <input type="number" name="customers" id="customers"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $setting->customers }}" required />
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="design"
                                                                        style="font-size: 18px">التصميم</label>
                                                                    <input type="number" name="design" id="design"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $setting->design }}" required />
                                                                </div>

                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="ads"
                                                                        style="font-size: 18px">الإعلانات</label>
                                                                    <input type="number" name="ads" id="ads"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $setting->ads }}" />
                                                                </div>

                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="motion"
                                                                        style="font-size: 18px">الموشن</label>
                                                                    <input type="number" name="motion" id="motion"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $setting->motion }}" required />
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="mt-4 pt-2 text-center">
                                                            <input class="btn btn-primary btn-lg" type="submit"
                                                                value="تعديل" />
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--endform section-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
