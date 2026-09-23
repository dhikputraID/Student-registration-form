<?php 
    $host = "localhost"; ## default settings
    $user = "root"; ## default settings
    $pass = ""; ## add password if MySQL uses password
    $db = "db_rpl"; ## type according to the database name you created previously

    $koneksi = mysqli_connect($host, $user, $pass, $db);
?>
