<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
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
	
	<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form action="php/login_form.php" method="post" id="loginform" name="loginForm">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="login">Login</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="Registro.php">¿No tienes Cuenta? Registrate</a>
						<a href="#">Volver</a>
					</div>
                </div>
            </div>
        </div>
	
</body>