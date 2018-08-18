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
            'adminuser' => '用户名',
            'password' => '密码',
            'createtime' => '创建时间',
            'logintime' => '登录时间',
        ];
    }


    public function rules()
    {
        return [
            [['adminuser','password'],'unique','message'=>'账号密码不能重复','on'=>['reg']],
            ['adminuser','required','message'=>'管理账号不能为空','on'=>['reg','login']],
            ['password','required','message'=>'管理员密码不能为空','on'=>['reg','login']],
            ['rememberMe','boolean','on'=>'login'],
            ['password','validatepass','on'=>'login'],
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
        $this->scenario = 'login';
        if ($this->load($data) && $this->validate()){
            $lifetime = $this->rememberMe ? 24*3600 : 0;
            $session = \Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin'] = [
                'adminuser'=>$this->adminuser,
                'isLogin'=>1
            ];
//            echo $session['admin']['adminuser'];
//            die;
            $this->updateAll(['logintime'=>time()],'adminuser = :user',[':user'=>$this->adminuser]);
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }

 public function reg($data,$scenario='reg'){
        $this->scenario=$scenario;
  if ($this->load($data) && $this->validate()){
      $this->createtime = time();
      $this->status = 1;
      $this->password = md5($this->password);
      if ($this->save(false)){
          return true;
      }
      return false;
  }
  return false;
 }


}
