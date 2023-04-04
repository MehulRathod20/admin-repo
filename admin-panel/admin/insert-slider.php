<?php

include "config.php";

if(isset($_FILES['fileslide'])){
  $errors = array();
 
  $file_name =$_FILES['fileslide']['name'];
  $file_size =$_FILES['fileslide']['size'];
  $file_tmp =$_FILES['fileslide']['tmp_name'];
  $file_type =$_FILES['fileslide']['type'];
  $file_ext = strtolower(end(explode('.',$file_name)));
  $extensions = array("jpeg","jpg","png");

  if(in_array($file_ext,$extensions) === false){
    
    $errors[] = "this extesion file not allowed,please choose a JPG OR PNG file.";
  }
  if($file_size > 4194304){
    $errors[] = "file size must be 4mb lower.";
  }
  if(empty($errors) == true){
    move_uploaded_file($file_tmp,"upload/".$file_name);
  }else{
    print_r($errors);
    die();
  }

}
$sql ="INSERT INTO slider(slider_img)VALUES('{$file_name}')"; 



if(mysqli_query($conn,$sql)){
   header("Location:http://localhost/admin_login_page/admin-panel/admin/slider-setting.php");
}else{
  echo "<div class='alert alert-danger'>query failed</div>";
}
?>