<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>首页 - 默笙后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta content="Mosheng" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Navigation Bar-->
<header id="topnav">
    <nav class="navbar-custom">

        <div class="container-fluid">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small>清除所有</small>
                                            </a>
                                        </span>通知</h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">彼得</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>嗨，你好吗？下次会议怎么样？</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar 管理员点评
                                    <small class="text-muted">一分钟前</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">凯伦·罗宾逊</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>真的！这个管理员看起来不错，设计很棒。</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">新用户注册通知
                                    <small class="text-muted">5小时之前</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-light">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">哦
                                    <b>Admin</b>
                                    <small class="text-muted">13天之前</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            查看全部
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <small class="pro-user-name ml-1">
                            Admin
                        </small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">欢迎 !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>我的账户</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>设置</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>锁定屏幕</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?php echo yii\helpers\Url::to(['public/logout'])?>" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>退出</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <a href="index.html" class="logo">
                                <span class="logo-lg">
                                    <img src="/assets/images/logo.png" alt="" height="18">
                                </span>
                        <span class="logo-sm">
                                    <img src="/assets/images/logo-sm.png" alt="" height="28">
                                </span>
                    </a>
                </li>
                <li class="app-search">
                    <form>
                        <input type="text" placeholder="输入关键字以搜索..." class="form-control">
                        <button type="submit" class="sr-only"></button>
                    </form>
                </li>
            </ul>
        </div>

    </nav>
    <!-- end topbar-main -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="index.html">
                            <i class="fe-airplay"></i>仪表盘</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="fe-layers"></i>组件</a>
                        <ul class="submenu">
                            <li>
                                <a href="components-elements.html">UI 界面元素</a>
                            </li>
                            <li>
                                <a href="components-rangeslider.html">范围滑块</a>
                            </li>
                            <li>
                                <a href="components-alerts.html">消息框</a>
                            </li>
                            <li>
                                <a href="components-ribbons.html">文章块</a>
                            </li>
                            <li>
                                <a href="components-sweet-alerts.html">弹窗</a>
                            </li>
                            <li>
                                <a href="components-typography.html">排版</a>
                            </li>
                            <li>
                                <a href="components-charts.html">统计图</a>
                            </li>
                            <li>
                                <a href="components-maps.html">地图</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="fe-bookmark"></i>表单</a>
                        <ul class="submenu">
                            <li>
                                <a href="form-elements.html">一般表单元素</a>
                            </li>
                            <li>
                                <a href="form-advanced.html">高级表单</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="fe-grid"></i>表格</a>
                        <ul class="submenu">
                            <li>
                                <a href="tables-basic.html">基本表格</a>
                            </li>
                            <li>
                                <a href="tables-advanced.html">高级表格</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="fe-cpu"></i>图标</a>
                        <ul class="submenu">
                            <li>
                                <a href="icons-feather.html">常用图标</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">材料设计图标</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html">其他图标</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="fe-package"></i>页面</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="pages-calendar.html">日历</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">时间轴</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">发票</a>
                                    </li>
                                    <li>
                                        <a href="pages-contacts.html">联系人</a>
                                    </li>
                                    <li>
                                        <a href="pages-starter.html">起始页</a>
                                    </li>
                                    <li>
                                        <a href="pages-topbar-light.html">头部高亮</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="pages-login.html">登录</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">注册</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">找回密码</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">锁定屏幕</a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">404错误页面</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">默笙</a></li>
                            <li class="breadcrumb-item active">仪表盘</li>
                        </ol>
                    </div>
                    <h4 class="page-title">仪表盘</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-cart text-primary widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0">商品总数</h5>
                            <h3 class="mt-2">3,543</h3>
                        </div>
                        <div id="sparkline1"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd text-danger widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0">销售总数</h5>
                            <h3 class="mt-2">21,287</h3>
                        </div>
                        <div id="sparkline2"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0">用户总数</h5>
                            <h3 class="mt-2">5,387</h3>
                        </div>
                        <div id="sparkline3"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-3 col-lg-6">
                <div class="card widget-flat">
                    <div class="card-body p-0">
                        <div class="p-3 pb-0">
                            <div class="float-right">
                                <i class="mdi mdi-eye-outline text-danger widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0">访问量</h5>
                            <h3 class="mt-2">74,315</h3>
                        </div>
                        <div id="sparkline4"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">销售分析</h4>

                        <canvas id="bar" height="350" class="mt-4"></canvas>

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">高级市场</h4>

                        <canvas id="doughnut" height="350" class="mt-4"></canvas>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">客户列表</h4>

                        <div class="table-responsive mt-3">
                            <table class="table table-hover table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>用户ID</th>
                                    <th>基本信息</th>
                                    <th>手机号</th>
                                    <th>地址</th>
                                    <th>注册时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td><b>#0121</b></td>
                                    <td>
                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">默笙</a></p>
                                        <span class="font-13">3494490@qq.com</span>
                                    </td>

                                    <td>
                                        155-0000-0000
                                    </td>

                                    <td>
                                        中国·河南
                                    </td>

                                    <td>
                                        2018/08/10
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>编辑</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>删除</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>发送邮件</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>#0121</b></td>
                                    <td>
                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">默笙</a></p>
                                        <span class="font-13">3494490@qq.com</span>
                                    </td>

                                    <td>
                                        155-0000-0000
                                    </td>

                                    <td>
                                        中国·河南
                                    </td>

                                    <td>
                                        2018/08/10
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>编辑</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>删除</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>发送邮件</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>#0121</b></td>
                                    <td>
                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">默笙</a></p>
                                        <span class="font-13">3494490@qq.com</span>
                                    </td>

                                    <td>
                                        155-0000-0000
                                    </td>

                                    <td>
                                        中国·河南
                                    </td>

                                    <td>
                                        2018/08/10
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>编辑</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>删除</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>发送邮件</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>#0121</b></td>
                                    <td>
                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">默笙</a></p>
                                        <span class="font-13">3494490@qq.com</span>
                                    </td>

                                    <td>
                                        155-0000-0000
                                    </td>

                                    <td>
                                        中国·河南
                                    </td>

                                    <td>
                                        2018/08/10
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>编辑</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>删除</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>发送邮件</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>#0121</b></td>
                                    <td>
                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                        <p class="mb-0 font-weight-bold"><a href="javascript: void(0);">默笙</a></p>
                                        <span class="font-13">3494490@qq.com</span>
                                    </td>

                                    <td>
                                        155-0000-0000
                                    </td>

                                    <td>
                                        中国·河南
                                    </td>

                                    <td>
                                        2018/08/10
                                    </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>编辑</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>删除</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>发送邮件</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                Mosheng Admin &copy; 2018 - tecms.net
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="#">关于我们</a>
                    <a href="#">帮助</a>
                    <a href="#">联系我们</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->


<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>
<script src="js/app.min.js"></script>

<!-- Plugins js -->
<script src="/assets/js/vendor/Chart.bundle.js"></script>
<script src="/assets/js/vendor/jquery.sparkline.min.js"></script>
<script src="js/vendor/jquery.knob.min.js"></script>

<script src="/assets/js/pages/dashboard.init.js"></script>

</body>
</html>
