<?php
/**
 * 左侧菜单widget
 * 前端调用：\zyblog\dwz\widget\DwzNavTab::widget(["tabs" =>[您的menu数组，请参考本例]]);
 * 使用测试数据不传tabs
 * User: zhangyue
 * http://www.zyblog.net
 * Date: 2016/8/8
 * Time: 20:39
 */

namespace zyblog\dwz\widget;


use yii\base\Widget;

class DwzNavTab extends Widget
{
    public $tabs = [
        ['label' => 'DwzNavTab测试1', 'url' => '#', 'items' => [
            ['label' => '主页', 'url' => ['http://www.zyblog.net']],
            ['label' => '页面1', 'url' => ['http://www.jianshenchao.com']],
            ['label' => '页面2', 'url' => ['http://www.zyblog.net']]
        ]
        ],
        ['label' => 'DwzNavTab测试2', 'url' => '#', 'items' => [
            ['label' => '二级子分组1', 'url' => '#', 'items' => [
                ['label' => '子分组1页面1', 'url' => ['http://www.weibo.com']],
                ['label' => '子分组1页面2', 'url' => ['http://www.zyblog.net'],'external'=>true]
            ]
            ],
            ['label' => '二级子分组2', 'url' => '#', 'items' => [
                ['label' => '子分组2页面1', 'url' => ['http://www.jianshenchao.com'],'target'=>'_blank'],
                ['label' => '子分组2页面2', 'url' => ['http://www.zyblog.net'],'fresh'=>false],
                ['label' => '三级子分组1', 'url' => '#', 'items' => [
                    ['label' => '子分组3页面1', 'url' => ['http://www.jianshenchao.com'],'rel'=>'jianshencaho'],
                    ['label' => '四级子分组1', 'url' => '#', 'items' => [
                        ['label' => '子分组4页面1', 'url' => ['http://www.jianshenchao.com'],'rel'=>'jianshencaho2'],
                    ],
                    ]
                ],
                ]
            ],
            ],
        ]
        ],
        //treeCheck，默认为false，只有设置了ture才加上，treeFolder设为为false，不显示前面的小图标了，默认true，只有设置false的时候才不加上
        ['label' => 'DwzNavTab测试3', 'url' => '#','treeCheck'=>true,'treeFolder'=>false, 'items' => [
            ['label' => '二级子分组1', 'url' => '#', 'items' => [
                ['label' => '子分组1页面1', 'url' => ['http://www.weibo.com']],
                ['label' => '子分组1页面2', 'url' => ['http://www.zyblog.net'],'external'=>true]         //external iframe方式，默认为false，只有设置了ture才加上
            ]
            ],
            ['label' => '二级子分组2', 'url' => '#', 'items' => [
                ['label' => '子分组2页面1', 'url' => ['http://www.jianshenchao.com'],'target'=>'_blank'], //自定义target
                ['label' => '子分组2页面2', 'url' => ['http://www.zyblog.net'],'fresh'=>false],          //fresh ，true，只有设置了false才加上
                ['label' => '三级子分组1', 'url' => '#', 'items' => [
                    ['label' => '子分组2页面1', 'url' => ['http://www.jianshenchao.com'],'rel'=>'jianshencaho'], //自定义rel，默认直接用url
                ],
                ]
            ],
            ],
        ]
        ]
    ];


    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
        if($this->tabs!==null && is_array($this->tabs)){
            $html = $this->__readerNavTabs($this->tabs);
        }
        echo $html;
    }

    private function __readerNavTabs($tabs,$level=0){
        if($level==0) $html = '<div class="accordion" fillSpace="sidebar">';
        if (is_array($tabs) && count($tabs) > 0) {
            foreach ($tabs as $tab) {
                $reLevel = $level;
                $url = $tab['url'] && $tab['url'][0] && $tab['url'][0]!='#'?$tab['url'][0]:'';
                $target = "target='navTab'";
                $fresh = $external = $rel = '';
                if(isset($tab['external']) && is_bool($tab['external']) &&  $tab['external'] == true){
                    $external = "external='true'";
                }
                if($tab['rel'] && is_string($tab['rel'])){
                    $rel = "rel='".$tab['rel']."'";
                }else{
                    $rel = "rel='".$url."'";
                }
                if($tab['target'] && is_string($tab['target'])){
                    $target = "target='".$tab['target']."'";
                }
                if(isset($tab['fresh']) && is_bool($tab['fresh']) && $tab['fresh'] === false){
                    $fresh = "fresh='false'";
                }

                //第一级指定为Folder
                if (isset($tab['items']) && is_array($tab['items']) && count($tab['items'])>0) {
                    //分组目录
                    if($level==0){
                        $ckBox = '';
                        if(isset($tab['treeCheck']) && $tab['treeCheck']===true){
                            $ckBox = " treeCheck";
                        }
                        $tfBox = ' treeFolder';
                        if(isset($tab['treeFolder']) && $tab['treeFolder']===false){
                            $tfBox = "";
                        }

                        $html.='<div class="accordionHeader"><h2><span>Folder</span>'.$tab['label'].'</h2></div><div class="accordionContent"><ul class="tree '.$tfBox.$ckBox.'">';
                    }else{
                        if($url!=''){
                            $html.='<li><a href="'.$url.'" '.$target.' '.$fresh.'>'.$tab['label'].'</a><ul>';
                        }else{
                            $html.='<li><a>'.$tab['label'].'</a><ul>';
                        }

                    }
                    //进入递归
                    $html .= $this->__readerNavTabs($tab['items'],++$reLevel);
                    //分组目录线束
                    if($level==0){
                        $html.='</ul></div>';
                    }else{
                        $html.='</ul></li>';
                    }
                }else{
                    //链接项
                    $html .= "<li><a href='".$url."' $target $rel $external $fresh>".$tab['label']."</a></li>";
                }
            }
        }
        if($level==0) $html .='</div>';
        return $html;
    }


    //tabs测试数据打印出来的内容
    //以“mdmsoft\yii2-admin”返回的menu数据为基础另外增加了一些属性
    //external,fresh,target,rel,treeFolder,treeCheck
    //             Array
