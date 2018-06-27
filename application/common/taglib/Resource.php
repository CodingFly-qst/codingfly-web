<?php
/**
 * Created by PhpStorm.
 * User: caohailiang
 * Date: 2017/4/12
 * Time: 14:57
 */

namespace app\common\taglib;


use think\Config;
use think\template\TagLib;

class Resource extends TagLib
{
    protected $tags = [
        'path' => ['attr' => 'src', 'close' => 0],
    ];

    public function tagPath($tag)
    {
        $src = $tag['src'] ? $tag['src'] : "";
        $src = Config::get('common.url_root') . $src;
        $parse = '<?php ';
        $parse .= 'echo "'. $src  .'";';
        $parse .= ' ?>';
        return $parse;
    }
}