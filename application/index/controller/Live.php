<?php
namespace app\index\controller;

use app\index\base\ControllerBase;
use think\Db;

class Live extends ControllerBase
{
   
    public function liveDetail()
    {
        return $this->view->fetch();
    }
    public function live()
    {
        return $this->view->fetch();
    }
    public function liveInvitation()
    {
        return $this->view->fetch();
    }
    public function liveInvitationList()
    {
        return $this->view->fetch();
    }
    public function liveRoom()
    {
        return $this->view->fetch();
    }

    public function newindex()
    {
        $result = array();
        $this->assign('banner',$result);
        echo 'Codingfly';exit;
        // return $this->view->fetch();
    }
}
