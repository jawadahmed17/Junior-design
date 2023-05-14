<?php
require('top.php');
$category_id=mysqli_real_escape_string($con,$_GET['ID']);

?>

<section class="car" id="car">
    <div class="box-container">
        <?php
          $get_car=get_car($con,'',$category_id,'','1');
          foreach($get_car as $row){
        ?>
        <div class="box">
          <div class="content">
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
            }
           ?>
          </div>
          
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
   margin:80px 0px;
   overflow-x:hidden;
   width: 100%;
  }
  .box{
   width: fit-content;
   margin:20px;
   box-sizing: border-box;
   border-radius:20px;
   float: left;
   text-align: center;
   text-decoration: none;
   cursor:pointer;
   padding-top: 5px;
   box-shadow: 0 14px 28px rgba(0,0,0,0.25),
    0 10px 10px rgba(0,0,0,0.22) ;
   transition: .4s;
   background:#f2f2f2; 
  }
  .box:hover{
    box-shadow:0 3px 6px rgba(0,0,0,0.16),0 3px 6px rgba(0,0,0,0.23);
    transform:translate(0px,-8px);
  }
  img{
   width:200px;
   height:200px;
   margin-left: 15px;
   margin-right: 15px;
   margin-top: 15px;
   text-align:center;
   display: block;
  }

  h3{
    text-align:center;
  }
   .price{
   text-align:center;
   }
   h4{
   text-align:center;
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
  .button:hover
  {
     background: var(--azulado);
     letter-spacing: 0.25em;
   }
</style>    