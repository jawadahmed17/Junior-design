<?php 
require('top.php');

$name='';
$email='';
$description='';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $description=$_POST['description'];
    mysqli_query($con,"INSERT INTO `user_query` (`name`, `email`, `description`)
     VALUES ('$name', '$email', '$description')");
    die(); 
}
?>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us </h1>
    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14592.428723553554!2d90.37924194813758!3d23.88581775724837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c46b6de8f207%3A0x638eb6830d10167d!2sSector%2010%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1683050537264!5m2!1sen!2sbd"
       width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="sellform-box">
          <form action="" method="POST" enctype="multipart/form-data">
              <h3>get in touch</h3>
               <div class="inputbox">
               <input type="text" name="name" required>
               <label for="">Name</label>
                </div>
                <div class="inputbox">
                <input type="email" name="email" required >
                <label for="">Email</label>
                </div>
                <div class="inputbox">
                  <input type="text" name="description" required>
                  <label for="">Description</label>
                </div>
                <div class="button">
                  <input type="submit" name="submit" value="submit" style="--clr:#3443ecde">
                 </div>
          </form>
      </div>
       
    </div>

<section>   

<style>
    :root{
     --border:.1rem solid rgba(0,0,0,.1);
     --box-shadow:0 .5rem 1 rem rqba(0,0,0,.1);
     --black:#130f40;
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
     display: fixed;
     padding-top:8rem;
     padding-bottom:10rem;
     padding-left:3rem;
     padding-right:3rem;
    }
    .heading{
        font-size: 2em;
        color: black;
        text-align: center;
    }
    .row{
        display:flex;
        flex-wrap:wrap;
        gap:1.5rem;
    }
    .row .map{
        flex: 1 1 42rem;
        width:100%;
        padding: 2rem;
        border:var(--border);
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
    }
    .row .sellform-box{
     position: center;
     width: 450px;
     display: flex;
     justify-content: center;
     align-items: center;
     border:var(--border);
     border-radius: .5rem;
     box-shadow: var(--box-shadow);
   }

    .row form h3{
        font-size:2rem;
        text-align:center;
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
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
   }
   input:focus ~ label,
   input:valid ~ label{
   top: -5px;
   }
   .contact .row form .inputbox input {
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
    .contact .row form .button input[type="submit"]:hover
    {
      background: var(--clr);
      letter-spacing: 0.25em;
    }
</style>    
