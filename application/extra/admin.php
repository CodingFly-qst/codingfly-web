<?php
/**
 * Created by PhpStorm.
 * User: caohailiang
 * Date: 2017/5/2
 * Time: 18:35
 */
return [
    'auth'=>[
        'namespace' => 'admin',//后台命名空间及表前缀
        'access_expires'=>1800,
        'remember_expires'=>864000,/*10天*/
        /*'redis'=>[
            'host'      =>  '192.168.100.6' ,
            'port'      =>  6379 ,
            'database'  =>  15
        ]*/
    ],
    'page_size'=>10
];