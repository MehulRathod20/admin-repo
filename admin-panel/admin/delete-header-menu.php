<?php

$id = $_GET['id'];

include 'config.php';

    $sql = "DELETE FROM headermenu WHERE id = {$id}";

    $result = mysqli_query($conn, $sql) or die("query unsuccessful");

            header("Location:http://localhost/admin_login_page/admin-panel/admin/header-setting.php");


    mysqli_close($conn);

?>