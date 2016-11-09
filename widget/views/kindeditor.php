<?php
/**
 * KindEditor Widget View
 * User: zhangyue
 * http://www.zyblog.net
 * Date: 2016/8/4
 * Time: 22:00
 */
/* @var $this \yii\web\View */
$assetsUrl = $this->getAssetManager()->getPublishedUrl('@vendor/zyblog/yii2-dwz/dwz_jui-master');
?>
<textarea name="<?= $ke_params['name']?>" id="<?= $ke_params['name']?>" class="kindeditor"><?= $ke_params['content']?></textarea>
<script type="text/javascript">
    var kindeditorpath = "<?= $assetsUrl?>/kindeditor/";
    var kindeditorjspath = "<?= $assetsUrl?>/kindeditor/kindeditor-min.js";
    var ke<?= $ke_params['name']?>;
    function kindeditorcreate<?= $ke_params['name']?>() {
        KindEditor.basePath = kindeditorpath;
        ke<?= $ke_params['name']?> = KindEditor.create('#<?= $ke_params['name']?>',{
            //zhangyue 2016.8.16
            //上传这两个属性直接get资源文件使用kindeditor默认的文件上传示例进行上传，建议自己写一套后修改此处路径
            uploadJson: '<?= $assetsUrl?>/kindeditor/php/upload_json.php?uploadPath=<?= $ke_params['uploadPath']?>&urlPath=<?= $ke_params['urlPath']?>',
            fileManagerJson: '<?= $assetsUrl?>/kindeditor/php/file_manager_json.php?uploadPath=<?= $ke_params['uploadPath']?>&urlPath=<?= $ke_params['urlPath']?>',
            allowFileManager: <?= $ke_params['allowFileManager']?>,
            resizeType:<?= $ke_params['resizeType']?>,
            width:"<?= $ke_params['width']?>",
            minWidth:"<?= $ke_params['width']?>",
            height:"<?= $ke_params['height']?>",
            urlType : "domain",   //显示完整url
            afterChange : function(){this.sync();},
            <?php if(is_array($ke_params['items']) && count($ke_params['items']) > 0){?>
            items:<?= json_encode($ke_params['items'])?>
            <?php }?>
        });
    };
</script>

