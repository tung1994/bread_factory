<?php
    $id = $_GET['id'];
    $sql = "delete from user where user_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=user");
?>