<div id="leftside">
    <div id="sidebar_s">
        <div class="collapse">
            <div class="toggleCollapse"><div></div></div>
        </div>
    </div>
    <div id="sidebar">
        <div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

        <div class="accordion" fillSpace="sidebar">

            <?= \zyblog\dwz\widget\DwzNavTab::widget(["tabs" => [['label' => 'DwzNavTab测试1', 'url' => '#', 'items' => [
                ['label' => '主页', 'url' => ['http://www.zyblog.net']],
                ['label' => 'kindeditor', 'url' => [urldecode(\yii\helpers\Url::toRoute('example/kind-editor'))]],
                ['label' => 'panel', 'url' => [urldecode(\yii\helpers\Url::toRoute('example/panel'))]],
                ['label' => 'pager', 'url' => [urldecode(\yii\helpers\Url::toRoute('example/pager'))]]
            ]
            ]]]); ?>

            <div class="accordionHeader">
                <h2><span>Folder</span>界面组件</h2>
            </div>
            <div class="accordionContent">
                <ul class="tree treeFolder">
                    <li><a href="<?= $dwzAssetsUrl?>/tabsPage.html" target="navTab">主框架面板</a>
                        <ul>
                            <li><a href="<?= $dwzAssetsUrl?>/main.html" target="navTab" rel="main">我的主页</a></li>
                            <li><a href="<?= urldecode(\yii\helpers\Url::toRoute('example/kind-editor')) ?>" target="navTab" rel="kindeditor">KindEditor</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/row-col.html" target="navTab" rel="row-col">栅格系统(Bootstrap)</a></li>
                            <li><a href="http://www.baidu.com" target="navTab" rel="page1">页面一(外部链接)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/baidu_map_iframe.html" target="navTab" rel="bmap" external="true" title="需要设置external属性为true">地图(external iframe方式)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/baidu_map.html" target="navTab" rel="bmap">地图(直接嵌入方式)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_page1.html" target="navTab" rel="page1" fresh="false">替换页面一</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_page2.html" target="navTab" rel="page2">页面二</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_page4.html" target="navTab" rel="page3" title="页面三（自定义标签名）">页面三</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_page4.html" target="navTab" rel="page4" fresh="false">测试页面(fresh="false")</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_editor.html" target="navTab">表单提交会话超时</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/common/ajaxTimeout.html" target="navTab">navTab会话超时</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/common/ajaxTimeout.html" target="dialog">dialog会话超时</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/index_menu.html" target="_blank">横向导航条</a></li>
                        </ul>
                    </li>

                    <li><a>常用组件</a>
                        <ul>
                            <li><a href="<?= $dwzAssetsUrl?>/w_panel.html" target="navTab" rel="w_panel">面板</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_tabs.html" target="navTab" rel="w_tabs">选项卡面板</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_dialog.html" target="navTab" rel="w_dialog">弹出窗口</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_alert.html" target="navTab" rel="w_alert">提示窗口</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_list.html" target="navTab" rel="w_list">CSS表格容器</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_page1.html" target="navTab" rel="w_table">表格容器</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_removeSelected.html" target="navTab" rel="w_table">表格数据库排序+批量删除</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_tree.html" target="navTab" rel="w_tree">树形菜单</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_accordion.html" target="navTab" rel="w_accordion">滑动菜单</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_editor.html" target="navTab" rel="w_editor">编辑器</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_datepicker.html" target="navTab" rel="w_datepicker">日期控件</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/database/db_widget.html" target="navTab" rel="db">suggest+lookup+主从结构</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/database/treeBringBack.html" target="navTab" rel="db">tree查找带回</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/sortDrag/1.html" target="navTab" rel="sortDrag">单个sortDrag示例</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/sortDrag/2.html" target="navTab" rel="sortDrag">多个sortDrag示例</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/sortDrag/form.html" target="navTab" rel="sortDrag">可拖动表单示例</a></li>
                        </ul>
                    </li>

                    <li><a>表单组件</a>
                        <ul>
                            <li><a href="<?= $dwzAssetsUrl?>/w_validation.html" target="navTab" rel="w_validation">表单验证</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_button.html" target="navTab" rel="w_button">按钮</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_textInput.html" target="navTab" rel="w_textInput">文本框/文本域</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_combox.html" target="navTab" rel="w_combox">下拉菜单</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_checkbox.html" target="navTab" rel="w_checkbox">多选框/单选框</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo_upload.html" target="navTab" rel="demo_upload">iframeCallback表单提交</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/w_uploadify.html" target="navTab" rel="w_uploadify">uploadify多文件上传</a></li>
                        </ul>
                    </li>
                    <li><a>组合应用</a>
                        <ul>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/pagination/layout1.html" target="navTab" rel="pagination1">局部刷新分页1</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/demo/pagination/layout2.html" target="navTab" rel="pagination2">局部刷新分页2</a></li>
                        </ul>
                    </li>
                    <li><a>图表</a>
                        <ul>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/barchart.html" target="navTab" rel="chart">柱状图(垂直)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/hbarchart.html" target="navTab" rel="chart">柱状图(水平)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/linechart.html" target="navTab" rel="chart">折线图</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/linechart2.html" target="navTab" rel="chart">曲线图</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/linechart3.html" target="navTab" rel="chart">曲线图(自定义X坐标)</a></li>
                            <li><a href="<?= $dwzAssetsUrl?>/chart/test/piechart.html" target="navTab" rel="chart">饼图</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= $dwzAssetsUrl?>/dwz.frag.xml" target="navTab" external="true">dwz.frag.xml</a></li>
                </ul>
            </div>
            <div class="accordionHeader">
                <h2><span>Folder</span>典型页面</h2>
            </div>
            <div class="accordionContent">
                <ul class="tree treeFolder treeCheck">
                    <li><a href="<?= $dwzAssetsUrl?>/demo_page1.html" target="navTab" rel="demo_page1">查询我的客户</a></li>
                    <li><a href="<?= $dwzAssetsUrl?>/demo_page1.html" target="navTab" rel="demo_page2">表单查询页面</a></li>
                    <li><a href="<?= $dwzAssetsUrl?>/demo_page4.html" target="navTab" rel="demo_page4">表单录入页面</a></li>
                    <li><a href="<?= $dwzAssetsUrl?>/demo_page5.html" target="navTab" rel="demo_page5">有文本输入的表单</a></li>
                    <li><a href="javascript:;">有提示的表单输入页面</a>
                        <ul>
                            <li><a href="javascript:;">页面一</a></li>
                            <li><a href="javascript:;">页面二</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">选项卡和图形的页面</a>
                        <ul>
                            <li><a href="javascript:;">页面一</a></li>
                            <li><a href="javascript:;">页面二</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">选项卡和图形切换的页面</a></li>
                    <li><a href="javascript:;">左右两个互动的页面</a></li>
                    <li><a href="javascript:;">列表输入的页面</a></li>
                    <li><a href="javascript:;">双层栏目列表的页面</a></li>
                </ul>
            </div>
            <div class="accordionHeader">
                <h2><span>Folder</span>流程演示</h2>
            </div>
            <div class="accordionContent">
                <ul class="tree">
                    <li><a href="<?= $dwzAssetsUrl?>/newPage1.html" target="dialog" rel="dlg_page">列表</a></li>
                    <li><a href="<?= $dwzAssetsUrl?>/newPage1.html" target="dialog" rel="dlg_page2">列表</a></li>
                </ul>
        </div>
        </div>
    </div>
</div>