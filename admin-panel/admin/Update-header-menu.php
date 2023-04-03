<?php



  include "config.php";

  $id = $_POST['id'];
  $menu = $_POST['menu'];

  $sql ="UPDATE `headermenu` SET `menu`='{$menu}' WHERE id= '{$id}'";

  $result = mysqli_query($conn,$sql) or die("query unsuccessful");

 header("Location:http://localhost/admin_login_page/admin-panel/admin/header-setting.php");

?>
