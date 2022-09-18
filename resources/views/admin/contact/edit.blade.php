@extends('admin.layouts.main')
@section('dash')
    التواصل
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px">تعديل التواصل</h5>
                        </div>
                        <div class="col-6" style="position: relative;"><a href="{{ route('admin.contacts') }}"
                                style="position: absolute; left: 2%" class="btn btn-primary">عرض التواصل</a></div>
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
                                                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="email"
                                                                        style="font-size: 18px">الإيميل</label>
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $contact->email }}" required />
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="mobile"
                                                                        style="font-size: 18px">الرقم</label>
                                                                    <input type="number" name="mobile" id="mobile"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $contact->mobile }}" required />
                                                                </div>

                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="description"
                                                                        style="font-size: 18px">التفاصيل</label>
                                                                    <input type="text" name="description" id="description"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $contact->description }}" />
                                                                </div>

                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="whatsapp"
                                                                        style="font-size: 18px">لينك الواتساب</label>
                                                                    <input type="text" name="whatsapp" id="whatsapp"
                                                                        class="form-control form-control-lg formborderCSS" value="{{ $contact->whatsapp }}" required />
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
