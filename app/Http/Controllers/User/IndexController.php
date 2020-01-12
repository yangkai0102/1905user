<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\CommonModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //注册
    public function reg(){
        $data=[
            'name'=>'yangkai',
            'email'=>'1548580932@qq.com',
            'mobile'=>'13663553102',
            'password'=>'123',
            'pass2'=>'123'
        ];
        $url='http://passport.1905.com/test/reg';
        $response=CommonModel::curlPost($url,$data);
        echo '<pre>';print_r($response);echo '</pre>';

    }

    public function login(){

        $data=[
            'name'=>'yangkai',
            'pass'=>'123'
        ];
        //请求登录接口
        $url='http://passport.1905.com/test/login';
        $response=CommonModel::curlPost($url,$data);

        echo '<pre>';print_r($response);echo '</pre>';

    }

    public function getInfo(){
        $token='670a90829772b1b91bdfeebbb18f81f1';
        $uid=1;

        //请求获取数据接口
        $url='http://passport.1905.com/test/info';
        $header=[
            'token:'.$token,
            'uid:'.$uid
        ];
        $response=CommonModel::curlGet($url,$header);
        echo '<pre>';print_r($response);echo '</pre>';

    }
}
