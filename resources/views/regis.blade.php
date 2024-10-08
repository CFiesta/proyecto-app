<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechZone - Nueva Página</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}"> <!-- Usamos asset() para CSS -->
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

    <div class="form-container">
        <div class="form-section">
            <h2>CREAR UNA NUEVA CUENTA</h2>
            <div class="form-box">
                <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo"> <!-- Usamos asset() para las imágenes -->
                <h3>Registro de nuevo usuario</h3>
                <form action="#">
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Apellidos">
                    <input type="email" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <input type="password" placeholder="Confirmar Contraseña">
                    <button type="submit">Registrarme</button>
                </form>
            </div>
        </div>
        <div class="form-section">
            <h2>INICIAR SESIÓN</h2>
            <div class="form-box">
                <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo"> <!-- Usamos asset() para las imágenes -->
                <h3>¡Bienvenido de nuevo!</h3>
                <form action="#">
                    <input type="text" placeholder="Nombre de Usuario">
                    <input type="password" placeholder="Contraseña">
                    <a href="#">¿Olvidaste tu Contraseña?</a>
                    <button type="submit">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
        © 2024 - 2024 TechZone</p>
    </footer>

</body>
</html>
