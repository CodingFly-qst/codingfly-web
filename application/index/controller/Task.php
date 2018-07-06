<?php
namespace app\index\controller;

use app\index\base\ControllerBase;

class Task extends ControllerBase
{
    public function index($user)
    {
        return $this->view->fetch();
    }
    public function task($user)
    {
        return view();
    }
    public function taskAdd($user)
    {
        return view();
    }
    public function taskDetail($user)
    {
        return view();
    }
    public function taskStatus($user)
    {
        return view();
    }
}
