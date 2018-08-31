<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">默笙</a></li>
                            <li class="breadcrumb-item"><a href="#">表单</a></li>
                            <li class="breadcrumb-item active">一般表单</li>
                        </ol>
                    </div>
                    <h4 class="page-title">一般元素</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="mb-3 header-title">水平形式</h4>

                    <?php
                    if (Yii::$app->session->hasFlash('info')) {
                        echo Yii::$app->session->getFlash('info');
                    }
                    $form = ActiveForm::begin([
                        'fieldConfig'=>[
                            'template'=>'<div class="form-group row mb-3">{input}</div>{error}',
                        ]
                    ])
                    ?>

                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">姓名</label>
                        <div class="col-9">
                            <?php
                            echo $form->field($model,'adminuser')->textInput(['class'=>'form-control','placeholder'=>'name'])
                            ?>

                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">密码</label>
                        <div class="col-9">
                            <?php
                            echo $form->field($model,'password')->passwordInput(['class'=>'form-control','placeholder'=>'Password'])
                            ?>

                        </div>
                    </div>

                    <div class="form-group row mb-3 justify-content-end">

                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <?php
                            echo Html::submitButton('修改',['class'=>'btn btn-info'])
                            ?>

                        </div>
                    </div>
                    <?php
                    ActiveForm::end();
                    ?>

                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->

    </div>
    <!-- end row -->


    -->


</div> <!-- end container -->
</div>
<!-- end wrapper -->