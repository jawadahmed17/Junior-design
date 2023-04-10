<?php
require('top.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Car</title>
</head>
<body>
    <section>
        <div class="sellform-box">
            <div class="form-value">
                <form action="#" method="post">
                    <h2>Car Details</h2>
                    <div class="inputbox">
                        <input type="text" name="model_name" required >
                        <label for="">Model Name</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="model_number" required >
                        <label for="">Model Number</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="brandl_name" required >
                        <label for="">Brand Name</label>
                    </div>
                    <label id="condition_label"for="">Condition</label>
                    <select id="condition" name="condition" required>
                        <option value="new">new</option>
                        <option value="used">used</option>
                        
                     </select>    
    
                    <div class="inputbox">
                        <input type="text" name="description" required >
                        <label for="">Description</label>
                    </div>
                    <label id="image_label" for="inputfile">Image</label>
                    <div class="inputbox">
                        <input type="file" id="input-file1" accept="image/*" onchange="showPreview1(event) ">
                    </div>
                    <div class="preview1">
                       <img src="" alt="" id="file-preview1">
                    </div>
                    <div class="inputbox">
                        <input type="file" id="input-file2" accept="image/*" onchange="showPreview2(event) ">
                    </div>
                    <div class="preview2">
                       <img src="" alt="" id="file-preview2">
                    </div>
                    <div class="inputbox">
                        <input type="file" id="input-file3" accept="image/*" onchange="showPreview3(event) ">
                    </div>
                    <div class="preview3">
                       <img src="" alt="" id="file-preview3">
                    </div>
                    <div class="button">
                        <input type="submit" value="Submit" style="--clr:#3443ecde">
                    </div>
                </form>
            </div>
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
 section{
    display: flex;
    padding-top:10rem;
    padding-bottom:10rem;
    justify-content:left;
    align-items: center;
    min-height: 100vh;
    overflow-x:hidden;
    width: 100%;
    background: #9d8585;
    background: url('images/Background-home.png')no-repeat;
    background-position: center;
    background-size: cover;
 }
 .sellform-box{
    position: left;
    width: 600px;
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
 select{

    position: relative;
    margin: 0px 0 0 30px;
    
    border: 2px solid black;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: black;
    border-radius:4px;
    align-items: center;
    box-sizing:border-box;
   
 }
 #condition_label,#image_label{

    position: relative;
    margin: 20px 0;
    width: 310px;
    color: black;
    font-size: 1em;
    pointer-events: none;
 
 }
 .preview{
 }
</style>
<script type="text/javascript">
  function showPreview1(event)
  {
    if(event.target.files.length>0){
      var src=URL.createObjectURL(event.target.files[0]);
      var preview=document.getElementById("file-preview1");
      preview.src=src;
      preview.width="200"
      preview.style.dsiplay="block";
    }
  }
  function showPreview2(event)
  {
    if(event.target.files.length>0){
      var src=URL.createObjectURL(event.target.files[0]);
      var preview=document.getElementById("file-preview2");
      preview.src=src;
      preview.width="200"
      preview.style.dsiplay="block";
    }
  }
  function showPreview3(event)
  {
    if(event.target.files.length>0){
      var src=URL.createObjectURL(event.target.files[0]);
      var preview=document.getElementById("file-preview3");
      preview.src=src;
      preview.width="200"
      preview.style.dsiplay="block";
    }
  }
  
</script> 