<?php
require('top.php');

?>
<section class="home" id="home">
        <div class="home-slider">
           <div class="wrapper">
            <div class="box" style="background: url(images/car1.jpg);">
                <div class="content">
                    <h2>Find your dream car</h2>
                    <div class="button">
                        <a href="#" class="btn">Explore now</a>
                    </div>
                </div>
            </div>
    </section>

<style>
section{
    padding: 2rem 9%;
}
.home{
    padding: 0;    
}
.home .home-slider .box{
    min-height: 100vh;
    display: flex;
    align-items:center;
    justify-content: center;
    padding: 2rem;
    background-size: cover !important;
    background-position: cover !important;
}
.home .home-slider .box .content{
    text-align: center;
}
.home .home-slider .box .content h2{
    font-size: 2rem;
    padding: 1rem 0;
    transition-delay: .2s;
    color: #FFFBEB;
}
.home .home-slider .box .content .button{
    transition-delay: .6s;
}
.home .home-slider .box .content .button .btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1rem;
    background:aqua;
    font-weight: 500;
    color: black;
    cursor: pointer;
} 
.home .home-slider .box .content .button .btn:hover{
    background: red;
    color: white;
    letter-spacing: 0.25em;
} 
</style>