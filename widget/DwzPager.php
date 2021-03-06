<?php
/**
 * 分页widget
 * 前端调用：\zyblog\dwz\widget\DwzPager::widget();
 * User: zhangyue
 * http://www.zyblog.net
 * Date: 2016/8/16
 * Time: 20:39
 */

namespace zyblog\dwz\widget;

use yii\base\Widget;
use yii\helpers\Html;

class DwzPager extends Widget
{
    public $totalCount = 0;
    public $numPerPage = 20;
    public $pageNumShown = 10;
    public $currentPage = 1;
    public $pages = [20=>20,50=>50,100=>100,200=>200];
    public $rel = '';
    public $targetType = 'navTab';

    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub


        echo '<div class="pages">';
        echo '<span>显示</span>';
        echo Html::dropDownList('numPerPage',$this->numPerPage,$this->pages,['onchange'=>$this->targetType.'PageBreak({numPerPage:this.value}'.($this->rel!=''?",'".$this->rel."'":'').')']);
        echo '<span>条，共'.$this->totalCount.'条</span>';
        echo '</div>';


        echo '<div class="pagination" rel=\''.$this->rel.'\' targetType="'.$this->targetType.'" totalCount="'.$this->totalCount.'" numPerPage="'.$this->numPerPage.'" pageNumShown="'.$this->pageNumShown.'" currentPage="'.$this->currentPage.'"></div>';
    }

}