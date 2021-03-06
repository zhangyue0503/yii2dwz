<?php
/**
 * KindEditor小部件
 * 已带一些基本的属性，大家可以自由添加，不过应该够用啦
 * 前端调用\zyblog\dwz\widget\KindEditorWidget::widget()
 * 也可用于其他框架中
 * User: zhangyue
 * http://www.zyblog.net
 * Date: 2016/8/4
 * Time: 21:16
 */

namespace zyblog\dwz\widget;


use yii\base\Widget;

class KindEditorWidget extends Widget
{
    private $ke_params;
    public $uploadPath;  //上传文件目录
    public $urlPath;
    public $allowFileManager;
    public $resizeType;
    public $width;
    public $height;
    public $items;       //items设置，请参照kindeditor文档，例：["source","|","undo"]
    public $name;
    public $content;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->ke_params['uploadPath'] = $this->uploadPath===null || !$this->uploadPath ? "../../../../upload" : $this->uploadPath;
        $this->ke_params['urlPath'] = $this->urlPath===null || !$this->urlPath ? '/upload': $this->urlPath;
        $this->ke_params['allowFileManager'] = $this->allowFileManager===null || !is_bool($this->allowFileManager) || $this->allowFileManager ? 1 : 0;
        $this->ke_params['resizeType'] = $this->resizeType===null || !is_bool($this->resizeType) || $this->resizeType ? 1 : 0;
        $this->ke_params['width'] = $this->width===null || !$this->width ? "600px" : $this->width;
        $this->ke_params['height'] = $this->height===null || !$this->height ? "200px" : $this->height;
        $this->ke_params['items'] = $this->items===null || !is_array($this->items) ? [] : $this->items;
        $this->ke_params['name'] = $this->name===null || !($this->name) ? "content" : $this->name;
        $this->ke_params['content'] = $this->content===null || !($this->name) ? "" : $this->content;
    }

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        return $this->render('kindeditor',['ke_params'=>$this->ke_params]);
    }

}