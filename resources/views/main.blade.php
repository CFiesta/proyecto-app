<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechZone - Encuentra las mejores promociones y productos destacados en tecnología.">
    <title>TechZone - Promociones</title>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header class="header">
        <div class="logo-container">
            <a href="{{ url('main') }}" class="logo-button">
                <div class="logo-background">
                    <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="Logo de TechZone" class="logo">
                </div>
            </a>
        </div>
        <nav class="nav-links">
            <p><a href="#">Nosotros</a> | <a href="#">Contacto</a> | <a href="#">Blog</a></p>
        </nav>
        <div class="header-actions">
            <div class="search-bar">
                <input type="text" placeholder="Buscar...">
            </div>
            <div class="cart">
                <a href="{{ url('carrito') }}"> <!-- Cambia el URL según corresponda -->
                    <img src="{{ asset('img/cart.png') }}" alt="Carrito de compras">
                </a>
            </div>
            <div class="login-register">
                <a href="{{ url('perfil') }}">
                    <img src="{{ asset('img/usuario.png') }}" alt="Icono de usuario" class="user-icon">
                </a>
            </div>
        </div>
    </header>

    <div class="main-banner">
        <img src="{{ asset('img/C.png') }}" alt="Banner promocional" class="banner-image">
    </div>

    <h2 class="featured-products-title">PRODUCTOS DESTACADOS</h2>
    <hr class="divider">

    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
        © 2024 - 2024 TechZone</p>
    </footer>

</body>
</html>
