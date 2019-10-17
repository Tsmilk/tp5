<?php
/**
 * Created by PhpStorm.
 * User: My
 * Date: 2019/10/16
 * Time: 16:39
 */
namespace app\index\controller;
use think\Controller;

use app\common\validate\Base;
use think\captcha\Captcha;
use think\Request;

class User extends Controller
{
    // 注册
    public function register(){

    }

    // 处理用户提交的注册信息
    public function insert(){

    }

    // 登录
    public function login(){
        return "登录成功";
    }

    // 验证码
    public function verify(){
//        $config = array(
//            //验证码的字符集
//            'codeSet' => '23456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
//            // 验证码字体大小
//            'fontSize' => 30,
//            // 验证码位数
//            'length' => 5,
//            // 验证码杂点
////            'useNoise' => true,
//            //添加混淆曲线
//            'useCurve' => false,
//            // 验证码图片高度
//            'imageH' => 60,
//            // 验证码图片宽度
//            'imageW' => 200,
//            // 验证码过期时间(s)
//            'expire' => 1800,
//            'reset' => true
//        );
        ob_clean();
//        $captcha = new Captcha($config);
        $captcha = new Captcha();
        return $captcha->entry();
    }

    // 用户登录验证与查询
//    public function loginCheck(){
//        // 验证数据
//        $data = Request::post(); // 要验证的数据
//        $rule = array(
//            'username|用户名' => 'require|username',
//            'password|密码' => 'require|alphaNum',
//            'verify|验证码' => 'require'
//        ); // 自定义验证规则
//        $res = $this->validate($data, $rule); // 开始验证
//        if($res !==true){
//            echo '<script>alert("' . $res . '");window.location=""</script';
//        }else{
//            // 执行查询
//            $result = UseModel::get(function ($query) use ($data){
//                $query->where('username', $data['username'])
//                    ->where('password', sha1($data['password']));
//            });
//            $verify = Request::post('verify');
//
//            if(null == $result){
//                $this->success('用户名或密码错误，请重新登录', '');
//            }else{
//                if(!captcha_check($verify)){
//                    $this->success('验证码错误，请重新登录', '');
//                }else{
//                    // 将用户数据写到session中
//                    Session::set('user_name', $result->name);
//                    $this->error('登录成功', '');
//                }
//            }
//        }
//    }
}