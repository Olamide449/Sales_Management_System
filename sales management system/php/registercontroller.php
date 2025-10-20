<?php
include("connect.php");
if(isset($_POST["full_name"])){
    $email= $_POST["full_name"];
    $staffNumber =$_POST["email"];
    $password = $_POST["password"];
   


  $sql ="INSERT INTO `user_profile`( `full_name`, `email`, `password`) VALUES ('$full_name','$email','$password')";
   $result = $conn->query($sql);
   if($result === true){
    echo("sucessfully sent");
   }else{
    echo("failed");
   }
}
?>