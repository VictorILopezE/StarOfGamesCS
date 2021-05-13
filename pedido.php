<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estetica.css">
    <script type="text/javascript" src="carrito.js"></script>
    <title>StarofGamesProd</title>
</head>
<body onload="numeroGuia()">
	<header>
        <div class="cabeza">
            <div class="logo"></div>
        </div>
    </header>

        <div id="navegacion">
            <ul>
                <li><a class="ini" href="Index.html">Inicio</a></li>
                <li>|</li>
                <li><a class="in" href="Productos.html">Productos</a></li>
                <li>|</li>
                <li><a class="pro" href="Contactos.html">Contactos</a></li>
            </ul>
        </div>

        <section class="form-lb1">
            <div></div>>
                <label class="lb1">
                    Gracias por su compra
                </label>

                <label class="lb2">
                    <br>
                    <br>
                    <br>
                    <br>
                    Datos de envio
                    <br>
                    <br>
                    Nombre: <?php echo $_POST["nombre"]; ?>
                    <br>
                    Correro Elctronico: <?php echo $_POST["correo"]; ?>
                    <br>
                    Direccion: <?php echo $_POST["direccion"]; ?>
                    <br>
                    Codigo Postal: <?php echo $_POST["cdpostal"]; ?>

                </label>

            </div>
        </section>
</body>
        <footer>
            <div class= "pie">
            <h4>Copyrigth 2021 Todos los Derechos Reservados</h4>
            </div>
        </footer>
</html>