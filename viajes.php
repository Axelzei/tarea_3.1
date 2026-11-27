<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dis.css" type="text/css">
    <title>Viajes</title>
</head>
<body class="body1">
    <form action="resultados.php" method="POST">
        <div class="titulo">
            <h1>Prepara tu viaje :1</h1>
            <hr>
        </div>

        <section class="cliente">
            <h2>Datos del cliente</h2>
            <label for="nom">Ingrese tu nombre: </label>
            <input type="text" step="any" name="nom" id="nom" required>
            
            <label for="email" id="em">Ingrese tu correo electronico: 
            <input type="email" step="any" name="email" id="email" required></label>
            <br><br>
        </section>

        <section class="destinos">
            <h2>Destinos turisticos</h2>
            <select id="destin" name="destin[] " multiple>
                <option value="Cancún">Cancún</option>
                <option value="Puerto Vallarta">Puerto Vallarta</option>
                <option value="Acapulco">Acapulco</option>
                <option value="Los Cabos">Los Cabos</option>
                <option value="Mazatlán">Mazatlán</option>
                <option value="Huatulco">Huatulco</option>
                <option value="Puerto Escondido">Puerto Escondido</option>
            </select>
            <br><br>
        </section>

        <h2>Actividades turisticas</h2>
        <section class="actividades">
            <div class="con-act">
                <label for="opcion-1">
                    <input type="checkbox" value="Buceo" id="opcion-1" name="activida[]">
                    Buceo
                </label>
                
                <label for="opcion-2">
                    <input type="checkbox" value="Paseo en lancha" id="opcion-2" name="activida[]">
                    Paseo en lancha
                </label>
                
                <label for="opcion-3">
                    <input type="checkbox" value="Visita a zonas arqueológicas" id="opcion-3" name="activida[]">
                    Visita a zonas arqueológicas
                </label>
                
                <label for="opcion-4">
                    <input type="checkbox" value="Senderismo" id="opcion-4" name="activida[]">
                    Senderismo
                </label>
                
                <label for="opcion-5">
                    <input type="checkbox" value="Pesca deportiva" id="opcion-5" name="activida[]">
                    Pesca deportiva
                </label>
                
                <label for="opcion-6">
                    <input type="checkbox" value="Recorrido gastronómico" id="opcion-6" name="activida[]">
                    Recorrido gastronómico
                </label>
                
                <label for="opcion-7">
                    <input type="checkbox" value="Visita a museos" id="opcion-7" name="activida[]">
                    Visita a museos
                </label>
            </div>
        </section>

        <h2>Servicios adicionales</h2>
        <section class="servicios">
            <div class="con-serv">
                <label for="2opcion-1">
                    <input type="checkbox" value="Transporte al aeropuerto" id="2opcion-1" name="ser[]">
                    Transporte al aeropuerto
                </label>
                
                <label for="2opcion-2">
                    <input type="checkbox" value="Desayuno incluido" id="2opcion-2" name="ser[]">
                    Desayuno incluido
                </label>
                
                <label for="2opcion-3">
                    <input type="checkbox" value="Hospedaje de lujo" id="2opcion-3" name="ser[]">
                    Hospedaje de lujo
                </label>
                
                <label for="2opcion-4">
                    <input type="checkbox" value="Seguro de viajero" id="2opcion-4" name="ser[]">
                    Seguro de viajero
                </label>
                
                <label for="2opcion-5">
                    <input type="checkbox" value="Renta de automóvil" id="2opcion-5" name="ser[]">
                    Renta de automóvil
                </label>

                <label for="2opcion-6">
                    <input type="checkbox" value="Guía turístico" id="2opcion-6" name="ser[]">
                    Guía turístico
                </label>
            </div>
        </section>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>