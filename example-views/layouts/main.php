<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

zyblog\dwz\assets\DwzJuiIEAsset::register($this);
zyblog\dwz\assets\DwzJuiPrintAsset::register($this);
zyblog\dwz\assets\DwzJuiLtIE9Asset::register($this);
//zyblog\dwz\assets\DwzJuiGteIE9Asset::register($this);

zyblog\dwz\assets\DwzJuiAsset::register($this);
$dwzAssetsUrl = $this->getAssetManager()->getPublishedUrl('@vendor/zyblog/dwz-jui/dwz_jui-master');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简单实用国产jQuery UI框架 - DWZ富客户端框架(J-UI.com)</title>
<?= Html::csrfMetaTags() ?>
<?php $this->head() ?>
	<!--[if gte IE 9]><!--><script src="<?=$dwzAssetsUrl?>/js/jquery-2.1.4.min.js" type="text/javascript"></script><!--<![endif]-->
<script type="text/javascript">
$(function(){
	DWZ.init("<?php echo $dwzAssetsUrl;?>/dwz.frag.xml", {
		loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		keys: {statusCode:"statusCode", message:"message"}, //【可选】
		ui:{hideMode:'offsets'}, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"<?=$dwzAssetsUrl?>/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});
</script>
</head>
<body>
<?php $this->beginBody() ?>
	<div id="layout">
		<?= $this->render('header.php',['dwzAssetsUrl'=>$dwzAssetsUrl]) ?>
		<?= $this->render('left.php',['dwzAssetsUrl'=>$dwzAssetsUrl]) ?>
		<div id="container">
			<?= $content ?>
		</div>
	</div>
	<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">DWZ团队</a> 京ICP备15053290号-2</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>