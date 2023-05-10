<?php
require('top.php');
$car_id=mysqli_real_escape_string($con,$_GET['id']);

$bider_id=$_SESSION['USER_ID'];
$owner_id='';
$starting_bid='';
$bid_amount='';

if(isset($_POST['submit'])){
  $owner_id=get_safe_value($con,$_POST['owner']);
  $starting_bid=get_safe_value($con,$_POST['starting_bid']);
  $bid_amount=get_safe_value($con,$_POST['bid']);
  mysqli_query($con,"insert into `bid`(`car_id`,`owner_id`,`bider_id`,`starting_bid`,`bid_amount`)
                values ('$car_id','$owner_id','$bider_id','$starting_bid','$bid_amount')");
                die();
              }

?>
<section>
    <div class="container1 flex">
      <div class="left">
        <div class="main_image">
          <img src="images/car1.jpg" class="slide">
        </div>
        <div class="option flex">
          <img src="images/car1.jpg" onclick="img('images/car1.jpg')">
          <img src="images/car6.jpg" onclick="img('images/car6.jpg')">
          <img src="images/login_background.jpg" onclick="img('images/login_background.jpg')">
        </div>
      </div>
      <?php
							$get_car=get_car($con,'','',$car_id);
							foreach($get_car as $row){
							?>
      <div class="right">
           <form action="" method="POST">
              <div class="description">
                 <input type='hidden' name='car_id' value= <?php echo $row['id']?>>
                 <input type='hidden' name='owner' value= <?php echo $row['user_id']?>>
                 <input type='hidden' name='starting_bid' value= <?php echo $row['start_bid']?>>
                 <h3>Model_name:<?php echo $row['model_name']?></h3>
                 <h3>Model_number:<?php echo $row['model_number']?></h3>
                 <h3>brand_name:<?php echo $row['brand_name']?></h3>
                 <?php
                   $condition_id=$row['condition'];
                   $condition_res=mysqli_query($con,"select name from car_condition where id={$row['condition']}");
                   $condition_arr=array();
                    while($condition=mysqli_fetch_assoc($condition_res)){
                     $condition_arr[]=$condition;
                    } 
                    foreach($condition_arr as $list){ ?>
                      <h3>condition:<?php echo $list['name'] ?></h3>
                  <?php } ?>
                 <h3>Description:<?php echo $row['description']?></h3>
                 <h3>price:<?php echo $row['price']?></h3>
                 <h3>Starting bidding amount:<?php echo $row['start_bid']?></h3>
              </div>
              
              <div class="inputbox">
                <input type="number" name="bid" required value="<?php echo $bid_amount?>" >
                <label for="">Your Bid</label>
              </div>
               <div class="button">
                <input type="submit" name="submit" value="Place Bid" style="--clr:#3443ecde">
               </div>
               <div class="comment">
                  <p>*bidding amount must be more than starting amount</p>
               </div>
               
        </form>
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
      padding-top:8rem;
      overflow-x:hidden;
      background: #251749;
    }

    .container1 {
      width: 90%;
      margin: auto;
      background: white;
      box-shadow: 5px 5px 10px 3px rgba(0, 0, 0, 0.3);
    }
    .left{
      box-sizing: border-box;
      width: 50%;
      padding-left: 30px;
      padding-top: 30px;
      padding-right: 30px;
    }
    .right{
      width:50%;
      display: fixed;
      padding: 50px 100px 50px 50px;
      justify-content: center;
    }

    .flex {
      display: flex;
    }
   .main_image {
     width: auto;
     height: auto;
   }

   .option img {
     width: 100px;
     height: 100px;
     padding: 10px;
    }
    .description h3,p{
     color: var(--azulado);
     margin: 20px 0 20px 0;
     font-size: 15px;
    }
    .comment p {
     color:red;
     margin: 20px 0 20px 0;
     font-size: 20px;
    }
    .inputbox{
     position: relative;
     margin: 30px 0;
     width: 310px;
     border-bottom: 2px solid black;
    }
    .inputbox label{
     position: absolute;
     top: 50%;
     left: 5px;
     transform: translateY(-50%);
     color: black;
     font-size: 15px;
     pointer-events: none;
     transition: .5s;
    }
    input:focus ~ label,input:valid ~ label{
      top: -5px;
    }
    .inputbox input {
      width: 100%;
     height: 50px;
     background: transparent;
     border: none;
     outline: none;
     font-size: 15px;
     padding:0 35px 0 5px;
     color: black;
   }
   .button input[type="submit"]
    {
     position: relative;
     border-radius: 40px;
     background: black;
     border: none;
     outline:none;
     color: #fff;
     text-decoration: none;
     font-size: 1em;
     font-weight: 600;
     text-align: center;
     transition: 0.5s;
     padding: 5px 90px;
    }
    .button input[type="submit"]:hover
    {
     background: var(--clr);
     letter-spacing: 0.25em;
    }

@media only screen and (max-width:768px) {
  .container {
    max-width: 70%;
    margin: auto;
    height: auto;
  }

  .left, .right {
    width: 100%;
  }
  .container1 {
    flex-direction: column;
  }
}

@media only screen and (max-width:511px) {
  .container {
    max-width: 100%;
    height: auto;
    padding: 10px;
  }

  .left, .right {
    padding: 0;
  }

  img {
    width: 100%;
    height: 100%;
  }

  .optional {
    display: flex;
    flex-wrap: wrap;
  }
}
</style>
<script>
   /* function img(anything){
        document.querySelector('.slide').src=anything;
    }
    function change(change){
        const line =document.querySelector('.main_image');
        line.style.background=change;
    }*/
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
</script>