<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ادمین پنل</title>
    <!-- GLOBAL MAINLY STYLES-->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    {{--    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />--}}

    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/angular-toastr/2.1.1/angular-toastr.css" rel="stylesheet" />

    <!-- PLUGINS STYLES-->
    <link href="{{asset('backend/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
            <span class="brand-mini">AC</span>
            <span class="brand">
                       پنل مدیریت <span class="brand-tip"></span>
                    </span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar" style="padding-right: 0;">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <form class="navbar-search" action="javascript:;">
                    <div class="rel">
                        <input class="form-control" placeholder="جستجو...">
                        <span class="search-icon"><i class="ti-search"></i></span>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-inbox">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa -envelope-o"></i>
                    <span class="badge badge-primary envelope-badge">9</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left dropdown-menu-media">
                    <li class="dropdown-menu-header">
                        <div>
                            <a class="pull-left" href="mailbox.html">مشاهده همه</a>
                            <span><strong>9 </strong>پیام جدید</span>
                        </div>
                    </li>
                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                        <div>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="{{asset('backend/img/users/u1.jpg')}}" />
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-left">Just now</small>
                                        <div class="font-13">Your proposal interested me.</div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="{{asset('backend/img/users/u2.jpg')}}" />
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-strong"></div>Becky Brooks<small class="text-muted float-left">18 mins</small>
                                        <div class="font-13">Lorem Ipsum is simply.</div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="{{asset('backend/img/users/u3.jpg')}}" />
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-strong"></div>Frank Cruz<small class="text-muted float-left">18 mins</small>
                                        <div class="font-13">Lorem Ipsum is simply.</div>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="{{asset('backend/img/users/u4.jpg')}}" />
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-strong"></div>Rose Pearson<small class="text-muted float-left">3 hrs</small>
                                        <div class="font-13">Lorem Ipsum is simply.</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown dropdown-notification">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                <ul class="dropdown-menu dropdown-menu-left dropdown-menu-media">
                    <li class="dropdown-menu-header">
                        <div>
                            <a class="pull-left" href="javascript:;">مشاهده همه</a>
                            <span><strong>5</strong> پیام جدید</span>
                        </div>

                    </li>
                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                        <div>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-13">4 مهمات انتهت</div><small class="text-muted">22 دقيقة</small></div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-13">لديك 10 أوامر جديدة</div><small class="text-muted">40 دقيقة</small></div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-13">Server #7 rebooted</div><small class="text-muted">1ساعة</small></div>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <div class="font-13">مستخدم جديد مسجل</div><small class="text-muted">2 ساعة</small></div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <span></span><i class="fa fa-angle-down m-l-5"></i>{{Auth::user()->name}}
                    <img src="{{url('upload/user_images/'.$userphoto)}}" />
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>صفحه پروفایل</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>تنظیمات</a>
{{--                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>دعم</a>--}}
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="{{route('user.logout')}}"><i class="fa fa-power-off"></i>خروج</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
