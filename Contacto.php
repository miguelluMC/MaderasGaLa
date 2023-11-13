<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/contactocss.css">
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
        <h2>Información de Contacto</h2>
        <address>
            <p>Maderas GaLa </p>
            <p>Dirección: Simon Bolívar 1391, Reinera, 26730 Sabinas, Coah.</p>
            <p>Teléfono: (123) 456-7890</p>
            <p>Correo Electrónico: info@empresa.com</p>
        </address>
        
        <h2>Ubicación</h2>
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1272913.5041668736!2d-101.19787695110611!3d28.208526583498887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDUxJzQ3LjkiTiAxMDHCsDA3JzI2LjQiVw!5e0!3m2!1ses-419!2smx!4v1696467005498!5m2!1ses-419!2smx"
             style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>

    <script>
        function initMap() {
            // Coordenadas de la ubicación de la empresa
            var empresaLocation = { lat: 40.7128, lng: -74.0060 }; // Reemplaza con las coordenadas de tu ubicación

            // Crea un mapa centrado en la ubicación de la empresa
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15, // Ajusta el nivel de zoom
                center: empresaLocation
            });

            // Coloca un marcador en la ubicación de la empresa
            var marker = new google.maps.Marker({
                position: empresaLocation,
                map: map,
                title: 'Maderas GaLa' // Reemplaza con el nombre de tu empresa
            });
        }
    </script>
    <!-- Incluye la API de Google Maps y reemplaza 'YOUR_API_KEY' con tu clave de API -->
   
</body>
</html>
