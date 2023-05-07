<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_car($con,$limit='',$cat_id='',$car_id=''){
	$sql="select car.*,category.type_name from car,category where car.status=1";
	if($cat_id!=''){
		$sql.=" and car.type=$cat_id ";
	}
	if($car_id!=''){
		$sql.=" and car.id=$car_id ";
	}
	$sql.=" and car.type=category.id ";
	$sql.=" order by car.id desc";
	if($limit!='')
	{
		$sql.=" limit $limit";
	}

	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
	
	
?>

