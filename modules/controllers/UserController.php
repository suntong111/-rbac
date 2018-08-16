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
        $model = Admin::find();
        $count = $model->count();
        $pageSize = \Yii::$app->params['pageSize']['admin'];
        $pager = new Pagination(['totalCount'=>$count,'pageSize'=>$pageSize]);
        $users = $model->offset($pager->offset)->limit($pager->limit)->all();
        return $this->render('users',['users'=>$users,'pager'=>$pager]);
    }

}