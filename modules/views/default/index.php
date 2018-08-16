
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


