#Yii2 DWZ富文本后台框架

=======================================

##安装说明

composer安装：

```
php composer.phar require zyblog/yii2-dwz "*"
```

手动安装：

githup下载后，在vendor目录下创建zyblog目录，代码放进去，去yiisoft\extensions.php下方增加：

```
'zyblog/dwz' =>  array (
      'name' => 'zyblog/dwz',
      'version' => '1.0',
      'alias' =>
          array (
              '@zyblog/dwz' => $vendorDir . '/zyblog/dwz-jui',
          ),
  ),
```
##使用

配置文件中：

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/zyblog/dwz-jui/example-views'
             ],
         ],
    ],
],
```

或者直接把example-views里的内容拷贝到项目中替换原文件

代码里注释很清楚啦，有什么改的自己改改用就OK啦

##集成：

**dwz框架**

http://jui.org/

**kindeditor**

http://kindeditor.net/

**参考Yii 1.1: dwzinterface**

http://www.yiiframework.com/extension/dwzinterface/

**将xheditor换成了kindeditor，做成了widget**

仅添加了部分widget，最主要的是tab和pager分页这两个，方便大家使用，其他的效果自己看dwz的demo添加widget或者手写都行，除了这两个常用而且比较麻烦外，其他的我基本上都自己写，好控制一些~


##完整项目带测试页面的请移步 Yii2-zyblog-example

进行中....

