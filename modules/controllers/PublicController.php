<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14 0014
 * Time: 11:00
 */

namespace app\modules\controllers;


use app\modules\models\Admin;
use sunt\wx\Application;
use yii\web\Controller;

class PublicController  extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                //'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                //'backColor'=>0x000000,//背景颜色
                'maxLength' => 4, //最大显示个数
                'minLength' => 4,//最少显示个数
                //'padding' => 5,//间距
                'height'=>50,//高度
                'width' => 80,  //宽度
                // 'foreColor'=>0xffffff,     //字体颜色
                //'offset'=>4,        //设置字符偏移量 有效果
                //'controller'=>'login',        //拥有这个动作的controller
            ],
        ];
    }

   public function actionIndex(){
//       session_start();
//       var_dump($_SESSION);
       $this->layout=false;
       $model = new Admin();
       if (\Yii::$app->request->isPost){
           $post = \Yii::$app->request->post();
//           var_dump($post);
//           die;
           if ($model->login($post)){
            $this->redirect(['default/index']);
               \Yii::$app->end();
           }
       }
       return $this->render('index',[
           'model'=>$model
       ]);
   }

public function actionLogout(){
       \Yii::$app->session->removeAll();
       if (!isset(\Yii::$app->session['admin']['islogin'])){
           $this->redirect(['public/index']);
           \Yii::$app->end();
       }
       $this->goBack();
}



}