<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Pago y Envío - TechZone</title>
    <link rel="stylesheet" href="{{ asset('css/styles5.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Commissioner&display=swap" rel="stylesheet">
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

    <div class="checkout-container">
        <section class="payment-section">
            <h2>ELIGE TU MÉTODO DE PAGO</h2>
            <form action="{{ route('payment.process') }}" method="POST">
                @csrf
                <div class="payment-method">
                    <label>
                        <input type="radio" name="payment_method" value="tarjeta" checked>
                        Tarjeta
                    </label>
                    <hr class="divider">
                    <div class="payment-details">
                        <div class="form-group">
                            <label for="card_number">Número de Tarjeta</label>
                            <input type="text" id="card_number" name="card_number" placeholder="Número de tarjeta" required>
                        </div>
                        <div class="form-group">
                            <label for="cardholder_name">Nombre del Propietario</label>
                            <input type="text" id="cardholder_name" name="cardholder_name" placeholder="Nombre del propietario" required>
                        </div>
                        <div class="form-group">
                            <label for="ccv">CCV</label>
                            <input type="text" id="ccv" name="ccv" placeholder="CCV" required>
                        </div>
                    </div>
                    <div class="payment-actions">
                        <button type="reset" class="btn reset-btn">Borrar</button>
                        <button type="submit" class="btn continue-btn">Continuar</button>
                    </div>
                </div>
            </form>
        </section>

        <section class="shipping-section">
            <h2>DIRECCIÓN DE ENVÍO</h2>
            <form action="{{ route('shipping.process') }}" method="POST">
                @csrf
                <div class="shipping-details">
                    <h3>Datos Personales</h3>
                    <hr class="divider2">
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="street">Calle</label>
                        <input type="text" id="street" name="street" required>
                    </div>
                    <div class="form-group">
                        <label for="colony">Colonia</label>
                        <input type="text" id="colony" name="colony" required>
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Código Postal</label>
                        <input type="text" id="postal_code" name="postal_code" required>
                    </div>
                    <div class="shipping-actions">
                        <button type="submit" class="btn continue-btn">Continuar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <footer>
        <p>Tiendas de marcas | ¿Cómo comprar? | Historial de pedidos | Configurador de PC | Garantías y devoluciones | Preguntas frecuentes | Quiénes somos | Condiciones generales | Aviso de privacidad | ¿Quieres ser proveedor? | Únete a nuestro equipo
        © 2024 - 2024 TechZone</p>
    </footer>
</body>
</html>
