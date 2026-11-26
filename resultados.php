<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    echo "<p>Correo electronico: <strong>".$email."</strong> </p>  <hr>";
    echo "</section>";

    //Mostrar los destinos turisticos
    echo "<section class='destinos2'>";
    echo "<h2>Destinos Turisticos</h2>";
    if($destinos === []){
        echo "<p>No seleccionaste ningún elemento</p> <hr>";
    }else{
        echo "<p>Los destinos escogidos son:</p>";
        foreach($destinos as $des){
            echo "<p><strong>".$des."</strong></p>";
            $con1++;
        }
        echo "<p>Elementos seleccionado: <strong>".$con1."</strong></p> <hr>";
    }
    echo "</section>";

    //Mostrar las actividades turisticas
    echo "<section class='actividades2'>";
    echo "<h2>Actividades Turisticas</h2>";
    if($actividades === []){
        echo "<p>No seleccionaste ningún elemento</p> <hr>";
    }else{
        echo "<p>Las actividades turisticas escogidos son:</p>";
        foreach($actividades as $act){
            echo "<p><strong>".$act."</strong></p>";
            $con2++;
        }
        echo "<p>Elementos seleccionado: <strong>".$con2."</strong></p> <hr>";
    }
    echo "</section>";

    //Mostrar lo servicios adicionales
    echo "<section class='servicios2'>";
    echo "<h2>Servicios Adicionales</h2>";
    if($servicios === []){
        echo "<p>No seleccionaste ningún elemento</p> <hr>";
    }else{
        echo "<p>Los servicios adicionales escogidos son:</p>";
        foreach($servicios as $ser){
            echo "<p><strong>".$ser."</strong></p>";
            $con3++;
        }
        echo "<p>Elementos seleccionado: <strong>".$con3."</strong></p> <hr>";
    }
    echo "</section>";

    //Mostrar el total de elementos seleccionado
    $tol=$con1+$con2+$con3;
    echo "<p>El total de elementos seleccionado es de: <strong>".$tol."</strong></p>";
    ?>

    <br>
    <div class="botones">
        <ol>
            <a href="viajes.php">Volver</a>
            <a href="viajes.php">Imprimir</a>
        </ol>
    </div>
</body>
</html>