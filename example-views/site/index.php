<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div id="navTab" class="tabsPage">
    <div class="tabsPageHeader">
        <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
            <ul class="navTab-tab">
                <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
            </ul>
        </div>
        <div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
        <div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
        <div class="tabsMore">more</div>
    </div>
    <ul class="tabsMoreList">
        <li><a href="javascript:;">我的主页</a></li>
    </ul>
    <div class="navTab-panel tabsPageContent layoutBox">
        <div class="page unitBox">
            <div class="accountInfo">
                <div class="alertInfo">
                    <p><a href="https://code.csdn.net/dwzteam/dwz_jui/tree/master/doc" target="_blank" style="line-height:19px"><span>DWZ框架使用手册</span></a></p>
                    <p><a href="http://pan.baidu.com/s/18Bb8Z" target="_blank" style="line-height:19px">DWZ框架开发视频教材</a></p>
                </div>
                <div class="right">
                    <p style="color:red">DWZ官方微博 <a href="http://weibo.com/dwzui" target="_blank">http://weibo.com/dwzui</a></p>
                </div>
                <p><span>DWZ富客户端框架</span></p>
                <p>DWZ官方微博:<a href="http://weibo.com/dwzui" target="_blank">http://weibo.com/dwzui</a></p>
            </div>
            <div class="pageFormContent" layoutH="80" style="margin-right:230px">


                <h2>DWZ系列开源项目:</h2>
                <div class="unit"><a href="https://git.oschina.net/dwzteam/dwz_jui" target="_blank">dwz富客户端框架 - jUI</a></div>
                <div class="unit"><a href="https://git.oschina.net/dwzteam/dwz_group" target="_blank">DWZ框架 + ThinkPHP 实现小组工作日志系统</a></div>
                <div class="unit"><a href="https://code.csdn.net/dwzteam/dwz_ssh2" target="_blank">dwz4j企业级Java Web快速开发框架(Hibernate+Spring+Struts2) + jUI整合应用</a></div>
                <div class="unit"><a href="https://code.csdn.net/dwzteam/dwz_springmvc" target="_blank">dwz4j企业级Java Web快速开发框架(Mybatis + SpringMVC) + jUI整合应用</a></div>
                <div class="unit"><a href="https://code.csdn.net/dwzteam/dwz_thinkphp" target="_blank">ThinkPHP + jUI整合应用</a></div>
                <div class="unit"><a href="https://code.csdn.net/dwzteam/dwz_zendframework" target="_blank">Zend Framework + jUI整合应用</a></div>
                <div class="unit"><a href="http://www.yiiframework.com/extension/dwzinterface/" target="_blank">YII + jUI整合应用</a></div>

                <a class="buttonActive" href="https://git.oschina.net/dwzteam/" target="_blank"><span>DWZ开源系列源码（oschina）</span></a>
                <a class="button" href="https://github.com/dwzteam/" target="_blank"><span>DWZ开源系列源码（github）</span></a>
                <a class="button" href="donation.html" target="dialog" height="400"><span style="color: red">捐赠 & DWZ学习视频</span></a>

                <div class="divider"></div>
                <h2>常见问题及解决:</h2>
<pre style="margin:5px;line-height:1.4em">
Error loading XML document: dwz.frag.xml
直接用IE打开index.html弹出一个对话框：Error loading XML document: dwz.frag.xml
原因：没有加载成功dwz.frag.xml。IE ajax laod本地文件有限制, 是ie安全级别的问题, 不是框架的问题。
解决方法：部署到apache 等 Web容器下。

如何精简JS：
	1) dwz.min.js替换全部dwz.*.js (注意：替换时下面dwz.regional.zh.js还需要引入
	2) demo index页面head中引入的几个第三方JS库也可以根据项目情况删除：
		js/jquery.cookie.js			用于cookie中纪录jUI主题theme，下次打开浏览器时纪录用户选择的主题风格
		js/jquery.validate.js		用于form表单验证
		js/jquery.bgiframe.js		用于解决IE6 dialog盖不住navTab页面中的select问题
		xheditor/xheditor-1.2.2.min.js	在线编辑器
		xheditor/xheditor_lang/zh-cn.js	在线编辑器国际化
		uploadify/scripts/jquery.uploadify.min.js	多文件上传
</pre>

                <div class="divider"></div>
                <h2>有偿服务(<span style="color:red;">公司培训，技术支持，解决使用jUI过程中出现的全部疑难问题</span>):</h2><br/>
<pre style="margin:5px;line-height:1.4em;">
合作电话：18600055221(杜权)
技术支持：17767167745(张慧华)
邮箱：support@jui.org
</pre>
                <a class="button" href="http://code.csdn.net/groups/2155" target="_blank"><span>DWZ讨论组</span></a>
            </div>

            <div style="width:230px;position: absolute;top:60px;right:0" layoutH="80">
            </div>
        </div>

    </div>
</div>