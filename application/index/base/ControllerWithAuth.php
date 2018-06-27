<?php
/**
 * Created by PhpStorm.
 * User: caohailiang
 * Date: 2017/3/29
 * Time: 15:26
 * 必须登录页面的基类控制器，增加未登录页面跳转
 */

namespace app\index\base;

use think\Config;
use think\Request;
use think\Url;

class ControllerWithAuth extends ControllerBase
{
    public function __construct(Request $request = null)
    {
        array_push($this->beforeActionList, "mustLogin");
        parent::__construct($request);
    }
}