<?php

// session_start();

$db['db_host']="oyoschool.in";
$db['db_users']="yoschool_hasan";
$db['db_pass']="{B0ulP*za2t8";
$db['db_name']="yoschool_data";

foreach ($db as $key => $value) {

define(strtoupper($key), $value);

}

$connection=mysqli_connect(DB_HOST,DB_USERS,DB_PASS,DB_NAME);

if(!$connection){

die("is not connected".mysql_error($connection));

}

// $linking = "http://localhost/nearmediagnose";

 ?>