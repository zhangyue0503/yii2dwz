<?php
namespace zyblog\dwz\assets;


/**
 * DwzJuiPrintAsset AssetBundle
 * @since 1.0
 * zhangyue
 */
class DwzJuiPrintAsset extends BaseAsset
{
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $cssOptions = ['media'=>'print'];
    public $css = [
        'themes/css/print.css'
    ];
    public $js = [

    ];
    public $depends = [

    ];




}
