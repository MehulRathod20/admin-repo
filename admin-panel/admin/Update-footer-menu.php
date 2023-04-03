<?php



  include "config.php";

  $id = $_POST['id'];
  $menu = $_POST['menu'];
  $submenu = $_POST['submenu'];
  $copyright = $_POST['copyright'];


  $sql ="UPDATE `footermenu` SET `id`='{$id}',`menu`='{$menu}',`submenu`='{$submenu}',`copyright`='{$copyright}'  WHERE id= '{$id}'";

  $result = mysqli_query($conn,$sql) or die("query unsuccessful");

 header("Location:http://localhost/admin_login_page/admin-panel/admin/footer-setting.php");

?>
