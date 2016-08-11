#Yii2 DWZ富文本后台框架

=======================================

##安装说明

composer安装：

composer

手动安装：

githup下载后，放入vendor目录，去yiisoft\extensions.php下方增加：

'zyblog/dwz' =>  array (
      'name' => 'zyblog/dwz',
      'version' => '1.0',
      'alias' =>
          array (
              '@zyblog/dwz' => $vendorDir . '/zyblog/dwz-jui',
          ),
  ),

##集成：

**dwz框架**

http://jui.org/

**kindeditor**

http://kindeditor.net/

##参考Yii 1.1: dwzinterface

http://www.yiiframework.com/extension/dwzinterface/

**将xheditor换成了kindeditor，做成了widget**


#完整项目带测试页面的请移步 Yii2-dwz-bjui-example，两套后端模板都套好的

