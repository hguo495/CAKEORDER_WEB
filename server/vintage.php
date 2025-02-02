<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Cakes</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src="../js/vintage.js" defer></script>
</head>
<body>
<header>
    <h1>Vintage Cakes</h1>
</header>
<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<main class="cake-details">
    <div class="main-image-container">
        <img src="../images/vintageimg.jpg" alt="Main Vintage Cake" class="main-image" id="mainImage">
    </div>

    <div class="thumbnail-gallery">
        <img src="../images/v1.jpg" alt="Vintage Cake 1" onclick="updateMainImage('../images/v1.jpg')">
        <img src="../images/v2.jpg" alt="Vintage Cake 2" onclick="updateMainImage('../images/v2.jpg')">
        <img src="../images/v3.jpg" alt="Vintage Cake 3" onclick="updateMainImage('../images/v3.jpg')">
        <img src="../images/v4.jpg" alt="Vintage Cake 4" onclick="updateMainImage('../images/v4.jpg')">
        <img src="../images/vintageimg.jpg" alt="Vintage Cake 5" onclick="updateMainImage('../images/vintageimg.jpg')">
    </div>

    <section class="cake-order">
        <h2>Order Your Cake</h2>
        <form action="submit-order.php" method="POST">
            <label for="flavor">Choose a Flavor:</label>
            <select id="flavor" name="flavor">
                <option value="vanilla">Vanilla</option>
                <option value="chocolate">Chocolate</option>
                <option value="red-velvet">Red Velvet</option>
            </select>

            <label for="size">Choose a Size:</label>
            <select id="size" name="size" onchange="updatePrice()">
                <option value="6-inch">6-inch</option>
                <option value="8-inch">8-inch</option>
                <option value="10-inch">10-inch</option>
            </select>

            <div id="priceDisplay">
                <strong>Price: </strong>$<span id="price">0</span>
            </div>

            <label for="message">Message on your cake:</label>
            <textarea id="message" name="message" placeholder="Enter your message here..."></textarea>

            <button type="submit">Place Order</button>
        </form>
    </section>
    <?php include("footerEm.php");
