<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/28 0028
 * Time: 10:29
 */

namespace app\modules\models;


use yii\base\Model;

class Login extends Model
{
public $username;
public $password;
public $verifyCode;
public $remeber;
private $user = [
  'id'=>1,
  'username'=>'sunt',
  'password'=>'123456'
];

public function rules()
{
    return [
      ['username','required','message'=>'用户名不能为空'],
        ['verifyCode','captcha','captchaAction'=>'default/captcha','message'=>'验证码不能为空'],
        ['password','checkPwd','skipOnEmpty'=>false],
        ['remeber','safe']
    ];
}

public function checkPwd($attribute,$params){
    if (empty($this->$attribute)){
        $this->addError($attribute,'密码不能为空');
    }elseif (strlen($this->$attribute)<6){
        $this->addError($attribute,'密码错误');
    }elseif ($this->user['username'] !=$this->username || $this->user['password'] !=$this->password){
        $this->addError($attribute,'登录失败');
    }
}
   public function login(){
    if (!$this->validate()){
        return false;
    }
  self::createUserSession($this->user['id'],$this->user['username']);
    //如果有记住密码，则添加到cookie
       if($this->remeber){
           $time = time()+60*60;
           $cookie = new \yii\web\Cookie();
           $cookie ->name = 'mrs_remeber';
           $cookie ->expire = $time;
           $cookie ->httpOnly = true;
           $cookie ->value =base64_encode($this->user['id'].'#'.$this->user['username'].'#'.$time);
           \Yii::$app->response->getCookies()->add($cookie);
       }
    return true;
   }

   public static function createUserSession($user_id,$username){
       $session = \Yii::$app->session;
       $session ->set('mr_id',$user_id);
       $session->set('mr_username',$username);
   }

   public static function loginCookie(){
     $remCookie = \Yii::$app->session->get('mrs_remember');
     if($remCookie){
         list($id,$username,$time)=explode('#',base64_decode($remCookie));
         if($time>time()){
             self::createUserSession($id,$username);
             return $username;
         }
     }
   }

}