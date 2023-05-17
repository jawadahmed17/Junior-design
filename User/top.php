<!-- This file contains the code for the top navigation bar-->
<?php
require('connection.php');
require('functions.php');
$category_id_res=mysqli_query($con,"select * from category where status=1 order by type_name asc"); 
$category_id_arr=array();
while($row=mysqli_fetch_assoc($category_id_res)){
    $category_id_arr[]=$row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
    <header>
        <div class="nav container"> 
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="index.php" class="logo"><i class='bx bxs-car'></i>Drive<span>swap</span></a>
            <ul class="navbar">
                <li class="dropdown"><a href="#">New Car</a>
                  <ul class="dropdown-content">
                     <?php 
                       foreach($category_id_arr as $list){ ?>
                      <a href="newcategory.php ? ID=<?php echo $list['id']?>"><?php echo $list['type_name'] ?> </a>
                     <?php } ?>
                     </ul>
                </li>
                  
                <li class="dropdown"><a href="#">Used Car</a>
                    <ul class="dropdown-content">
                     <?php 
                       foreach($category_id_arr as $list){ ?>
                      <a href="usedcategory.php ? ID=<?php echo $list['id']?>"><?php echo $list['type_name'] ?> </a>
                     <?php } ?>
                    </ul>
                </li>
                <?php if(isset($_SESSION['USER_LOGIN'])){
                    echo '<li class="dropdown"><a href="sellcar.php">Sell Car</a></li>';
                   }
                ?>
                <li class="drobdown"><a href="contact.php">Contact</a></li>
            
             <i class='bx bx-search-alt' id="search-icon"></i> 
             <div class="search-box container">
                <input type="search" name="" id="search-box" placeholder="Search here....">
             </div> 
           
             <div id="login-btn">
             <?php if(isset($_SESSION['USER_LOGIN'])){
                $name=$_SESSION['USER_NAME'];

               echo '<li class="dropdown"><i class="far fa-user"></i>
                      <ul class="dropdown-content">
                       <a href="profile.php">Edit Profile</a>
                       <a href="listedcar.php">Listed Car</a>
                       <a href="logout.php">Logout</a>
                        </ul>
                        </li>';
               }
               else{
               echo '<li class="dropdown"><a href="login.html">Login</a></li>';
              }
             ?>
            </ul>
            </div>    
        </div>
    </header>
 </body>
</html>

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
header{
    display: block;
    width:100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    background-color: #FFF;
}
.container{
    max-width: 1086px;
    margin-left: auto;
    margin-right: auto;
   background-color: #FFF;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 35px;
}
#menu-icon{
    font-size: 20px;
    cursor: pointer;
    color:var(--text-color);
    display: none;
}
.logo{
    color: black;
    font-weight: 700;
    font-size: 2rem;
}
.logo i{
    padding-right: 1rem;
    color: black;
}
.logo span{
    color: maroon;
}
.navbar{
    display: flex;
    column-gap: 2rem;
}
.navbar a
{
    text-transform:uppercase ;
    font-weight: 500;
    font-size: 1rem;
    color:black;
}

.navbar a:hover,.navbar .active
{
    color:var(--boatswain);
    border-bottom: 3px solid var(--azulado);
}
#search-icon{
    font-size: 24px;
    cursor: pointer;

}
.search-box{
    position: absolute;
    top: 110%;
    right: 0;
    left: 0;
    background:white;
    box-shadow: 4px 4px 20px rgb(15 54 55 /10%);
    border: 1px solid var(--boatswain);
    border-radius: 0.5rem;
    clip-path: circle(0% at 100% 0%);
}
.search-box.active{
    clip-path: circle(144% at 100% 0%);
}
.search-box input{
    width: 100%;
    padding: 20px;
    border:none;
    outline:none;
    background: transparent;
    font-size: medium;
}

#login-btn a i{
    font-size: 1.2rem;
    color: black;
    cursor: pointer;
}
#login-btn a i:hover{
    color:var(--steadfast);
}
.dropdown {
    position: relative;
} 
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {
    background-color: #f1f1f1}
  
.dropdown:hover .dropdown-content {
    display: block;
 }
  
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>

<script>
    let search =document.querySelector('.search-box');
    document.querySelector('#search-icon').onclick=()=>{
    search.classList.toggle('active');
    }
</script>



