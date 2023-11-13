<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Registro.css">
</head>

<body>
    <div class="franja">
        <a href="Inicio.html" class="gala">Maderas GaLa </a>
    </div>
    <header class="header">
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="Cotizar.php">Cotizar</a></li>
                <li><a href="Contacto.php">Contacto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="Registro.php">Registrate</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>REGISTRO DEL USUARIO </h1>
        <form method="post" action="php/registro_form.php" autocomplete="off" id="cotizacionForm">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="name" required>

            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Juan@gmail.com" required>

            <label for="Telefono">Telefono:</label>
            <input type="number" id="Telefono" name="phone" placeholder="8112347865" required>
        
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            
            <div id="resultado"></div>
            <center><input type="submit" name="registro" class="btn" onClick="myFunction()"></center>
        </form>
    </div>

    <script>
        function myFunction() {
            window.location.href="index.php"
        }
    </script>
</body>

</html>