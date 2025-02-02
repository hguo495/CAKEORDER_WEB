<?php include('auth.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes For Kids</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src="../js/forkids.js" defer></script>
</head>
<body>
<header>
    <h1>Cakes For Kids</h1>
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
        <img src="../images/forkidsimage.jpg" alt="Main Kids Cake" class="main-image" id="mainImage">
    </div>

    <div class="thumbnail-gallery">
        <img src="../images/k1.jpg" alt="Kids Cake 1" onclick="updateMainImage('../images/k1.jpg')">
        <img src="../images/k2.jpg" alt="Kids Cake 2" onclick="updateMainImage('../images/k2.jpg')">
        <img src="../images/k3.jpg" alt="Kids Cake 3" onclick="updateMainImage('../images/k3.jpg')">
        <img src="../images/k4.jpg" alt="Kids Cake 4" onclick="updateMainImage('../images/k4.jpg')">
        <img src="../images/forkidsimage.jpg" alt="Kids Cake 5" onclick="updateMainImage('../images/forkidsimage.jpg')">
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