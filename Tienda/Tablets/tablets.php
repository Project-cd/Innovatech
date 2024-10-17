<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
    <link rel="stylesheet" href="tablets.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-and-about">
                <div class="logo">Innovatech</div>
                <a href="../../Inicio/index.html#footer" class="about-link">Quienes Somos</a>
            </div>
            <div class="nav-links">
                <a href="../../Inicio/index.html">Inicio</a>
                <a href="../../Carrito/carrito.html" class="cart-btn">Carrito</a>
            </div>
        </div>
    </header>

    <section class="categories">
        <div class="category-list">
             <a href="../Celulares/celulares.php">Celulares</a>
            <a href="tablets.php">Tablets</a>
            <a href="../Audios/audios.php">Audios</a>
            <a href="../Televisores/televisores.php">Televisores</a>
            <a href="../Accesorios/accesorios.php">Accesorios</a>
            <a href="../Laptops/laptops.php">Laptops</a>
        </div>
    </section>

    <section class="products">
        <h1>Tablets</h1>
        <div class="product-list">
            <?php
            include '../../bd_conexion.php'; // Incluir el archivo de conexión a la base de datos

            // Consulta para obtener productos de la categoría "celulares"
            $sql = "SELECT * FROM productos WHERE categoria = 'tablets'";
            $result = $conn->query($sql);

            // Generar divs dinámicamente
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="../../img/' . $row["imagen_url"] . '" alt="' . $row["nombre"] . '" class="product-image">';
                    echo '<h2>' . $row["nombre"] . '</h2>';
                    echo '<p>S/ ' . $row["precio"] . '</p>';
                    echo '<button class="add-to-cart-btn" data-name="' . $row["nombre"] . '" data-price="' . $row["precio"] . '">Añadir al carrito</button>';
                    echo '</div>';  
                }
            } else {
                echo "No hay productos disponibles.";
            }

            $conn->close(); // Cerrar la conexión a la base de datos
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Tienda de Tecnología. Todos los derechos reservados.</p>
    </footer>

    <script src="tablets.js"></script> <!-- Asegúrate de que este archivo esté correctamente enlazado -->
</body>
</html>