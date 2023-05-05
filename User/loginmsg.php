<?php
require('top.php');
?>
<section>
    <div class="center">
     <h1><i>Please Login For accessing this feature</i>
     <br>
     <pr style="color:rgb(0,139,139)">Thank you</pr>
    
     <br>
     <a href="login.html" type="submit" name="submit"  style="--clr:#3443ecde">Login</a>
    </h1>
    </div>
    <div class="button">
       
    </div>
<section>
<style>
    section{
    display: flex;
    padding-top:0rem;
    padding-bottom:0rem;
    justify-content:center;
    align-items: center;
    min-height: 100vh;
    overflow-x:hidden;
    width: 100%;
    background-position: center;
    background-size: cover;
 }
.center{
    position: fixed;
    width: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.center h1
{
    text-align: center;
    padding: 0;
    color:#27ae60;
    margin: 10px;
    font-size: 30px;
    background:white;
}
.center a
 {
    position: relative;
    border-radius: 40px;
    background: black;
    border: none;
    outline:none;
    color: #fff;
    justify-content:center;
    text-decoration: none;
    font-size: 1em;
    font-weight: 300;
    text-align: center;
    transition: 0.5s;
    padding: 5px 123px;
 }
 .center a:hover
 {
    background: var(--clr);
    letter-spacing: 0.25em;
 }
</style>