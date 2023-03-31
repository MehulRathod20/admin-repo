<?php
 
 include "config.php";

 if (isset($_POST['submit'])) {
 	
 	$menu =$_POST['menu'];
 	// $submenu =$_POST['submenu'];

 	if (!empty($menu)) {
 		
 		$sql="INSERT INTO `headermenu`(`menu`) VALUES ('{$menu}')";

 		$result=mysqli_query($conn,$sql);

 		header("Location:http://localhost/admin_login_page/admin-panel/admin/header-setting.php");
 	}else{

 		echo "menu can't add";
 		
 	}

 }else{
 	
 }
?>