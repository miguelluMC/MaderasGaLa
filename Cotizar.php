<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador de Productos</title>
    <link rel="stylesheet" href="css/cotizar.css">
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
        <h1>Cotizador de Productos</h1>
        <form method="post" action="phpmailer.php" autocomplete="off" id="cotizacionForm">
            <label for="nombre">Nombre del cliente:</label>
            <input type="text" id="nombre" name="name" placeholder="Juan Perez Perez"required>
            
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Juan@gmail.com"required>
            
            <label for="producto">Producto:</label>
            <select id="producto" name="producto">
                <option value="pilotes">Pilotes</option>
                <option value="tablas">Tablas</option>
            </select>
            
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="tipo-pago">Tipo de pago:</label>
            <select id="tipo-pago" name="tipo-pago">
                <option value="efectivo">Efectivo</option>
                <option value="tarjeta">Tarjeta de crédito</option>
                <option value="transferencia">Transferencia bancaria</option>
            </select>
            
            <label for="comentarios">Comentarios adicionales:</label>
            <textarea id="comentarios" name="descripcion" rows="4"></textarea>
            
            <input type="submit" name="cotizar" class="btn">
        </form>
        
        <div id="resultado"></div>
    </div>

    <script>

        const form = document.getElementById('cotizacionForm');
        const resultado = document.getElementById('resultado');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const producto = document.getElementById('producto').value;
            const cantidad = parseFloat(document.getElementById('cantidad').value);
            const tipoPago = document.getElementById('tipo-pago').value;
            const comentarios = document.getElementById('comentarios').value;

            const subtotal = cantidad * precio;
            let descuento = 0;

            if (subtotal >= 500 && tipoPago === 'tarjeta') {
                descuento = subtotal * 0.1;
            }

            const total = subtotal - descuento;

            resultado.innerHTML = `
                <h2>Resumen de Cotización</h2>
                <p><strong>Nombre del cliente:</strong> ${nombre}</p>
                <p><strong>Correo electrónico:</strong> ${email}</p>
                <p><strong>Producto:</strong> ${producto}</p>
                <p><strong>Cantidad:</strong> ${cantidad}</p>
                <p><strong>Tipo de pago:</strong> ${tipoPago}</p>
                <p><strong>Comentarios adicionales:</strong> ${comentarios}</p>
                <p><strong>Subtotal:</strong> $${subtotal.toFixed(2)}</p>
                <p><strong>Descuento:</strong> $${descuento.toFixed(2)}</p>
                <p><strong>Total:</strong> $${total.toFixed(2)}</p>
            `;
        });
    </script>
</body>
</html>

