<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final Programación en PHP</title>

    <!--Estilo para desktop-->
    <link href="../css/desktop.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1025px)" />

    <!--Estilo para tablet-->
    <link href="../css/tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width:768px) and (max-width:1024px)" />

    <!--Estilo para movil-->
    <link href="../css/movil.css" rel="stylesheet" type="text/css" media="only screen and (min-width:280px) and (max-width:767px)" />
</head>
<body>
    
    <header>
        <img src="../img/header.png" id="header">
    </header>

    <h1>
        <img id="h1" src="../img/titulo.png">
    </h1>

    

    <nav>
        <ul id="menu">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="conversiones.php">Conversiones</a></li>
            <li><a href="#">Matemáticas &#65516;</a>
                <ul class="hidden">
                    <li><a href="serie.php">Serie Fibonacci</a></li>
                    <li><a href="factoriales.php">Obtener Factorial</a></li>
                    <li><a href="comparacion.php">Mayor y menor</a></li>
                </ul>
            </li>
            <li><a href="sobre.php">Sobre mí</a></li>
            
    </ul>
    </nav>

    <section>

        <div id="caja1"></div>
        <div id="caja2"></div>
        <div id="caja3"></div>

        <div id="formulario">
            <h2><img id="h2" src="../img/titulo2.png"></h2>

            <p>Ingresa una medida y luego selecciona la medida de destino</p>

            <br>
            
            <form name="form1" method="POST" action="../php/convertir.php">

                <p>Valor a convertir: <input type="text" id="txtValor" name="txtValor">
                    <select name="selmedidas">
                        <option value="">Seleccione...</option>
                        <option value="digito">Bit (dígito binario)</option>
                        <option value="byte">Byte (caracter)</option>
                        <option value="kilo">Kilobyte</option>
                        <option value="mega">Megabyte</option>
                        <option value="giga">Gigabyte</option>
                        <option value="tera">Terabyte</option>
                    </select>
            </p> 
            
            <p>Convertir a la medida de: </p>
        
            <p>
                <input type="radio" name="medidas" value="binario">Bit (dígito binario)
                <br><input type="radio" name="medidas" value="bytes">Byte (caracter)
                <br><input type="radio" name="medidas" value="kilobyte">Kilobyte
                <br><input type="radio" name="medidas" value="megabyte">Megabyte
                <br><input type="radio" name="medidas" value="gigabyte">Gigabyte
                <br><input type="radio" name="medidas" value="terabyte">Terabyte
            </P>  
            
            <p><input type="submit" name="btnConvertir" value="Convertir"></p>
                
                
            </form>
        </div>

       

    </section>

    <footer>
        <img id="footer" src="../img/footer.png">        
    </footer>
</body>
</html>