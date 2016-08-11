<?php
namespace zyblog\dwz\assets;


/**
 * DwzJuiIEAsset AssetBundle
 * @since 0.1
 * IE Hack文件加载
 */
class DwzJuiLtIE9Asset extends BaseAsset
{
    public $jsOptions = ['condition' => 'lt IE9','position' => \yii\web\View::POS_END];
    public $css = [
    ];
    public $js = [
        'js/speedup.js',
        'js/jquery-1.11.3.min.js'
    ];
    public $depends = [
    ];


}
