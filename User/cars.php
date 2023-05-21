<?php
require('top.php');
if(isset($_GET['id'])){
    $car_id=mysqli_real_escape_string($con,$_GET['id']);
    if($car_id>0){
        $get_car=get_car($con,'','',$car_id,'','');
    }
}
?>

<section class="car" id="car">
    <div class="box-container">
        <?php
          $get_car=get_car($con,'','','');
          foreach($get_car as $row){
        ?>
        <div class="box">
          <a href="carbid.php?id=<?php echo $row['id']?>">
           <img src="<?php echo CAR_IMAGE_SITE_PATH.$row['image1']?>" alt="image1">
          <h3><?php echo $row['model_name']?></h3> </a>
        
          <div class="price">TK <?php echo $row['price']?></div>
          <input type='hidden' name='price' value= <?php echo $row['price']?>>
          <?php if(isset($_SESSION['USER_LOGIN'])){
             echo "  <div class='button'>
                       <a href='carbid.php ? id={$row['id']}'>BID</a>
                    </div>";
               }else{
             echo '<h4>please login first</h4>';
            }?>
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
.box h3{
   text-align:center;
   color: #251749;
}
.box .price{
   text-align:center;
}
.box h4{
   text-align:center;
}
.box{
   width:fit-content;
   height:fit-content;
   margin:15px;
   box-sizing:border-box;
   float:left;
   text-align:center;
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
.box img{
   width:200px;
   height:200px;
   margin-left: 15px;
   margin-right: 15px;
   margin-top: 15px;
   text-align:center;
   display:block;
}

.button 
 {
    position: relative;
    background: var(--azulado);
    border:0;
    text-align: center;
    font-size: 15px;
    width:100%;
    padding:10px;
    outline:none;
    transition: 0.5s;
    margin-top:5px;
    border-bottom-right-radius:20px;
    border-bottom-left-radius:20px;
    cursor: pointer;
 }
 .button a{
   color: #FFF;
 }
 .button :hover
 {
   background: var(--clr);
    letter-spacing: 0.25em;
 }
</style>    