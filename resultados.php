<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dis.css" type="text/css">
    <title>Document</title>
</head>
<body class="body2">
    <?php
    //Obtengo los resultados
    $nombre=$_POST['nom'] ?? [];
    $email=$_POST['email'] ?? [];
    $destinos=$_POST['destin'] ?? [];
    $actividades=$_POST['activida'] ?? [];
    $servicios=$_POST['ser'] ?? [];

    //contadores
    $con1=0;
    $con2=0;
    $con3=0;

    //Mostramos los resultados
    //Mostrar los datos del cliente
    echo "<div class='titulo'>";
    echo "<h1>Datos Del Viaje</h1> <hr>";
    echo "</div>";

    echo "<section class='cliente2'>";
    echo "<h2>Datos del cliente</h2>";
    echo "<p>Nombre: <strong>".$nombre."</strong> </p>";
    echo "<p>Correo electronico: <strong>".$email."</strong> </p>";
    echo "</section>";

    //Mostrar los destinos turisticos
    echo "<h2>Destinos Turisticos</h2>";
    echo "<section class='destinos2'>";
    if($destinos === []){
        echo "<p>No seleccionaste ningún elemento</p>";
    }else{
        echo "<p>Los destinos escogidos son:</p>";
        echo "<div class='turis'>";
        foreach($destinos as $des){
            $con1++;
            echo "<p><strong>".$con1.". ".$des."</strong></p>";
        }
        echo "</div>";
        echo "<p>Elementos seleccionado: <strong>".$con1."</strong></p>";
    }
    echo "</section>";

    //Mostrar las actividades turisticas
    echo "<h2>Actividades Turisticas</h2>";
    echo "<section class='actividades2'>";
    if($actividades === []){
        echo "<p>No seleccionaste ningún elemento</p>";
    }else{
        echo "<p>Las actividades turisticas escogidos son:</p>";
        echo "<div class='act'>";
        foreach($actividades as $act){
            $con2++;
            echo "<p><strong>".$con2.". ".$act."</strong></p>";
        }
        echo "</div>";
        echo "<p>Elementos seleccionado: <strong>".$con2."</strong></p>";
    }
    echo "</section>";

    //Mostrar lo servicios adicionales
    echo "<h2>Servicios Adicionales</h2>";
    echo "<section class='servicios2'>";
    if($servicios === []){
        echo "<p>No seleccionaste ningún elemento</p>";
    }else{
        echo "<p>Los servicios adicionales escogidos son:</p>";
        echo "<div class='ser'>";
        foreach($servicios as $ser){
            $con3++;
            echo "<p><strong>".$con3.". ".$ser."</strong></p>";
        }
        echo "</div>";
        echo "<p>Elementos seleccionado: <strong>".$con3."</strong></p>";
    }
    echo "</section>";

    //Mostrar el total de elementos seleccionado
    $tol=$con1+$con2+$con3;
    echo "<p>El total de elementos seleccionado es de: <strong>".$tol."</strong></p>";
    ?>

    <br>
    <div class="botones">
        <ol>
            <a href="viajes.php" id="b1">Volver</a>
            <a href="viajes.php" id="b2">Imprimir</a>
        </ol>
    </div>
</body>
</html>