<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Nueva Página</title>
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}"> <!-- Usamos asset() para CSS -->
</head>
<body>

    <div class="header">
        <div class="logo-container">
            <a href="{{ url('/main') }}" class="logo-button"> <!-- Usamos url() para la ruta -->
                <div class="logo-background">
                    <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo"> <!-- Usamos asset() para las imágenes -->
                </div>
            </a>
        </div>
        <div class="nav-links">
            <p><a href="#">Nosotros</a> | <a href="#">Contacto</a> | <a href="#">Blog</a></p>
        </div>
        <div class="header-actions">
            <div class="search-bar">
                <input type="text" placeholder="Buscar...">
            </div>
            <div class="cart">
                <img src="{{ asset('img/cart.png') }}" alt="Carrito de Compras"> <!-- Usamos asset() para las imágenes -->
            </div>
            <div class="login-register">
                <a href="{{ url('/perfil') }}">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="user-icon"> <!-- Usamos asset() para las imágenes -->
                </a>
            </div>
        </div>
    </div>

    <div class="product-page">
        <div class="product-images">
            <img src="{{ asset('img/Laptop-MSI-Raider-GE76HX.webp') }}" alt="Laptop MSI Raider GE78HX" class="main-image"> <!-- Usamos asset() para las imágenes -->
            <div class="thumbnail-images">
                <img src="{{ asset('img/Laptop-MSI-Raider-GE76HX2.webp') }}" alt="Vista lateral"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Laptop-MSI-Raider-GE76HX3.webp') }}" alt="Vista trasera"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Laptop-MSI-Raider-GE76HX4.webp') }}" alt="Vista interior"> <!-- Usamos asset() para las imágenes -->
            </div>
        </div>
        <div class="product-details">
            <h1>Laptop Gamer MSI Raider GE78HX</h1>
            <p class="price">$63,429.00</p>
            <p class="availability">Disponibles: 41</p>
            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button class="add-to-cart">Añadir al Carrito</button>
            <div class="product-description">
                <h2>Acerca de este artículo</h2>
                <p>La Laptop Gamer MSI Raider GE78HX es un potente dispositivo diseñado para satisfacer las necesidades de los jugadores más exigentes. Equipado con un procesador Intel Core i9-13950HX de 24 núcleos, este modelo ofrece un rendimiento excepcional, alcanzando frecuencias de hasta 5.5 GHz en modo turbo. La arquitectura de 64 bits del sistema operativo Windows 11 Home garantiza una experiencia fluida y eficiente.</p>
                <p>La pantalla de 17 pulgadas presenta una resolución Quad HD de 2560x1440, proporcionando imágenes nítidas y vibrantes, ideales para juegos y multimedia. La tarjeta gráfica GeForce RTX 4080, perteneciente a la línea GeForce, asegura gráficos de alta calidad y un rendimiento sobresaliente en los títulos más recientes. Además, cuenta con gráficos integrados Intel UHD Graphics para tareas cotidianas.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
            © 2024 - 2024 TechZone</p>
    </footer>

</body>
</html>
