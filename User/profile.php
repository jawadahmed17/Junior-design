<?php 
require('top.php');
$id=$_SESSION['USER_ID'];
$res=mysqli_query($con,"select * from user where id='$id'"); 
$username='';
$email='';
$password='';
$address='';
$phone='';
$profession='';
$dreamcar='';


if(isset($_POST['submit'])){
    $id=$_SESSION['USER_ID'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $profession=$_POST['profession'];
    $dreamcar=$_POST['dreamcar'];
    mysqli_query($con,"update `user` set `username`='$username',`email`='$email',`password`='$password',`address`='$address',`phone`='$phone',`profession`='$profession',`dream_car`='$dreamcar' where `id`='$id' ");
    die();
}

?>

<section>
   <div class="editprofileform">
        <div class="form-value">
            <form  method="POST" enctype="multipart/form-data">
                    <h1>Profile Settings</h1> 
                    <?php $row=mysqli_fetch_assoc($res) ?>
                    <div class="inputbox">
                        <label for="">User Name</label>   
                        <input type="text" name="username" value="<?php echo $row['username']?>" required >
                    </div>
                    <div class="inputbox">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" required >  
                    </div>
                    <div class="inputbox">
                        <label for="">Password</label>
                        <input type="password" name="password" value="<?php echo $row['password']?>" required >
                    </div>
                    <div class="inputbox">
                        <label for="">Address</Address></label>
                        <input type="text" name="address" value="<?php echo $row['address']?>" required>
                    </div>
                    <div class="inputbox">   
                        <label for="">Phone</label>
                        <input type="number" name="phone" value="<?php echo $row['phone']?>" required >
                    </div>
                    <div class="inputbox">
                        <label for="">Profession</label>
                        <input type="text" name="profession" value="<?php echo $row['profession']?>" required>
                    </div>
                    <div class="inputbox">
                        <label for="">Dream Car</label>
                        <input type="text" name="dreamcar" value="<?php echo $row['dream_car']?>" required >
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="update" style="--clr:#3443ecde">
                    </div>
                </form>
            </div>
        </div>
    </section>
   </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
     padding-bottom:10rem;
     justify-content:center;
     align-items: center;
     min-height: 100vh;
     overflow-x:hidden;
     width: 100%;
     background: #FFFBEB;
    }
    .editprofileform{
    position: left;
    width: 900px;
    display: flex;
    justify-content: center;
    align-items: center;
 }
 h2{
    font-size: 2em;
    color: black;
    text-align: center;
 }
 .inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid black;
 }
 h1{
    text-align: center;
 }
 .inputbox label{
    position: relative;
    top: 1px;
    left: 5px;
    transform: translateY(-50%);
    color: black;
    font-size: 1rem;
    pointer-events: none;
    transition: .5s;
 }

 .inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
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
    padding: 5px 123px;
 }
 .button input[type="submit"]:hover
 {
    background: var(--clr);
    letter-spacing: 0.25em;
 }

</style>