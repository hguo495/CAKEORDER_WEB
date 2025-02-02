<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Order</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">  
    <script src="../js/sp.js" defer></script>
</head>
<body>
<header>
    <h1>Special Orders</h1>
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
        <img src="../images/spimg.jpg" alt="Main Special Order Cake" class="main-image" id="mainImage">
    </div>

    <div class="thumbnail-gallery">
        <img src="../images/sp1.jpg" alt="Special Order 1" onclick="updateMainImage('../images/sp1.jpg')">
        <img src="../images/sp2.jpg" alt="Special Order 2" onclick="updateMainImage('../images/sp2.jpg')">
        <img src="../images/sp3.jpg" alt="Special Order 3" onclick="updateMainImage('../images/sp3.jpg')">
        <img src="../images/sp4.jpg" alt="Special Order 4" onclick="updateMainImage('../images/sp4.jpg')">
        <img src="../images/spimg.jpg" alt="Special Order 5" onclick="updateMainImage('../images/spimg.jpg')">
    </div>

    <section class="cake-order">
        <h2>Request a quote</h2>
             <!-- <form action="submit-order.php" method="POST"> -->
            <label for="flavor">Choose a Flavor:</label>
            <select id="flavor" name="flavor">
                <option value="vanilla">Vanilla</option>
                <option value="chocolate">Chocolate</option>
                <option value="redvelvet">Red velvet</option>
            </select>

            <label for="size">Choose a Size:</label>
            <select id="size" name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>

            <label for="message">Les's chat:</label>
            <textarea id="message" name="message" placeholder="Enter your requirement here..."></textarea>

            <a href="contact.php" id="quote">Ask for Quote</a>
        </form>
    </section>
    <?php include("footerEm.php");
