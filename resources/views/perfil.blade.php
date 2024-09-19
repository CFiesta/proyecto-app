<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - TechZone</title>
    <link rel="stylesheet" href="{{ asset('css/styles6.css') }}"> <!-- Usamos la función asset() de Blade -->
</head>
<body>

    <div class="header">
        <div class="logo-container">
            <a href="{{ url('/main') }}" class="logo-button"> <!-- Utilizamos url() para las rutas -->
                <div class="logo-background">
                    <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo"> <!-- asset() para la imagen -->
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
                <a href="{{ url('carrito') }}"> <!-- Cambia el URL según corresponda -->
                    <img src="{{ asset('img/cart.png') }}" alt="Carrito de compras">
                </a>
            </div>
            <div class="login-register">
                <a href="{{ url('/perfil') }}">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="user-icon"> <!-- asset() para la imagen -->
                </a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="profile-section">
            <img src="{{ asset('img/usuario.png') }}" alt="Avatar" class="avatar" id="avatar-img"> <!-- asset() para la imagen -->
            <input type="file" id="file-input" style="display: none;">
            <button class="edit-btn" id="edit-btn">Editar</button>
        </div>
        <div class="form-section">
            <h2>Datos Personales</h2>
            <form>
                <label for="email">Email</label>
                <input type="email" id="email">
                
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
            </form>

            <h2>Datos de Envío</h2>
            <form>
                <label for="estado">Estado</label>
                <input type="text" id="estado">
                
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad">
                
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono">
                
                <label for="calle">Calle</label>
                <input type="text" id="calle">
                
                <label for="numero">Número</label>
                <input type="text" id="numero">

                <label for="colonia">Colonia</label>
                <input type="text" id="colonia">
                
                <label for="cp">Código Postal</label>
                <input type="text" id="cp">
                
                <button type="submit" class="continue-btn">Continuar</button>
            </form>
        </div>

        <div class="side-panel">
            <h2>Dirección de Envío</h2>
            <a href="#">Editar Perfil</a>
            
            <a href="#">Mis Pedidos</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
        © 2024 - 2024 TechZone</p>
    </footer>

    <script src="{{ asset('js/cart.js') }}"></script> <!-- asset() para el script -->
    
</body>
</html>
