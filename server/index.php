<?php include("headerEm.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cake Shop</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src ='../js/home_search.js'> </script>
    
</head>
<body>
    
    <nav class="navbar">
        <ul>
            <li><a href="index.php"  id="homeButton">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="manage_order.php">OrderManage</a></li>
        </ul>
    </nav>

    <main>
        <section class="welcome-section" style="background-image: url('../images/home-image.jpg');">
            <h1>Discover Our Delicious Cakes</h1>
            <p>Explore our wide variety of cakes and pastries, handcrafted with love and perfection just for you.</p>
            <form onsubmit="handleSearch(event)">
                <input type="text" placeholder="Enter your search..." id="searchInput" name="search" list="keywords" autocomplete="off">
                <datalist id="keywords">
                    <option value="Vintage Cakes">
                    <option value="Cakes For Her">
                    <option value="Cakes For Him">
                    <option value="Cakes For Kids">
                    <option value="Cupcakes">
                    <option value="Special Order">
                </datalist>
                <button type="submit">Search</button>
            </form>            
        </section>
    </main>

</body>
</html>
<?php include("footerEm.php");?>