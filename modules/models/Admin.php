<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $adminuser
 * @property string $password
 * @property int $createtime
 * @property int $logintime
 */
class Admin extends \yii\db\ActiveRecord
{
    public $rememberMe = true;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createtime', 'logintime'], 'integer'],
            [['adminuser'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    public function login($data){
        if ($this->load($data) && $this->validate()){
            $lifetime = $this->rememberMe ? 24*3600 : 0;
            $session = \Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin'] = [
                'adminuser'=>$this->adminuser,
                'isLogin'=>1
            ];
            $this->updateAll(['logintime'=>time()],'adminuser = :user',[':user'=>$this->adminuser],['password'=>md5($this->password)]);
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }
}
