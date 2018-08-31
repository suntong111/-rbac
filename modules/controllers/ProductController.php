<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/30 0030
 * Time: 15:35
 */

namespace app\modules\controllers;


use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex(){
         $this->layout='layout1';
//         $model = Product::find();
        return $this->render('index');
    }

}