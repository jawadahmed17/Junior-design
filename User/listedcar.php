<?php
require('top.php');
$user_id=$_SESSION['USER_ID'];
$res=mysqli_query($con,"select * from car where user_id='$user_id'");
?>

<section class="car" id="car">
    <div class="box-container">
        <?php
          $get_car=get_car($con,'','','','',$user_id);
          foreach($get_car as $row){
        ?>
        <div class="box">
          <img src="<?php echo CAR_IMAGE_SITE_PATH.$row['image1']?>" alt="image1">
          <input type='hidden' name='car_id' value= <?php echo $row['id']?>>
          <?php 
             $car_id=$row['id'];
             $res1=mysqli_query($con,"select MAX(bid_amount) as highest,bider_name,bider_phone from bid where car_id='$car_id'");
             $biding_arr=array();
             while($biding=mysqli_fetch_assoc($res1)){
              $biding_arr[]=$biding;
             } 
          ?>
          <h3>Model Name : <?php echo $row['model_name']?></h3> 
          <h3>Model Number : <?php echo $row['model_number']?></h3> 
          <h3>Registration Number : <?php echo $row['registration_number']?></h3> 
          <h3>Brand Name : <?php echo $row['brand_name']?></h3> 
            <?php
               $condition_res=mysqli_query($con,"select name from car_condition where id={$row['condition']}");
               $condition_arr=array();
               while($condition=mysqli_fetch_assoc($condition_res)){
                  $condition_arr[]=$condition;
               } 
               foreach($condition_arr as $list){ ?>
               <h3>Condition : <?php echo $list['name'] ?></h3>
             <?php } ?>
          <h3>Description : <?php echo $row['description']?></h3> 
          <h3>Price : TK <?php echo $row['price']?></h3>
          <h3>Start Bid : TK <?php echo $row['start_bid']?></h3>
          <?php 
          foreach($biding_arr as $list){ ?>
          <h3>Highest Bid : TK <?php echo $list['highest']?></h3>
          <h3>Highest Bider Name : <?php echo $list['bider_name']?></h3>
          <h3>Highest Bider Contact : <?php echo $list['bider_phone']?></h3>
          <?php } ?>
        </div>
        <?php } ?> 
    </div>
</section>

<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

:root{
   --text-color:#FFFBEB;
   --steadfast:#495579;
   --boatswain:#263159;
   --azulado:#251749;
}

*{
   margin: 0;
   padding: 0;
   font-family: 'poppins',sans-serif;
   box-sizing: border-box;
   outline: none;
   border: none;
   scroll-padding-top: 1rem;
   scroll-behavior: smooth;
   list-style: none;
   text-decoration: none;
   text-transform: capitalize;
   transition: all .2s linear;   
}
section{
   display: flex;
   flex-wrap:wrap;
   width:100%;
   justify-content:center;
   align-items:center;
   margin:85px 0;
   justify-content:center;
   align-items: center;
   min-height: 70vh;
   overflow-x:hidden;
}
h3{
   color: #251749;
   margin: 20px;
}

.box{
   display: relative;
   width:400px;
   height:fit-content;
   margin:15px;
   box-sizing:border-box;
   float:left;
   justify-content: center;
   align-items: center;
   border-radius:20px;
   cursor:pointer;
   padding-top: 10px;
   box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
   transition:.4s;
   background:#f2f2f2; 
}
.box:hover{
   box-shadow:0 3px 6px rgba(0,0,0,0.16),0 3px 6px rgba(0,0,0,0.23);
   transform:translate(0px,-8px);
}
 img{
   width: 400px;;
   height:300px;   
}

</style>    