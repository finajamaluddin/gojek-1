<?php
include "db/conf.php";
//include "plugin/security.php";
$regld = isset($POST['regld']) ?
$_POST['regld'] : " ";

if( !empty($regld))
{
	$cdate = date("Y-m-d H:i:s");
	$sql ="UPDATE android_gcm_devices SET last_update_date = '$scdate', active = '0' WHERE devices_id = '$regld'";
	mysql_query($sql) or die("NG#2:".mysql_error());
	echo "OK";
}
else
{
	echo"NG";
}
