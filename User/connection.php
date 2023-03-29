<?php
session_start();
$con=mysqli_connect("localhost","root","","cse299");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/localhost/CSE299/');
define('SITE_PATH','http://localhost/CSE299/');

?>