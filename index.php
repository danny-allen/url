<?php
	
//autoloader
require_once('vendor/autoload.php');

//what are we using?
use Dao\Url;

try{

	//find the current URL
	$url = new Url();
	$url->get(); //http://url.localhost:9000/test?this=that&something=else

	//get components individually
	$url->get('path');		// /test (string)
	$url->get('scheme'); 	// http (string)
	$url->get('port'); 		// 9000 (int)
	$url->get('host');		// url.localhost (string)
	$url->get('query');		// this=that&something=else (string)

}catch(Exception $e){
	echo $e->getMessage();
}