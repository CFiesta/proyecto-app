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
            <img src="{{ asset('img/Radeon-RX-6600.webp') }}" alt="Tarjeta de video Radeon RX 6600" class="main-image"> <!-- Usamos asset() para las imágenes -->
            <div class="thumbnail-images">
                <img src="{{ asset('img/Radeon-RX-66002.webp') }}" alt="Vista lateral"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Radeon-RX-660023.jpg') }}" alt="Vista trasera"> <!-- Usamos asset() para las imágenes -->
                <img src="{{ asset('img/Radeon-RX-66004.webp') }}" alt="Vista interior"> <!-- Usamos asset() para las imágenes -->
            </div>
        </div>
        <div class="product-details">
            <h1>Tarjeta de video Radeon RX 6600 8GB GDDR6</h1>
            <p class="price">$3,899.00</p>
            <p class="availability">Disponibles: 42</p>
            <div class="quantity">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button class="add-to-cart">Añadir al Carrito</button>
            <div class="product-description">
                <h2>Acerca de este artículo</h2>
                <p>La tarjeta de video ASRock AMD Radeon RX 6600 Challenger es un componente informático diseñado para mejorar el rendimiento gráfico en sistemas de escritorio. Con una velocidad de reloj del procesador que alcanza los 2491 MHz y una frecuencia del procesador de 1626 MHz, esta tarjeta ofrece un alto nivel de potencia para ejecutar aplicaciones exigentes.</p>
                <p>El tipo de embalaje utilizado por este producto es la caja, mientras que su peso total es de aproximadamente 627 g. La cantidad total de DisplayPorts disponibles en la tarjeta son tres, lo cual permite conectar múltiples monitores al mismo tiempo.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
            © 2024 - 2024 TechZone</p>
    </footer>

</body>
</html>
