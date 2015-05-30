<?php
/** 
* Loading index file for apache or nginx
/**/

try{
	require '../vendor/autoload.php';

	if(file_exists("../conf/settings.php")){
		require_once("../conf/settings.php");
	}elseif(file_exists("settings.php")){
		require_once("settings.php");
	}else{
		\AsyncWeb\Frontend\SetupSettings::show();
	}

	\AsyncWeb\Frontend\BlockManagement::renderWeb();
}catch(\Exception $exc){
	echo "Exception: ".$exc->getMessage();
}
?>