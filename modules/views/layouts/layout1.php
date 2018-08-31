<?php $this->beginPage() ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>首页 - 默笙后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta content="Mosheng" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link href="/assets/css/vendor/fullcalendar.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="#"> <i class="fe-grid"></i>管理员</a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo yii\helpers\Url::to(['user/users'])  ?>">管理员列表</a>
                            </li>
                            <li>
                                <a href="<?php echo yii\helpers\Url::to(['user/reg']) ?>">新增管理员</a>
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
                        <a href="#"> <i class="fe-gift"></i>商品</a>
                        <ul class="submenu">
                            <li>
                                <a href="icons-feather.html">商品列表</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">商品添加</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="fe-package"></i>页面</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?= \yii\helpers\Url::to(['user/tim'])?>">日历</a>
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
                                        <a href="<?php echo yii\helpers\Url::to(['public/index'])?>">登录</a>
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


<?php echo $content; ?>



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
<script src="/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="/assets/js/vendor/jquery.dataTables.js"></script>
<script src="/assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="/assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="/assets/js/vendor/dataTables.buttons.min.js"></script>
<script src="/assets/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="/assets/js/vendor/buttons.html5.min.js"></script>
<script src="/assets/js/vendor/buttons.flash.min.js"></script>
<script src="/assets/js/vendor/buttons.print.min.js"></script>
<script src="/assets/js/vendor/dataTables.keyTable.min.js"></script>
<script src="/assets/js/vendor/dataTables.select.min.js"></script>

<!-- third party js ends -->

<!-- demo app -->
<!--<script src="/assets/js/pages/datatables.init.js"></script>-->
<!-- end demo js-->

</body>
</html>
<?php $this->endPage() ?>