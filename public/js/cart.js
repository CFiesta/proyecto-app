document.addEventListener('DOMContentLoaded', function () {
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const subtotalElement = document.getElementById('subtotal');
    const totalElement = document.getElementById('total');
    const termsCheckbox = document.getElementById('terms');
    const buyButton = document.querySelector('.buy-btn');

    // Actualiza el subtotal inicial si es necesario
    updateSubtotal(); 

    quantityInputs.forEach(input => {
        input.addEventListener('change', function () {
            updateSubtotal();
        });
    });

    termsCheckbox.addEventListener('change', function () {
        buyButton.disabled = !termsCheckbox.checked;
    });

    function updateSubtotal() {
        let newSubtotal = 0;
        quantityInputs.forEach(input => {
            const quantity = parseInt(input.value) || 0; // Valor predeterminado en caso de error
            const priceElement = input.closest('.product').querySelector('.price');
            const price = parseFloat(priceElement.textContent.replace('$', '').replace(',', '')) || 0; // Valor predeterminado en caso de error
            newSubtotal += quantity * price;
        });
        subtotalElement.textContent = `$${newSubtotal.toFixed(2)}`;
        totalElement.textContent = `$${newSubtotal.toFixed(2)}`;
    }
});

// Código para el manejo del archivo del avatar
const editBtn = document.getElementById('edit-btn');
const fileInput = document.getElementById('file-input');
const avatarImg = document.getElementById('avatar-img');

if (editBtn && fileInput && avatarImg) {
    editBtn.addEventListener('click', function() {
        fileInput.click();  
    });

    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0]; 
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                avatarImg.src = e.target.result;  
            }
            reader.readAsDataURL(file); 
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Manejo de clic en el botón "Añadir al carrito"
    document.querySelectorAll('.btn-add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            alert(`Producto ${productId} añadido al carrito.`);
        });
    });

    // Manejo de clic en el botón "Ver más"
    document.querySelectorAll('.view-more').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            window.location.href = `/products/${productId}`;
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar elementos del DOM
    const productsContainer = document.querySelector('.products');
    const subtotalElement = document.getElementById('subtotal');
    const shippingElement = document.getElementById('shipping');
    const totalElement = document.getElementById('total');
    const clearButton = document.querySelector('.clear-btn');
    const buyButton = document.querySelector('.buy-btn');
    const termsCheckbox = document.getElementById('terms');

    function updateCart() {
        let subtotal = 0;

        // Actualizar el subtotal
        document.querySelectorAll('.product').forEach(product => {
            const price = parseFloat(product.querySelector('.price').textContent.replace('$', '').replace(',', ''));
            const quantityInput = product.querySelector('.quantity-input');
            const quantity = parseInt(quantityInput.value);
            const totalPrice = price * quantity;

            subtotal += totalPrice;
        });

        // Calcular el total
        const shipping = parseFloat(shippingElement.textContent.replace('$', '')) || 0;
        const total = subtotal + shipping;

        // Actualizar los elementos del DOM
        subtotalElement.textContent = `$${subtotal.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
        totalElement.textContent = `$${total.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
    }

    function removeProduct(event) {
        event.target.closest('.product').remove();
        updateCart();
    }

    function handleQuantityChange(event) {
        if (event.target.classList.contains('quantity-input')) {
            updateCart();
        }
    }

    function handleCheckboxChange() {
        buyButton.disabled = !termsCheckbox.checked;
    }

    function clearCart() {
        productsContainer.innerHTML = `
            <p>Tu carrito está vacío</p>
        `;
        subtotalElement.textContent = '$0.00';
        totalElement.textContent = '$0.00';
        // Limpiar el checkbox de términos y condiciones
        termsCheckbox.checked = false;
        buyButton.disabled = true;
    }

    // Agregar eventos
    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', removeProduct);
    });

    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', handleQuantityChange);
    });

    termsCheckbox.addEventListener('change', handleCheckboxChange);

    clearButton.addEventListener('click', clearCart);

    // Actualizar el carrito al cargar la página
    updateCart();
});
