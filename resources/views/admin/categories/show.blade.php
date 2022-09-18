@extends('admin.layouts.main')

@section('content')
    <div class="row">
        @isset($cat)
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                            <div class="col-12">
                                <h5 class="text-center text-white text-capitalize ps-3"
                                    style="margin-right: 10px; font-weight: 700;">{{ $cat->name }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            @if (count($products) > 0)
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}
                                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                                الإسم</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                                الوصف</th>
                                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                                الصورة</th>
                                            <th
                                                class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                                اللينك</th>
                                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                                منذ</th>
                                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                                تعديل</th>
                                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                                حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0" style="margin-right:20px">
                                                        {{ $product->title }}</p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0" style="margin-right:20px">
                                                        {{ $product->description }}</p>
                                                </td>

                                                <td>
                                                    <p class="text-center text-xs font-weight-bold mb-0"
                                                        style="margin-right:20px">
                                                        <img class="img-thumbnail" style="height: 80px; width: 80px ;"
                                                            src="{{ asset($product->image) }}" alt="product">
                                                    </p>

                                                </td>

                                                <td>
                                                    <p class="text-center text-xs font-weight-bold mb-0"
                                                        style="margin-right:20px">
                                                        <a href="{{ $product->link }}" target="_blank">
                                                            Your link
                                                        </a>
                                                    </p>
                                                </td>

                                                <td class="align-middle text-center">

                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $product->created_at->diffForHumans() }}</span>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <a href="{{ route('admin.category.edit', $cat->id) }}"
                                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('admin.category.destroy', $cat->id) }}"
                                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Delete user"
                                                        onclick="return confirm('هل انت متأكد من حذف الشركة؟')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-danger text-center" role="alert">
                                    <h2>لا يوجد منتجات</h2>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-danger text-center" role="alert">
                <h2>لا يوجد قسم</h2>
            </div>
        @endisset
    </div>
@endsection
