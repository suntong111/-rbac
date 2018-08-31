

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">默笙</a></li>
                            <li class="breadcrumb-item"><a href="#">页面</a></li>
                            <li class="breadcrumb-item active">日历</li>
                        </ol>
                    </div>
                    <h4 class="page-title">日历</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg font-16 btn-primary btn-block  ">
                                    <i class="mdi mdi-plus-circle-outline"></i> 创建新事件
                                </a>
                                <div id="external-events" class="m-t-20">
                                    <br>
                                    <p class="text-muted">拖放事件或单击日历</p>
                                    <div class="external-event bg-success" data-class="bg-success">
                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>新主题发布
                                    </div>
                                    <div class="external-event bg-info" data-class="bg-info">
                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>我的事件
                                    </div>
                                    <div class="external-event bg-warning" data-class="bg-warning">
                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>会见经理
                                    </div>
                                    <div class="external-event bg-danger" data-class="bg-danger">
                                        <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>创造新的主题
                                    </div>
                                </div>

                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                    <label class="custom-control-label" for="drop-remove">记住我的移动</label>
                                </div>

                            </div> <!-- end col-->

                            <div class="col-lg-9">
                                <div id="calendar"></div>
                            </div> <!-- end col -->

                        </div>  <!-- end row -->
                    </div> <!-- end card body-->
                </div> <!-- end card -->

                <!-- Add New Event MODAL -->
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">添加新事件</h4>
                            </div>
                            <div class="modal-body pt-3 pr-4 pl-4">
                            </div>
                            <div class="text-right pb-4 pr-4">
                                <button type="button" class="btn btn-light " data-dismiss="modal">关闭</button>
                                <button type="button" class="btn btn-success save-event  ">创建事件</button>
                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">删除</button>
                            </div>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->

                <!-- Modal Add Category -->
                <div class="modal fade" id="add-category" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0 d-block">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">添加类别</h4>
                            </div>
                            <div class="modal-body p-4">
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">类别名称</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">选择类别颜色</label>
                                        <select class="form-control form-white" data-placeholder="选择颜色..." name="category-color">
                                            <option value="primary">初级</option>
                                            <option value="success">成功</option>
                                            <option value="danger">危险</option>
                                            <option value="info">提示</option>
                                            <option value="warning">警告</option>
                                            <option value="dark">黑色</option>
                                        </select>
                                    </div>

                                </form>

                                <div class="text-right">
                                    <button type="button" class="btn btn-light " data-dismiss="modal">关闭</button>
                                    <button type="button" class="btn btn-primary ml-1   save-category" data-dismiss="modal">保存</button>
                                </div>

                            </div> <!-- end modal-body-->
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->
            </div>
            <!-- end col-12 -->
        </div> <!-- end row -->


    </div> <!-- end container -->
</div>
<!-- end wrapper -->





<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>
<script src="/assets/js/app.min.js"></script>

<!-- plugin js -->
<script src="/assets/js/vendor/jquery-ui.min.js"></script>
<script src="/assets/js/vendor/fullcalendar.min.js"></script>

<!-- demo init -->
<script src="/assets/js/pages/calendar.init.js"></script>

