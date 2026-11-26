<html>
<head></head>
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
            <br>
            <label for="email">Ingrese tu nombre: </label>
            <input type="email" step="any" name="email" id="email" required>
            <br><br>
            <hr>
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
            <hr>
        </section>

        <section class="actividades">
            <h2>Actividades turisticas</h2>
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
        </section>

        <section class="servicios">
            <h2>Servicios adicionales</h2>
            <label for="2opcion-1">
                <input type="checkbox" value="Transporte al aeropuerto" id="2opcion-1" name="ser[]">
                Transporte al aeropuerto
            </label>
            <br>
            <label for="2opcion-2">
                <input type="checkbox" value="Desayuno incluido" id="2opcion-2" name="ser[]">
                Desayuno incluido
            </label>
            <br>
            <label for="2opcion-3">
                <input type="checkbox" value="Hospedaje de lujo" id="2opcion-3" name="ser[]">
                Hospedaje de lujo
            </label>
            <br>
            <label for="2opcion-4">
                <input type="checkbox" value="Seguro de viajero" id="2opcion-4" name="ser[]">
                Seguro de viajero
            </label>
            <br>
            <label for="2opcion-5">
                <input type="checkbox" value="Renta de automóvil" id="2opcion-5" name="ser[]">
                Renta de automóvil
            </label>
            <br>
            <label for="2opcion-6">
                <input type="checkbox" value="Guía turístico" id="2opcion-6" name="ser[]">
                Guía turístico
            </label>
            <br><br>
            <hr>
        </section>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>