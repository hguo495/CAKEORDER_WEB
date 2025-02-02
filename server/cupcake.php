<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupcakes</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">  
    <script src="../js/cupcake.js" defer></script>
</head>
<body>
<header>
    <h1>Cupcakes</h1>
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
        <img src="../images/cupcakeimg.jpg" alt="Main Cupcake" class="main-image" id="mainImage">
    </div>

    <div class="thumbnail-gallery">
        <img src="../images/cup1.jpg" alt="Cupcake 1" onclick="updateMainImage('../images/cup1.jpg')">
        <img src="../images/cup2.jpg" alt="Cupcake 2" onclick="updateMainImage('../images/cup2.jpg')">
        <img src="../images/cup3.jpg" alt="Cupcake 3" onclick="updateMainImage('../images/cup3.jpg')">
        <img src="../images/cup4.jpg" alt="Cupcake 4" onclick="updateMainImage('../images/cup4.jpg')">
        <img src="../images/cupcakeimg.jpg" alt="Cupcake 5" onclick="updateMainImage('../images/cupcakeimg.jpg')">
    </div>

    <section class="cake-order">
        <h2>Order Your Cupcake</h2>
        <form action="submit-order.php" method="POST">
            <label for="flavor">Choose a Flavor:</label>
            <select id="flavor" name="flavor">
                <option value="vanilla">Vanilla</option>
                <option value="chocolate">Chocolate</option>
                <option value="redvelvet">Red Velvet</option>
            </select>

            <label for="size">Choose a Size:</label>
            <select id="size" name="size" onchange="updatePrice()">
                <option value="one-dozen">One Dozen</option>
                <option value="party-pack">Party Pack</option>
            </select>

            <div id="priceDisplay">
                <strong>Price: </strong>$<span id="price">0</span>
            </div>

            <button type="submit">Place Order</button>
        </form>
    </section>
    <?php include("footerEm.php");
