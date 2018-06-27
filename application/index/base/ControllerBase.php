<?php
/**
 * Created by PhpStorm.
 * User: caohailiang
 * Date: 2017/4/10
 * Time: 20:22
 * 前端基类控制器，完成登录状态检测和自动登录
 */

namespace app\index\base;

use ethink\acl\Auth;
use ethink\acl\Auth2;
use ethink\mvc\BaseController;
use think\Config;
use think\Cookie;
use think\Db;
use think\Request;
use think\Session;
use think\Url;

class ControllerBase extends BaseController
{
    protected $auth;
    protected $isLogin;
    protected $fullUrl;
    protected $isMicroMessenger = false;
    protected $beforeActionList = ['checkServerState', 'checkMicro','checkLogin'];

    public function __construct(Request $request = null)
    {
        $this->isLogin = false;
        $this->auth = new Auth2(Config::get('api')['auth']);
        $this->fullUrl = Config::get('common')['scheme'].'://'.Config::get('common')['host'].$_SERVER["REQUEST_URI"];
        parent::__construct($request);
    }

    public function checkServerState(){
        if(0 === Config::get('common')['server_state'] && $this->request->isGet()){
            $url = Config::get('common')['scheme'].'://'.Config::get('common')['host'];
            $this->redirect($url."/state/maintenance");
        }
    }

    protected function checkMicro()
    {
        
    }

    /**
     * 检测登录状态（完成自动登陆），并查出公共导航栏所需信息
     */
    protected function checkLogin()
    {
         
    }

    /**
     * 前端空页面
     */
    public function _empty()
    {
        Url::root(Config::get('common.url_root'));
        $url = Config::get('common')['scheme'].'://'.Config::get('common')['host'].
            Url::build('index/index') ;
        $this->redirect($url);
    }

    protected function mustLogin()
    {
       
    }
    
    protected function mustLiveLogin()
    {
      
    }
  

    public function loginStatus(){
        return $this->isLogin;
    }
}