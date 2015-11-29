<?php
    $id = $_GET['id'];
    $sql = "delete from contact where contact_id = '".$id."'";
    mysql_query($sql);
    header("location:index.php?module=contact");
?>