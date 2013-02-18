<?php
include("header.php");
    $id=$_POST['id'];
    for ($p = 0; $p <= 10; $p += 5) {
        mysql_query('UPDATE COLA SET PORCENTAJE=' . $p . ' WHERE ID='.$id);
        sleep(5);
    }
            
?>
