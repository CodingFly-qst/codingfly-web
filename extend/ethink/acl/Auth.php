<?php
/**
 * Created by PhpStorm.
 * User: caohailiang
 * Date: 2017/4/8
 * Time: 19:02
 * 鉴权模块，密码采用服务端md5一次加密
 */

namespace ethink\acl;

use think\Cookie;
use think\Db;
use think\Request;
use think\Session;

class Auth
{
    protected $dbPrefix;
    protected $tokenExpires = 864000;/*10天*/
    public function __construct($dbPrefix = "")
    {
        $this->dbPrefix = $dbPrefix;
        if("" != $this->dbPrefix){
            $this->dbPrefix .= '_';
        }
    }

    /**
     * @param $account string, 账户名
     * @param $password string, 密码
     * @param int $autoLogin, 是否自动登陆
     * @return int, 0成功， 其他失败
     * @todo 加上登录错误计数验证码机制，加入邮箱登录支持
     */
    public function login($account, $password, $autoLogin = 0)
    { 
    }

    public function logout()
    {
        
    }
    /**
     * @param null $token, 如果有token，则使用token+数据库形式鉴权和自动登陆，否则，采用session形式鉴权
     * @return bool|string
     */
    public function checkLogin($token = null)
    {
         
    }

    public function checkLogout($token = null)
    {
        if(null == $token){
            if(null != Session::get('userid')){
                return false;
            }
        }else{

        }
        return true;
    }
}