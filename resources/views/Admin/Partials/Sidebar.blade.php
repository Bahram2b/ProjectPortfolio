<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{url('upload/user_images/'.$userphoto)}}" width="45px" />

            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::user()->name}}</div><small>Admin</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dash_index')}}"><i class="sidebar-item-icon fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
                <a class="active" href={{url('/')}}>
                    <span class="nav-label">صفحه اصلی</span>
                </a>
            </li>
            <li class="heading">Portfolio</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-photo"></i>
                    <span class="nav-label"> عکس ها</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('Photo.index')}}">مدیریت</a>
                    </li>
                    <li>
                        <a href="{{route('Product.Create')}}">Portraits</a>
                    </li>
                    <li>
                        <a href="{{route('sub_cat_index')}}">Photo Manipulations</a>
                    </li>
                    <li>
                        <a href="{{route('Coupon_index')}}">Product Photographs</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-video-camera"></i>
                    <span class="nav-label">فیلم ها</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('Photo.index')}}">اسلایدر</a>
                    </li>
                    <li>
                        <a href="{{route('cat_index')}}">دسته بندی ها</a>
                    </li>
                    <li>
                        <a href="{{route('sub_cat_index')}}">  زیر دسته بندی ها</a>
                    </li>
                    <li>
                        <a href="{{route('Coupon_index')}}">کد تخفیف</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">صفخه پروفایل</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('admin.pass')}}">تقییر رمز عبور</a>
                    </li>
                    <li>
                        <a href="{{route('admin.profile')}}">اطلاعات پروفایل</a>
                    </li>
                    <li>
                        <a href="{{route('user.logout')}}">خروج</a>
                    </li>

                </ul>
            </li>

            <li class="heading">PAGES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="mailbox.html">Inbox</a>
                    </li>
                    <li>
                        <a href="mail_view.html">Mail view</a>
                    </li>
                    <li>
                        <a href="mail_compose.html">Compose mail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
                    <span class="nav-label">Calendar</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                        <a href="lockscreen.html">Lockscreen</a>
                    </li>
                    <li>
                        <a href="forgot_password.html">Forgot password</a>
                    </li>
                    <li>
                        <a href="error_404.html">404 error</a>
                    </li>
                    <li>
                        <a href="error_500.html">500 error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="javascript:;">Level 2</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-3-level collapse">
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                            <li>
                                <a href="javascript:;">Level 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
