<?php
/**
 * 个人中心页面，控制台页面控制器
 */
namespace app\index\controller;

use app\index\base\ControllerWithAuth;

class home extends ControllerWithAuth
{
    public function index()
    {
        return "I am in home index";
    }
}