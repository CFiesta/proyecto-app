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
            <a href="{{ url('/main') }}" class="logo-button"> <!-- Utilizamos url() para la ruta -->
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
                <img src="{{ asset('img/cart.png') }}" alt="Carrito de Compras"> <!-- asset() para la imagen -->
            </div>
            <div class="login-register">
                <a href="{{ url('/perfil') }}">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="user-icon"> <!-- asset() para la imagen -->
                </a>
            </div>
        </div>
    </div>

    <!-- Product Page -->
    <div class="product-page">
        <div class="product-images">
            <img src="{{ asset('img/AMD-Ryzen-7-5800X4.jpg') }}" alt="NZXT H1 Blanco" class="main-image"> <!-- asset() para la imagen -->
            <div class="thumbnail-images">
                <img src="{{ asset('img/AMD-Ryzen-7-5800X.jpg') }}" alt="Vista lateral"> <!-- asset() para la imagen -->
                <img src="{{ asset('img/AMD-Ryzen-7-5800X2.jpg') }}" alt="Vista trasera"> <!-- asset() para la imagen -->
                <img src="{{ asset('img/AMD-Ryzen-7-5800X3.jpg') }}" alt="Vista interior"> <!-- asset() para la imagen -->
            </div>
        </div>
        <div class="product-details">
            <h1>AMD - Procesador RYZEN 7 5800X, 3.8GHz, 8 Núcleos - Socket AM4</h1>
            <p class="price">$3,685.00</p>
            <p class="availability">Disponibles: 12</p>
            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button class="add-to-cart">Añadir al Carrito</button>
            <div class="product-description">
                <h2>Acerca de este artículo</h2>
                <p>Obtén rendimiento de alta velocidad en los juegos, con el ​mejor procesador para computadoras de escritorio del mundo <br>
                    Diseña más rápido. Procesa más rápido. Itera más rápido. <br>
                    Crea más y más rápido con los procesadores AMD Ryzen. <br>
                    Línea de productos AMD Ryzen 7 Reloj base de 3.8 GHz, reloj de aumento máximo de 4.7 GHz</p>
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
