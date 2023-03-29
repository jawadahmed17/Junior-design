<?php
   $username= $_POST['username'];
   $email= $_POST['email'];
   $password= $_POST['password'];
   $conn= new mysqli('localhost','root','','cse299');
   if($conn->connect_error){
      die('connection failed : ' .$conn->connect_error);
   }
   else{
      $stmt= $conn->prepare("Insert into user(username,email,password) value(?,?,?)");
      $stmt->bind_param("sss",$username,$email,$password);
      $stmt->execute();
      header('Location:login.html');
      $stmt->close();
      $conn->close();
   }
?>
