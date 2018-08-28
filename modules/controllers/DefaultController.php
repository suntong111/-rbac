<?php

namespace app\modules\controllers;

use app\modules\models\Login;
use yii\web\Controller;

/**
 * Default controller for the `modules` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout='layout1';

        return $this->render('index');
    }
    public function actions()
    {
        return [
          'captcha'=>[
              'class'=>'yii\captcha\CaptchaAction',
              'maxLength'=>4,
              'minLength'=>4,
              'width'=>80,
              'height'=>40
          ],
        ];
    }

    public function actionIdex(){
        $model = new Login();

        return $this->renderPartial('idex',['model'=>$model]);
    }
}
