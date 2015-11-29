<?php
    $id = $_GET['id'];
    $sql = "delete from about where about_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=about");
?>