<html>
<head>
    <title>

    </title>
</head>
<body>
    <?php

    if(isset($_COOKIE['nombreUsuario'])){
        echo "El usuaeio logueado es: ".$_COOKIE['nombreUsuario'];
    }else{
        echo " No se pudo encontrar la cookie";
    }

    
    ?>
    <br>
    <a href="cookie1d.php"> Salir del Sistema </a>
</body>


</html>