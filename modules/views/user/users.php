

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">默笙</a></li>
                            <li class="breadcrumb-item"><a href="#">表格</a></li>
                            <li class="breadcrumb-item active">高级表格</li>
                        </ol>
                    </div>
                    <h4 class="page-title">高级表格</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">基本数据表格</h4>
                        <p class="text-muted font-13 mb-4">
                            DATABATABLE默认情况下启用了大多数特性，因此您需要使用自己的表来调用该结构。 功能：
                            <code>$().DataTable();</code>.
                        </p>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>工作</th>
                                <th>年龄</th>
                                <th>开始日期</th>
                                <th>状态</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php foreach ($users as $user):?>
                                <tr>
                                    <td>默笙</td>
                                    <td><?php echo $user->id ?></td>
                                    <td><?php echo $user->adminuser ?></td>
                                    <td>23</td>
                                    <td>2017/06/25</td>
                                    <td>正常</td>
                                </tr>

                            <?php endforeach;?>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


















    </div> <!-- end container -->
</div>
<!-- end wrapper -->

