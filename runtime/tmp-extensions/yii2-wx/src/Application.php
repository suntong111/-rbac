<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/18 0018
 * Time: 09:09
 */
namespace sunt\wx;
use yii\base\Component;
use yii\httpclient\Client;

class Application extends Component
{
//  public static function say(){
//
//  }
public $conf;
public $httpClient;

public $classMap = [
    'qrcode'=>''
];

public function init()
{
    parent::init();
    $this->httpClient = new Client();
}

public function driver($api,$extra = []){
    $config = [
        'conf'=>$this->conf,
        'httpClient'=>$this->httpClient,
        'extra'=>$extra
    ];
    $config['class'] = $this->classMap[$api];
    return \Yii::createObject($config);
}
}