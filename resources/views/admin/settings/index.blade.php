@extends('admin.layouts.main')
@section('dash')
    الإعدادات
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px; font-weight: 700;">جدول
                                الإعدادات</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if (count($setting) > 0)
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}
                                        <th class="text-secondary font-weight-bolder opacity-7">العملاء
                                        </th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            التصميم</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            الإعلانات</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder opacity-7">
                                            الموشن </th>
                                        <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            تعديل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($setting as $setting)
                                        <tr>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">{{ $setting->customers }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">{{ $setting->design }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px">{{ $setting->ads }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0" style="margin-right: 20px"> {{ $setting->motion }} </p>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.setting.edit', $setting->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                <h2>لا يوجد إعدادات</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
