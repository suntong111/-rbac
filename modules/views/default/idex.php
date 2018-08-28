<?php
use yii\helpers\html;
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
                            <a href="index.html">
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">输入您的电子邮件地址和密码访问的管理员面板。</p>
                        </div>

                       <?=Html::beginForm('','post',['id'=>'form']);?>

                            <div class="form-group mb-3">
                                <label for="emailaddress">账户</label>
                                <?=Html::activeInput('text',$model,'username',['class'=>'form-control','placeholder'=>'键入你的账号']) ?>
                                <?=Html::error($model,'username',['class'=>'error']) ?>
                            </div>



                            <div class="form-group mb-3">
                                <label for="password">密码</label>
                                <?=Html::activeInput('password',$model,'password',['class'=>'form-control','placeholder'=>'键入你的密码'])?>
                                <?=Html::error($model,'password',['class'=>'error']) ?>
                            </div>


                        <div class="form-group mb-3">
                            <label for="password">验证码</label>
                            <?=yii\captcha\Captcha::widget([
                                'model'=>$model,
                                'attribute'=>'verifyCode',
                                'captchaAction'=>'default/captcha',
                                'template'=>'{input}{image}',
                                'options'=>[
                                    'class'=>'input verifycode',
                                    'id'=>'verifyCode'
                                ],
                                'imageOptions'=>[
                                    'class'=>'imagecode',
                                    'id'=>'verifyCode-image',
                                    'alt'=>'点击更换验证码'
                                ]
                            ])?>

                        </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="Login[remeber]" value="1" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin" >记住我</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <?=Html::submitButton('登录',['class'=>'btn btn-primary btn-block'])?>

                            </div>

                       <?=Html::endForm()?>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted"> <a href="pages-register.html" class="text-muted ml-1">忘记密码？</a></p>
                        <p class="text-muted">还没有账号？ <a href="pages-register.html" class="text-dark ml-1"><b>注册</b></a></p>
                    </div> <!-- end col -->
                </div>
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
<script type="text/javascript">

</script>

</body>
</html>