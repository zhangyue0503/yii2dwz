<?php
namespace zyblog\dwz\helpers;

use yii\base\Model;
use yii\helpers\Html;

/**
 * 参考Yii 1.1: dwzinterface
 * http://www.yiiframework.com/extension/dwzinterface/
 * Class DwzHelper
 * @package zyblog\dwz\helpers
 */
class DwzHelper
{
	static public function ok($message,$navTabid='',$rel='',$statusCode='200',$callbackType='closeCurrent',$forwardUrl='',$confirmMsg=''){
		echo "
		<script type='text/javascript'>
			var statusCode='$statusCode';
			var message='$message';
			var navTabId='$navTabid';
			var rel='$rel';
			var callbackType='$callbackType';
			var forwardUrl='$forwardUrl';
			var confirmMsg='$confirmMsg';

			var response = {statusCode:statusCode,
				message:message,
				navTabId:navTabId,
				rel:rel,
				callbackType:callbackType,
				forwardUrl:forwardUrl,
				confirmMsg:confirmMsg,
			};
			if(window.parent.donecallback) window.parent.donecallback(response);
		</script>
		";
		\Yii::$app->end();
	}
	
	static public function jsonOk($message,$navTabid='',$rel='',$statusCode='200',$callbackType='closeCurrent',$forwardUrl='',$confirmMsg=''){
		if(strpos($navTabid, 'dialog_') !== false) {//刷新dialog
			$dialogId = str_replace('dialog_', '', $navTabid);
			$navTabid = '';
		}
		echo json_encode(
						array(
							'statusCode'=>$statusCode, 'message'=>$message, 'navTabId'=>$navTabid,
							'rel'=>$rel, 'dialogId'=>$dialogId, 'callbackType'=>$callbackType, 'forwardUrl'=>$forwardUrl
						)
				);
		\Yii::$app->end();
	}
	
	static public function jsonError($message,$navTabid='',$rel='',$statusCode='300',$callbackType='closeCurrent',$forwardUrl='',$confirmMsg=''){
		echo json_encode(
				array(
						'statusCode'=>$statusCode, 'message'=>$message, 'navTabId'=>$navTabid,
						'rel'=>$rel, 'callbackType'=>$callbackType, 'forwardUrl'=>$forwardUrl
				)
		);
		\Yii::$app->end();
	}
	
	static public function error($message,$navTabid='',$rel='',$statusCode='300',$callbackType='closeCurrent',$forwardUrl='',$confirmMsg=''){

		if ($message instanceof Model){
			if ($message->hasErrors()){
				$message=preg_replace("/\n/",'',Html::errorSummary($message));
			}else
				$message='';
		}

		echo "
		<script type='text/javascript'>
			var statusCode='$statusCode';
			var message='$message';
			var navTabId='$navTabid';
			var rel='$rel';
			var callbackType='$callbackType';
			var forwardUrl='$forwardUrl';
			var confirmMsg='$confirmMsg';

			var response = {statusCode:statusCode,
				message:message,
				navTabId:navTabId,
				rel:rel,
				callbackType:callbackType,
				forwardUrl:forwardUrl,
				confirmMsg:confirmMsg,
			};
			if(window.parent.donecallback) window.parent.donecallback(response);
		</script>
		";
		\Yii::$app->end();
	}
}