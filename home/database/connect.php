<?php
    define('hostname','localhost');
    define('username','root');
    define('password','');
    define('db','breadnew');
    
    $connect = mysql_connect(hostname,username,password) or die("server disconnect");
    mysql_select_db(db,$connect);
?>