<?php
namespace terry;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class Mylog extends Component
{
	public  function log($info,$file='my.log'){
			if(is_array($info) || is_object($info)){
				$info = var_export($info,true);
			}
			//echo $info;exit;
			$logfile = Yii::$app->getRuntimePath() . '/logs/'.$file;
			$handle = @fopen($logfile,"a+");/*¸ùҪ¸üï²Îý		$contents = @fwrite($handle,$info."\n"); 
			@fclose($handle);
		
	}
 
}
