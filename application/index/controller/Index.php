<?php
namespace app\index\controller;

use app\index\base\ControllerBase;
use app\model\UserInfo;
use think\Config;

class Index extends ControllerBase
{
    public function index()
    {
        return $this->view->fetch();
    }

    public function test()
    {
    }

    public function upload()
    {
        return $this->responseJson();
    }
    public function enternote()
    {
        return $this->view->fetch();
    }
    public function releasenote()
    {
        return $this->view->fetch();
    }
}
