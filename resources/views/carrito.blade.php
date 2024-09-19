<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - TechZone</title>
    <link rel="stylesheet" href="{{ asset('css/styles4.css') }}">
</head>
<body>

    <div class="header">
        <div class="logo-container">
            <a href="{{ url('main') }}" class="logo-button">
                <div class="logo-background">
                    <img src="{{ asset('img/TechZone_Logo_Dark.png') }}" alt="TechZone Logo" class="logo">
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
                <a href="{{ url('perfil') }}">
                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="user-icon">
                </a>
            </div>
        </div>
    </div>
    
    
    
    <div class="cart-container">
        <div class="products">
            <div class="product">
                <img src="{{ asset('img/product1.png') }}" alt="NZXT H9 Elite">
                <p>NZXT H9 Elite</p>
                <div class="quantity">
                    <label>Cantidad: </label>
                    <input type="number" min="1" value="1" class="quantity-input">
                </div>
                <p class="price">$3,699.00</p>
                <button class="remove-btn">Quitar</button>
            </div>
            <div class="product">
                <img src="{{ asset('img/product2.png') }}" alt="Radeon RX 6600">
                <p>Tarjeta de video Radeon RX 6600 8GB GDDR6</p>
                <div class="quantity">
                    <label>Cantidad: </label>
                    <input type="number" min="1" value="1" class="quantity-input">
                </div>
                <p class="price">$1,599.00</p>
                <button class="remove-btn">Quitar</button>
            </div>
            <div class="product">
                <img src="{{ asset('img/product3.png') }}" alt="Monitor Samsung G4 LED">
                <p>Monitor Gamer Samsung Odyssey G4 LED</p>
                <div class="quantity">
                    <label>Cantidad: </label>
                    <input type="number" min="1" value="1" class="quantity-input">
                </div>
                <p class="price">$2,899.00</p>
                <button class="remove-btn">Quitar</button>
            </div>
        </div>

        <div class="summary">
            <h3>Resumen</h3>
            <p>Subtotal: <span id="subtotal">$8,197.00</span></p>
            <p>Envío: <span id="shipping">$0.00</span></p>
            <h2>Total a pagar: <span id="total">$8,197.00</span></h2>
            <label>
                <input type="checkbox" id="terms"> Acepto los <a href="#">Términos y Condiciones</a>
            </label>
            <div class="actions">
                <button class="clear-btn">Borrar</button>
                <button class="buy-btn" disabled>Comprar</button>
            </div>
        </div>
    </div>
    
    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
        © 2024 - 2024 TechZone</p>
    </footer>

    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
