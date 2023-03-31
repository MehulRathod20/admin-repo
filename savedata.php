<?php

 include "config.php";

 if (isset($_POST['submit'])) {
        
 // $id = $_POST['id'];   
 $fname= $_POST['fname'];
 $lname= $_POST['lname'];  
 $address = $_POST['address']; 
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $password = $_POST['password'];

 if (!empty($fname)&&($lname)&&($address)&&($phone)&&($email)&&($gender)&&($password)) {

   $sql ="INSERT INTO `login_table`( `firstname`, `lastname`, `address`, `mobile`, `email`,`gender`,`password`) VALUES ('{$fname}','{$lname}','{$address}','{$phone}','{$email}','{$gender}','{$password}')";

   $result = mysqli_query($conn,$sql) or die("query unsuccesful");

   header("Location:http://localhost/admin_login_page/login.php");
}else{
   header("Location:http://localhost/admin_login_page/login.php");

}
}

?>