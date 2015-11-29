<?php
    $id = $_GET['id'];
    $sql = "delete from blog where blog_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=blog");
?>