<?php

namespace app\modules\models;

use Yii;
use yii\db\ActiveRecord;


class Admin extends ActiveRecord
{
    public $rememberMe = true;

    public static function tableName()
    {
        return 'admin';
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adminuser' => 'Adminuser',
            'password' => 'Password',
            'createtime' => 'Createtime',
            'logintime' => 'Logintime',
        ];
    }


    public function rules()
    {
        return [

            ['adminuser','required','message'=>'管理账号不能为空'],
            ['password','required','message'=>'管理员密码不能为空'],
            ['rememberMe','boolean'],
            ['password','validatepass'],
        ];
    }



    public function validatePass(){
        if(!$this->hasErrors()){
            $data = self::find()->where('adminuser = :user and password = :pass',[":user"=>trim($this->adminuser),":pass"=>md5($this->password)])->one();

//            var_dump($data);
//            die;
            if (is_null($data)){
                $this->addError('password',"用户名或者密码错误");
            }
        }
    }

    public function login($data){
        if ($this->load($data) && $this->validate()){
            $lifetime = $this->rememberMe ? 24*3600 : 0;
            $session = \Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin'] = [
                'adminuser'=>$this->adminuser,
                'isLogin'=>1
            ];

            $this->updateAll(['logintime'=>time()],'adminuser = :user',[':user'=>$this->adminuser]);
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }




}
