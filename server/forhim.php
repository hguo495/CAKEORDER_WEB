<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes For Him</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src="../js/forhim.js" defer></script>
</head>
<body>
<header>
    <h1>Cakes For Him</h1>
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
        <img src="../images/forhimimage.jpg" alt="Main Cake For Him" class="main-image" id="mainImage">
    </div>

    <div class="thumbnail-gallery">
        <img src="../images/he1.jpg" alt="Cake For Him 1" onclick="updateMainImage('../images/he1.jpg')">
        <img src="../images/he2.jpg" alt="Cake For Him 2" onclick="updateMainImage('../images/he2.jpg')">
        <img src="../images/he3.jpg" alt="Cake For Him 3" onclick="updateMainImage('../images/he3.jpg')">
        <img src="../images/he4.jpg" alt="Cake For Him 4" onclick="updateMainImage('../images/he4.jpg')">
        <img src="../images/forhimimage.jpg" alt="Cake For Him 5" onclick="updateMainImage('../images/forhimimage.jpg')">
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
                <option value="two-tiers">6inch + 8inch</option>
            </select>

            <div id="priceDisplay">
                <strong>Price: </strong>$<span id="price">0</span>
            </div>

            <input type="hidden" id="hiddenPrice" name="price" value="0">
            <button type="submit" id="submitOrderButton">Place Order</button>
        </form>
    </section>

<?php include("footerEm.php");