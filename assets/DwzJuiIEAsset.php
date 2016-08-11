<?php
namespace zyblog\dwz\assets;


/**
 * DwzJuiIEAsset AssetBundle
 * @since 0.1
 * IE Hack文件加载
 */
class DwzJuiIEAsset extends BaseAsset
{
    public $cssOptions = ['condition' => 'IE'];
    public $css = [
        'themes/css/ieHack.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];


}
