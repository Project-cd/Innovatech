document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    console.log("Botones encontrados: ", addToCartButtons.length); // Verifica cuántos botones se encuentran

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.dataset.name; // Obtener el nombre del producto
            const productPrice = parseFloat(this.dataset.price); // Obtener el precio del producto
            console.log(`Producto agregado: ${productName}, Precio: ${productPrice}`); // Verifica que se registra el clic
            addProductToCart(productName, productPrice); // Llamar a la función para agregar el producto
        });
    });

    function addProductToCart(name, price) {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        const productExists = cartItems.find(item => item.name === name);

        if (productExists) {
            productExists.quantity++;
        } else {
            cartItems.push({ name, price, quantity: 1 });
        }
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        alert(`${name} ha sido añadido al carrito!`);
    }
});