<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>登录 - 后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="Mosheng" name="author" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">

                                <span><img src="/assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">登录。</p>
                        </div>

                        <?php $form = ActiveForm::begin([
                                'fieldConfig'=>[
                                        'template'=>'{input}{error}',
                                ]
                        ])

                        ?>

                            <div class="form-group mb-3">
                                <label for="emailaddress">账户</label>
                                <?php
                                echo $form->field($model,'adminuser')->textInput(['class'=>'form-control','placeholder'=>'键入你的账号'])
                                ?>

                            </div>

                            <div class="form-group mb-3">

                                <label for="password">密码</label>
                                <?php
                                echo $form->field($model,'password')->passwordInput(['class'=>'form-control','placeholder'=>'键入你的密码'])
                                ?>

                            </div>

                            <div class="form-group mb-3">
                                <?php
                                echo $form->field($model,'rememberMe')->checkbox([
                                        'id'=>'checkbox-signin',
                                    'template'=>'<div class="custom-control custom-checkbox">{input}<label  for="checkbox-signin">记住我</label></div>',
                                ])
                                ?>

                            </div>

                            <div class="form-group mb-0 text-center">
                                <?php
                                echo Html::submitButton('登录',['class'=>'btn btn-primary btn-block'])
                                ?>

                            </div>

                        <?php
                        ActiveForm::end();
                        ?>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->


                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>
<script src="/assets/js/app.min.js"></script>

</body>
</html>