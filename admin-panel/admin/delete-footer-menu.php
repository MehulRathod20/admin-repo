<?php

$id = $_GET['id'];

include 'config.php';

    $sql = "DELETE FROM footermenu WHERE id = {$id}";

    $result = mysqli_query($conn, $sql) or die("query unsuccessful");

            header("Location:http://localhost/admin_login_page/admin-panel/admin/footer-setting.php");


    mysqli_close($conn);

?>