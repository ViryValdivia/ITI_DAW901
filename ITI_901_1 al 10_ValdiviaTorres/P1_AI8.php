<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Individuales</title>
    <!--Icono del sitio web-->
    <link rel="icon" href="Logo UTL.ico" type="image/x-ico" />
    <link rel="shortcut icon" type="image/x-icon" href="Logo UTL.ico" />

    <meta name="theme-color" content="#53A6DC" />
    <style>
        * {
            margin: 0px;
        }

        body {
            font-family: "Times New Roman", Times, serif;
        }

        a {
            text-decoration: none;
        }

        nav {
            background-color: black;
            width: 100%;
            height: auto;
            position: sticky;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: whitesmoke;
            display: inline-table;
            margin-left: 20px;
            margin: 2px 3px 20px 3px;
        }

        nav a:hover {
            text-shadow: 3px 3px slategray;
            background-color: #338DDD;
            border-radius: 3%;
        }

        #Actividad_1_5::after {
            white-space: pre;
        }

        #Actividaades6::before {
            white-space: pre-line;
        }

        footer {
            background-color: white;
            width: 100%;
            height: 10vh;
            position: sticky;
        }

        footer h3 {
            color: white;
            font-family: Verdana;
            font-weight: normal;
            top: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <br>
        <a id="href" href="index.php">Inicio</a>
    </nav>
    <p>
        <?php
        include('P1_AI8_Modelo.php');
        include('P1_AI8_Functions.php');

        titulo("Creación de objetos persona");

        $mPersona         = new Persona();
        $mPersona->nombre = "Andrea";
        $mPersona->edad   = 23;

        echo var_dump($mPersona) . "<br>";

        $mPersona2         = new Persona();
        $mPersona2->nombre = "Pedro";
        $mPersona2->edad   = 22;

        echo var_dump($mPersona2) . "<br>";

        titulo("Imprimir valores");
        echo  "$mPersona->nombre tiene $mPersona->edad  años<br>";
        echo "$mPersona2->nombre tiene $mPersona2->edad años<br>";

        titulo("Imprimir desde función");
        $mPersona->Saluda();
        $mPersona2->RespondeSaludo($mPersona->nombre);

        titulo("Imprimir pasando parámetros");

        titulo("Retornar valores");
        $edadPersona1 = $mPersona->getEdad();
        echo "$edadPersona1 años<br>";

        titulo("Asignar un valor");
        $mPersona->setEdad(21);
        $edadPersona1 = $mPersona->getEdad();
        echo "$edadPersona1 años<br>";

        titulo("Variable estática");
        echo Persona::$mayoriaEdad . "<br>";

        titulo("Función estática");
        echo Persona::getMayoriaEdad() . "<br>";

        ?>
    </p>
    <hr>
    <br>
    <footer>
        
    </footer>
</body>

</html>