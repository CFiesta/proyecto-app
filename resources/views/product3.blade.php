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
            <img src="{{ asset('img/Monitor-Samsung-Odyssey-G4.jpg') }}" alt="Monitor Samsung Odyssey G4" class="main-image"> <!-- Usamos asset() para las imágenes -->
            <div class="thumbnail-images">
                <img src="{{ asset('img/Monitor-Samsung-Odyssey-G42.jpg') }}" alt="Vista lateral"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Monitor-Samsung-Odyssey-G43.jpg') }}" alt="Vista trasera"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Monitor-Samsung-Odyssey-G44.jpg') }}" alt="Vista interior"> <!-- Usamos asset() para las imágenes -->
            </div>
        </div>
        <div class="product-details">
            <h1>Monitor Gamer Samsung Odyssey G4 LED</h1>
            <p class="price">$5,229.00</p>
            <p class="availability">Disponibles: 81</p>
            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button class="add-to-cart">Añadir al Carrito</button>
            <div class="product-description">
                <h2>Acerca de este artículo</h2>
                <p>El Monitor Gamer Samsung Odyssey G4 LED 25 Full HD G-Sync, LS25BG400ELXZX es una pantalla plana de 63.5 cm (25") con una relación de aspecto nativa de 16:9 y resolución de imagen de 1920 x 1080 Pixeles. Cuenta con tecnología LED que brinda un alto nivel de luminosidad y contraste para obtener imágenes nítidas y detalladas.
                Este monitor tiene un tiempo de respuesta rápido de solo 1 ms, lo que permite disfrutar del contenido sin interrupciones ni desenfoques en las escenas más rápidas o dinámicas. Además, cuenta con la función Flicker Free Technology que reduce el parpadeo en la pantalla para evitar fatiga visual durante largas sesiones frente al ordenador.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
            © 2024 - 2024 TechZone</p>
    </footer>

</body>
</html>
