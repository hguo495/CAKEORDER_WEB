<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Our Cake Shop</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
</head>
<body>
    <header>
        <h1>Contact Sweet Bunny Cake House</h1>
    </header>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <form class="contact-form" action="contact-report.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </main>
    </body>
</html>
<?php include("footerEm.php");