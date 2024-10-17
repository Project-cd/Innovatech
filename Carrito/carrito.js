document.addEventListener("DOMContentLoaded", function() {
    const cartItemsContainer = document.getElementById('cart-items');
    console.log('cartItemsContainer:', cartItemsContainer); // Para depuración

    const emptyCartMessage = document.getElementById('empty-cart-message');
    const cartTable = document.querySelector('.cart-table');
    const subtotalElement = document.getElementById('subtotal');
    const totalElement = document.getElementById('total');
    const shippingCost = 20;

    // Cargar productos desde localStorage
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
    // Verificar si el contenedor existe antes de continuar
    if (!cartItemsContainer) {
        console.error("El contenedor del carrito no se encuentra.");
        return; // Salir si el contenedor no existe
    }

    // Función para renderizar el carrito
    function renderCart() {
        cartItemsContainer.innerHTML = ''; // Limpiar el contenedor del carrito
        let subtotal = 0;

        cartItems.forEach((item, index) => {
            const total = item.price * item.quantity;
            subtotal += total;

            // Crear fila para cada producto
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.name}</td>
                <td><input type="number" value="${item.quantity}" min="1" class="quantity" data-index="${index}"></td>
                <td>S/ ${item.price.toFixed(2)}</td>
                <td class="total">S/ ${total.toFixed(2)}</td>
                <td><button class="remove-btn" data-index="${index}">Eliminar</button></td>
            `;
            cartItemsContainer.appendChild(row);
        });

        // Actualizar subtotal y total
        subtotalElement.innerText = `S/ ${subtotal.toFixed(2)}`;
        totalElement.innerText = `S/ ${(subtotal + shippingCost).toFixed(2)}`;

        // Mostrar u ocultar el mensaje y la tabla
        if (cartItems.length === 0) {
            emptyCartMessage.style.display = 'block';
            cartTable.style.display = 'none';
        } else {
            emptyCartMessage.style.display = 'none';
            cartTable.style.display = 'table'; // Mostrar la tabla
        }
    }

    // Renderizar el carrito al cargar la página
    renderCart();

    // Manejar el clic en el botón "Eliminar"
    cartItemsContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-btn')) {
            const index = event.target.dataset.index; // Obtener el índice del producto
            cartItems.splice(index, 1); // Eliminar el producto del carrito
            localStorage.setItem('cartItems', JSON.stringify(cartItems)); // Actualizar localStorage
            renderCart(); // Volver a renderizar el carrito
        }
    });

    // Manejar el clic en el botón "Proceder al Pago"
    const checkoutButton = document.querySelector('.checkout-btn');
    checkoutButton.addEventListener('click', function() {
        // Aquí puedes agregar la lógica para realizar la compra
        alert("Procediendo al pago. Esta funcionalidad estará disponible en el futuro.");
    });
});