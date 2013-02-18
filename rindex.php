<?php
    include("header.php");
    $ip=$_SERVER['REMOTE_ADDR'];
    $porcentaje = '0%';
    $url=$_POST['url'];
    $resultado = selecciona_videos($url);
    if($resultado){
        $_SESSION['mensaje']="1";
        header("Location:rget.php");
    }else{
        inserta_cola($url, $porcentaje, $ip);
        $resultado1 = selecciona_id($url, $ip);
        if($fila = mysql_fetch_array($resultado1)) {
            echo $fila['id'];
        }
    }
?>
