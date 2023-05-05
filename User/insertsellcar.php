<?php
require('connection.php');

$user_id=get_safe_value($con,$_SESSION['USER_ID']);
$category_id=$_POST['category_id'];
$model_name=$_POST['model_name'];
$model_number=$_POST['model_number'];
$registration_number=$_POST['registration_number'];
$brand_name=$_POST['brand_name'];
$description=$_POST['description'];
$condition_id=$_POST['condition_id'];
$price=$_POST['price'];

if(isset($_POST['submit'])){
  $_SESSION['car'][]=array('category_id'=>$category_id,
                           'model_name'=>$model_name,
                           $model_number=$_POST['model_number'];
                           $registration_number=$_POST['registration_number'];
                           $brand_name=$_POST['brand_name'];
                          $description=$_POST['description'];
                          $condition_id=$_POST['condition_id'];
                          $price=$_POST['price'];')
}
?>