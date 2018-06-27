<?php
namespace app\index\controller;


use ethink\mvc\BaseController;

class Emptypage extends BaseController
{
    public function index()
    {
        return $this->view->fetch();
    }

    public function maintenance()
    {
        return $this->view->fetch();
    }
}
