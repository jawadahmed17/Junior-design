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

#fuction for fetching data
function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

#function for geting car data from database
function get_car($con,$limit='',$cat_id='',$car_id='',$condition_id='',$user_id=''){
	$sql="select car.*,category.type_name from car,category where car.status=1";
	if($cat_id!=''){
		$sql.=" and car.type=$cat_id ";
	}
	if($car_id!=''){
		$sql.=" and car.id=$car_id ";
	}
	if($condition_id!=''){
		$sql.=" and car.condition=$condition_id ";
	}
	if($user_id!=''){
		$sql.=" and car.user_id=$user_id ";
	}
	$sql.=" and car.type=category.id ";
	$sql.=" order by car.id desc";
	if($limit!='')
	{
		$sql.=" limit $limit";
	}
    
	#executing the final sql query
	$res=mysqli_query($con,$sql);
	#declaring array variable
	$data=array();
	#fetching data from database
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}
		
?>

