<body class="g-sidenav-show rtl bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{route('farouk')}}"
                target="_blank">

                <img src="{{ asset('admin/img/farouk.jpg') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold text-white"> فاروق</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" style="height: 100%" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/admins' ? 'active' : '' }}"
                        href="{{ route('admin.admins') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <span class="nav-link-text me-1">المسؤولين</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/users' ? 'active' : '' }}"
                        href="{{ route('admin.users') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="nav-link-text me-1">الأعضاء</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/contacts' ? 'active' : '' }}"
                        href="{{ route('admin.contacts') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-link"></i>
                        </div>
                        <span class="nav-link-text me-1">التواصل</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/settings' ? 'active' : '' }}"
                        href="{{ route('admin.settings') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-cog"></i>
                        </div>
                        <span class="nav-link-text me-1">الإعدادات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/connections' ? 'active' : '' }}"
                        href="{{ route('admin.connections') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="far fa-address-card"></i>
                        </div>
                        <span class="nav-link-text me-1">الطلبات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/categories' ? 'active' : '' }}"
                        href="{{ route('admin.categories') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-tags"></i>
                        </div>
                        <span class="nav-link-text me-1">الأقسام</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/products' ? 'active' : '' }}"
                        href="{{ route('admin.products') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fab fa-product-hunt"></i>
                        </div>
                        <span class="nav-link-text me-1">المنتجات</span>
                    </a>
                </li>
            </ul>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                <div class="mx-3">
                  <a class="btn bg-gradient-primary mt-4 w-100" href="{{ route('logout') }}" type="button"><i class="fas fa-sign-out-alt"></i> تسحيل الخروج</a>
                </div>
              </div>
        </div>
    </aside>
