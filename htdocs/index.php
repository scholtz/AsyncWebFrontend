<?php
/** 
* Loading index file for apache or nginx
/**/
use AsyncWeb\Frontend\BlockManagement;
use AsyncWeb\Frontend\SetupSettings;

try{
	require '../vendor/autoload.php';

	if(file_exists("settings.php")){
		require_once("settings.php");
	}else{
		AsyncWeb\Frontend\SetupSettings::show();
	}


	BlockManagement::renderWeb();
}catch(\Exception $exc){
	echo "Exception: ".$exc->getMessage();
}
?>