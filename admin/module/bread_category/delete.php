<?php
    $id = $_GET['id'];
    $sql = "delete from bread_category where category_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=bread_category");
?>