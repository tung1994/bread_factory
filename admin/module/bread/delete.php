<?php
    $id = $_GET['id'];
    $sql = "delete from bread where bread_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=bread");
?>