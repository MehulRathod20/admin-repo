<?php
 
 include "config.php";

 if (isset($_POST['submit'])) {
 	
 	$menu =$_POST['menu'];
   $submenu =$_POST['submenu'];
   $copyright =$_POST['copyright'];


 	if (!empty($menu)) {
 		
 		$sql="INSERT INTO `footermenu`(`menu`,`submenu`,`copyright`) VALUES ('{$menu}','{$submenu}','{$copyright}')";

 		$result=mysqli_query($conn,$sql);

 		header("Location:http://localhost/admin_login_page/admin-panel/admin/footer-setting.php");
 	}else{

 		echo "menu can't add";
 		
 	}

 }else{
 	
 }
?>