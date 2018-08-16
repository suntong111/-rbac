<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/15 0015
 * Time: 10:12
 */

namespace app\modules\controllers;


use yii\web\Controller;

class BaseController extends Controller
{
    public function post($key,$default=''){
        return \Yii::$app->request->post($key,$default);
    }

    public function get($key,$default=''){
        return \Yii::$app->request->get($key,$default);
    }
    public function renderJSON($data=[],$msg='ok',$code = 200){
       header('Content-type:application/json');
       echo json_encode([
           "code"=>$code,
          "msg"=>$msg,
          "data"=>$data,
          "req_id"=>uniqid(),
       ]);
       return \Yii::$app->end();
    }

}