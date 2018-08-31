

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
                    <h4 class="page-title">管理员</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">管理员列表</h4>


                        <div class="button-list"style="float: right">
                            <a href="<?php echo yii\helpers\Url::to(['user/reg']) ?>">
                        <button type="button" class="btn btn-primary">新增管理员</button>
                            </a>
                        </div>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>名字</th>
                                <th>年龄</th>
                                <th>开始日期</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php foreach ($users as $user):?>
                                <tr>
                                    <td><?php echo $user->id ?></td>
                                    <td><?php echo $user->adminuser ?></td>

                                    <td>23</td>
                                    <td><?php echo date("Y-m-d H:i:s",$user->logintime)  ?></td>
                                    <td>正常</td>
                                    <td>
                                        <a href="<?php echo yii\helpers\Url::to(['user/edit', 'id' => $user->id]); ?>">编辑</a>
                                        <a href="<?php echo yii\helpers\Url::to(['user/del', 'id' => $user->id]); ?>">删除</a>

                                    </td>




                                </tr>

                            <?php endforeach;?>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="dataTables_paginate paging_simple_numbers" style="float: right">
            <?php echo \yii\widgets\LinkPager::widget([
                'pagination' => $pager,
//                'options' => ['class' => 'm-pagination'],
                'prevPageLabel' => '上一页',
                'nextPageLabel' => '下一页;',
            ]) ?>
        </div>
        <!-- end users table -->
    </div>
















    </div> <!-- end container -->
</div>
<!-- end wrapper -->