// (
//     [0] => Array
//         (
//             [label] => DwzNavTab测试1
//             [url] => #
//             [items] => Array
//                 (
//                     [0] => Array
//                         (
//                             [label] => 主页
//                             [url] => Array
//                                 (
//                                     [0] => http://www.zyblog.net
//                                 )

//                         )

//                     [1] => Array
//                         (
//                             [label] => 页面1
//                             [url] => Array
//                                 (
//                                     [0] => http://www.jianshenchao.com
//                                 )

//                         )

//                     [2] => Array
//                         (
//                             [label] => 页面2
//                             [url] => Array
//                                 (
//                                     [0] => http://www.zyblog.net
//                                 )

//                         )

//                 )

//         )

//     [1] => Array
//         (
//             [label] => DwzNavTab测试2
//             [url] => #
//             [items] => Array
//                 (
//                     [0] => Array
//                         (
//                             [label] => 二级子分组1
//                             [url] => #
//                             [items] => Array
//                                 (
//                                     [0] => Array
//                                         (
//                                             [label] => 子分组1页面1
//                                             [url] => Array
//                                                 (
//                                                     [0] => http://www.weibo.com
//                                                 )

//                                         )

//                                     [1] => Array
//                                         (
//                                             [label] => 子分组1页面2
//                                             [url] => Array
//                                                 (
//                                                     [0] => http://www.zyblog.net
//                                                 )

//                                             [external] => 1
//                                         )

//                                 )

//                         )

//                     [1] => Array
//                         (
//                             [label] => 二级子分组2
//                             [url] => #
//                             [items] => Array
//                                 (
//                                     [0] => Array
//                                         (
//                                             [label] => 子分组2页面1
//                                             [url] => Array
//                                                 (
//                                                     [0] => http://www.jianshenchao.com
//                                                 )

//                                             [target] => _blank
//                                         )

//                                     [1] => Array
//                                         (
//                                             [label] => 子分组2页面2
//                                             [url] => Array
//                                                 (
//                                                     [0] => http://www.zyblog.net
//                                                 )

//                                             [fresh] =>
//                                         )

//                                     [2] => Array
//                                         (
//                                             [label] => 三级子分组1
//                                             [url] => #
//                                             [items] => Array
//                                                 (
//                                                     [0] => Array
//                                                         (
//                                                             [label] => 子分组2页面1
//                                                             [url] => Array
//                                                                 (
//                                                                     [0] => http://www.jianshenchao.com
//                                                                 )

//                                                             [rel] => jianshencaho
//                                                         )

//                                                 )

//                                         )

//                                 )

//                         )

//                 )

//         )

// )


}