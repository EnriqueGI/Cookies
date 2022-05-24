<?php 
 $nombre = $_POST['nombre'];

 setcookie( 'nombreUsuario', $nombre, time() + 1800);
 header("location:cookie1c.php");


?>