<?php
 
 include "config.php";

 if (isset($_POST['save'])) {
  
    // $lid =$_POST['id'];
    $menu =$_POST['menu'];


    if (!empty($menu)) {
    
    $sql="INSERT INTO `footermenu`(`link`) VALUES ('{$menu}')";

    $result=mysqli_query($conn,$sql);

    header("Location:http://localhost/admin_login-copy/admin-panel/admin/footer-setting.php");
  }else{

    echo "link can't add";
    
  }

 }else{
  
 }
?>