<?php
require('top.php');
$user_id=$_SESSION['USER_ID'];
$model_name='';
$model_number='';
$registration_number='';
$brand_name='';
$category_id='';
$condition_id='';
$description='';
$image1='';
$image2='';
$image3='';
$price='';
$msg='';
$image_required='required';

if(isset($_POST['submit'])){
	$model_name=get_safe_value($con,$_POST['model_name']);
   $model_number=get_safe_value($con,$_POST['model_number']);
   $registration_number=get_safe_value($con,$_POST['registration_number']);
   $brand_name=get_safe_value($con,$_POST['brand_name']);
   $category_id=get_safe_value($con,$_POST['category_id']);   
   $condition_id=get_safe_value($con,$_POST['condition_id']);
   $description=get_safe_value($con,$_POST['description']);
	$price=get_safe_value($con,$_POST['price']);
	$res=mysqli_query($con,"select registration_number from `car` where registration_number='$registration_number'");
	$check=mysqli_num_rows($res);
	if($check>0){
		echo "car already exist";
	}	
	else{
	   
		$image1=$_FILES['image1']['name'];
		move_uploaded_file($_FILES['image1']['tmp_name'],'../media/'.$image1);
      $image2=$_FILES['image2']['name'];
		move_uploaded_file($_FILES['image2']['tmp_name'],'../media/'.$image2);
      $image3=$_FILES['image3']['name'];
		move_uploaded_file($_FILES['image3']['tmp_name'],'../media/'.$image3);
		mysqli_query($con,"INSERT INTO `car`(`user_id`,`type`,`model_name`,`model_number`,`registration_number`,`brand_name`,`condition`,`description`,`image1`,`image2`,`image3`,`price`)
       VALUES ('$user_id','$category_id','$model_name','$model_number','$registration_number','$brand_name','$condition_id','$description','$image1','$image2','$image3','$price')");
		#header('location:index.php');
		die();
	}
}
?>
    <section>
        <div class="sellform-box">
            <div class="form-value">
                <form  method="POST" enctype="multipart/form-data">
                    <h2>Car Details</h2>
                    <div class="inputbox">
                        <input type="text" name="model_name" required value="<?php echo $model_name?>" >
                        <label for="">Model Name</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="model_number" required value="<?php echo $model_number?>" >
                        <label for="">Model Number</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="registration_number" required value="<?php echo $registration_number?>" >
                        <label for="">Registration Number</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="brand_name" required value="<?php echo $brand_name?>" >
                        <label for="">Brand Name</label>
                    </div>
                    <label id="category_label"for="">Category</label>
                    <select id="category" name="category_id" required>
                        <option >Select Category</option>
                        <?php
                         $res=mysqli_query($con,"select id,type_name from category order by type_name asc");
                         while($row=mysqli_fetch_assoc($res)){
                           if($row['id']==$category_id){
                              echo "<option selected value=".$row['id'].">".$row['type_name'],"</option>";
                           }else{
                              echo "<option value=".$row['id'].">".$row['type_name']."</option>";
                           }
                         }
                        ?>
                     </select>  

                    <label id="condition_label"for="">Condition</label>
                    <select id="condition" name="condition_id" required>
                    <option >Select Condition</option>
                        <?php
                         $res=mysqli_query($con,"select id,name from car_condition order by name asc");
                         while($row=mysqli_fetch_assoc($res)){
                           if($row['id']==$condition_id){
                              echo "<option selected value=".$row['id'].">".$row['name'],"</option>";
                           }else{
                              echo "<option value=".$row['id'].">".$row['name']."</option>";
                           }
                         }
                        ?>
                     </select>   

                    <div class="inputbox">
                        <input type="text" name="description" required value="<?php echo $description?>" >
                        <label for="">Description</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" name="price" required value="<?php echo $price?>" >
                        <label for="">Price</label>
                    </div>

                    <label id="image_label" for="inputfile">Image</label>
                    <div class="inputbox">
                        <input type="file" id="input-file1" name="image1" accept="image/*" onchange="showPreview1(event)" <?php echo $image_required?>">
                    </div>
                    <div class="preview1">
                       <img src="" alt="" id="file-preview1">
                    </div>
                    <div class="inputbox">
                        <input type="file" id="input-file2" name="image2" accept="image/*" onchange="showPreview2(event)" required value="<?php echo $image2?>">
                    </div>
                    <div class="preview2">
                       <img src="" alt="" id="file-preview2">
                    </div>
                    <div class="inputbox">
                        <input type="file" id="input-file3" name="image3" accept="image/*" onchange="showPreview3(event)" required value="<?php echo $image3?>">
                    </div>
                    <div class="preview3">
                       <img src="" alt="" id="file-preview3">
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="submit" style="--clr:#3443ecde">
                    </div>
                </form>
            </div>
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
 #condition_label,#image_label,#category_label{

    position: relative;
    margin: 20px 0;
    width: 310px;
    color: black;
    font-size: 1em;
    pointer-events: none;
 
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