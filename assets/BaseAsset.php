<?php
namespace zyblog\dwz\assets;

use yii\web\AssetBundle;

/**
 * DwzJui AssetBundle
 * @since 1.0
 * zhangyue
 */
class BaseAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zyblog/yii2-dwz/dwz_jui-master';
    public $cssOptions = ['media'=>'screen'];
    public $publishOptions = [
        'except'=>[
//            '/*.html',           //试用完请打开注释，根目录下的示例不用去资源目录，这里配合left.php中直接显示dwz.js的演示
//            'demo/',               //一些没用的目录
            '*.txt',
            '*.md',
            '*.ico',
//            'xheditor/',         //过滤掉了xheditor，换成了kindeditor
            'kindeditor/examples/',//不要示例啦
            'doc/',
            'chart/test/'
        ]
    ];
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
    ];




}
