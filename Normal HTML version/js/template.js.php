<?php 
/*------------------------------------------------------------------------
# author    Marius Hogas
# copyright Copyright © 2012 hogash.com. All rights reserved.
# @license  Commercial http://themeforest.net/licenses/regular_extended
# Website   http://www.hogash.com
-------------------------------------------------------------------------*/

/* initialize ob_gzhandler to send and compress data */
ob_start ("ob_gzhandler");
/* initialize compress function for whitespace removal */
ob_start("compress");
/* required header info and character set */
header("Content-type: application/x-javascript");
/* cache control to process */
header("Cache-Control: must-revalidate");
/* duration of cached content (1 hour) */
$offset = 60 * 60 ;
/* expiration header format */
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s",time() + $offset) . " GMT";
/* send cache expiration header to broswer */
header($ExpStr);

$files = explode('-',$_REQUEST['src']);
foreach($files as $file){
	require($file.'.js');
}
?>