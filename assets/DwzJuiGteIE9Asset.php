<?php
namespace zyblog\dwz\assets;


/**
 * DwzJuiGteIE9Asset AssetBundle
 * @since 0.1
 * IE Hack文件加载
 */
class DwzJuiGteIE9Asset extends BaseAsset
{
    public $jsOptions = ['condition' => 'gte IE9','position' => \yii\web\View::POS_HEAD];
    public $css = [
    ];
    public $js = [
        'js/jquery-2.1.4.min.js'
    ];
    public $depends = [
    ];


}
