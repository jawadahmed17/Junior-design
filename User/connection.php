<?php
session_start();
$con=mysqli_connect("localhost","root","","cse299");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/localhost/CSE299/');
define('SITE_PATH','http://localhost/CSE299/');

define('CAR_IMAGE_SERVER_PATH',SERVER_PATH.'media/');
define('CAR_IMAGE_SITE_PATH',SITE_PATH.'media/');
?>