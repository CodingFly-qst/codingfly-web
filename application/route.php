<?php

return [ 
    '__pattern__' => [
        'name' => '\w+',
        'userid'=> '\d+',
        'cid'=>'\d+'
    ],
    '__alias__' => [
        'index' => 'index/index',       //分包首页
        'login' => 'index/login',       //分包登录
        'web' => 'index/web',           //自由码客首页
    ],
    '[live]' =>[                    //公众号直播
        '$' => ['index/live/index'],
        'newindex' => ['index/live/newindex'],
    ],
 
    
];