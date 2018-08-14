<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14 0014
 * Time: 11:00
 */

namespace app\modules\controllers;


use app\modules\models\Admin;
use yii\web\Controller;

class PublicController  extends Controller
{
   public function actionIndex(){
       $this->layout=false;
       $model = new Admin();
       if (\Yii::$app->request->isPost){
           $post = \Yii::$app->request->post();

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