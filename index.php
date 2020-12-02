<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final Programación en PHP</title>

    <!--Estilo para desktop-->
    <link href="css/desktop.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1025px)" />

    <!--Estilo para tablet-->
    <link href="css/tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width:768px) and (max-width:1024px)" />

    <!--Estilo para movil-->
    <link href="css/movil.css" rel="stylesheet" type="text/css" media="only screen and (min-width:280px) and (max-width:767px)" />

</head>

<body>

    <header>
        <img src="img/header.png" id="header">
    </header>

    <h1>
        <img id="h1" src="img/titulo.png">
    </h1>

    

    <nav>
        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="php/conversiones.php">Conversiones</a></li>
            <li><a href="#">Matemáticas &#65516;</a>
                <ul class="hidden">
                    <li><a href="php/serie.php">Serie Fibonacci</a></li>
                    <li><a href="php/factoriales.php">Obtener Factorial</a></li>
                    <li><a href="php/comparacion.php">Mayor y menor</a></li>
                </ul>
            </li>
            <li><a href="php/sobre.php">Sobre mí</a></li>
            
        </ul>
    </nav>

    <section>
        <div id="caja1"></div>
        <div id="caja2"></div>
        <div id="caja3"></div>
        <div id="caja4"></div>
    </section>

    <footer>
        <img id="footer" src="img/footer.png">        
    </footer>
    
</body>
</html>