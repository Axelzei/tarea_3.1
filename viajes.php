<html>
<head></head>
<body>
    <form action="recibe_opciones.php" method="POST">
        <h1>Prepara tu viaje :D</h1>

        <h3>Datos del cliente</h3>
        <label for="nom">Ingrese tu nombre: </label>
        <input type="text" step="any" name="nom" id="nom" required>
        <br>
        <label for="email">Ingrese tu nombre: </label>
        <input type="email" step="any" name="email" id="email" required>
        <br><br>
        <hr>

        <h3>Destinos turisticos</h3>
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
        <hr>

        <h3>Actividades turisticas</h3>
        <label for="opcion-1">
            <input type="checkbox" value="Buceo" id="opcion-1" name="activida[]">
            Buceo
        </label>
        <br>
        <label for="opcion-2">
            <input type="checkbox" value="Paseo en lancha" id="opcion-2" name="activida[]">
            Paseo en lancha
        </label>
        <br>
        <label for="opcion-3">
            <input type="checkbox" value="Visita a zonas arqueológicas" id="opcion-3" name="activida[]">
            Visita a zonas arqueológicas
        </label>
        <br>
        <label for="opcion-4">
            <input type="checkbox" value="Senderismo" id="opcion-4" name="activida[]">
            Senderismo
        </label>
        <br>
        <label for="opcion-5">
            <input type="checkbox" value="Pesca deportiva" id="opcion-5" name="activida[]">
            Pesca deportiva
        </label>
        <br>
        <label for="opcion-6">
            <input type="checkbox" value="Recorrido gastronómico" id="opcion-6" name="activida[]">
            Recorrido gastronómico
        </label>
        <br>
        <label for="opcion-7">
            <input type="checkbox" value="Visita a museos" id="opcion-7" name="activida[]">
            Visita a museos
        </label>
        <br><br>
        <hr>

        <h3>Servicios adicionales</h3>
        <label for="2opcion-1">
            <input type="checkbox" value="Transporte al aeropuerto" id="2opcion-1" name="activida[]">
            Transporte al aeropuerto
        </label>
        <br>
        <label for="2opcion-2">
            <input type="checkbox" value="Desayuno incluido" id="2opcion-2" name="activida[]">
            Desayuno incluido
        </label>
        <br>
        <label for="2opcion-3">
            <input type="checkbox" value="Hospedaje de lujo" id="2opcion-3" name="activida[]">
            Hospedaje de lujo
        </label>
        <br>
        <label for="2opcion-4">
            <input type="checkbox" value="Seguro de viajero" id="2opcion-4" name="activida[]">
            Seguro de viajero
        </label>
        <br>
        <label for="2opcion-5">
            <input type="checkbox" value="Renta de automóvil" id="2opcion-5" name="activida[]">
            Renta de automóvil
        </label>
        <br>
        <label for="2opcion-6">
            <input type="checkbox" value="Guía turístico" id="2opcion-6" name="activida[]">
            Guía turístico
        </label>
        <br><br>
        <hr>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>