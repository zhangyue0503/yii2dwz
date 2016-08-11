<?php
namespace zyblog\dwz\assets;


/**
 * DwzJui AssetBundle
 * @since 1.0
 * zhangyue
 */
class DwzJuiAsset extends BaseAsset
{
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $cssOptions = ['media'=>'screen'];
    public $css = [
        'themes/default/style.css',
        'themes/css/core.css',
        'uploadify/css/uploadify.css',
        'kindeditor/themes/default/default.css'
    ];
    public $js = [


        'js/jquery.cookie.js',
        'js/jquery.validate.js',
        'js/jquery.bgiframe.js',

        //原版用的是xheditor,换成kindeditor
//        'xheditor/xheditor-1.2.2.min.js',
//        'xheditor/xheditor_lang/zh-cn.js',


        'uploadify/scripts/jquery.uploadify.js',

        //svg图表  supports Firefox 3.0+, Safari 3.0+, Chrome 5.0+, Opera 9.5+ and Internet Explorer 6.0+
        'chart/raphael.js',
        'chart/g.raphael.js',
        'chart/g.bar.js',
        'chart/g.line.js',
        'chart/g.pie.js',
        'chart/g.dot.js',
        'chart/g.dot.js',
        'http://api.map.baidu.com/api?v=2.0&ak=6PYkS1eDz5pMnyfO0jvBNE0F',
        'http://api.map.baidu.com/library/Heatmap/2.0/src/Heatmap_min.js',

        'bin/dwz.min.js',
        'js/dwz.regional.zh.js',
        'kindeditor/kindeditor-min.js',
        'kindeditor/lang/zh_CN.js'
    ];
    public $depends = [

    ];




}
