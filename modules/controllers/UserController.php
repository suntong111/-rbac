<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15 0015
 * Time: 17:00
 */

namespace app\modules\controllers;


use app\modules\models\Admin;
use yii\data\Pagination;
use yii\web\Controller;

class UserController extends BaseController
{
    public function actionUsers(){
        $this->layout='layout1';
        $model = Admin::find()->where(['status'=>1]);
        $count = $model->count();
        $pageSize = \Yii::$app->params['pageSize']['admin'];
        $pager = new Pagination(['totalCount'=>$count,'pageSize'=>$pageSize]);
        $users = $model->offset($pager->offset)->limit($pager->limit)->all();

        $set_flag = $this->checkPrivilege( "user/reg" );
        return $this->render('users',['users'=>$users,'pager'=>$pager,'set_flag'=>$set_flag]);
    }


    public function actionReg(){
        $this->layout='layout1';
      $model = new Admin();
      if (\Yii::$app->request->isPost){
        $post = \Yii::$app->request->post();

        if ($model->reg($post)){

            return $this->redirect(['user/users']);
        }else{
            \Yii::$app->session->setFlash('info','添加失败');
        }
      }
      return $this->render('reg',[
          'model'=>$model
      ]);
    }

    public function actionDel(){
       $userid = \Yii::$app->request->get('id');
       $res = Admin::deleteAll('id = :id',[':id'=>$userid]);
       if (!$res){
           throw new \Exception('删除失败');
       }else{
           $this->redirect(['user/users']);
       }
    }
}