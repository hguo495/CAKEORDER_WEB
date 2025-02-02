
<?php
session_start();
if (isset($_SESSION['valid_user'])) {
    // 如果用户已登录，弹出提示信息并重定向
    echo "<script>
        alert(' Dear {$_SESSION['valid_user']}  You have logged in, the page will jump to the Home page. ');
        window.location.href = 'index.php'; // 跳转到主页或其他页面
    </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Our Cake Shop</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src="../js/register.js" defer></script>
    <script>
        function showError(message) {
            if (message) {
                alert(message); // Display the error in a popup
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Login to Sweet Bunny Cake House</h1>
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
            <form action="sign_in.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required autocomplete="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="current-password"><br><br>
            <button type="submit">Login</button>
            <a href="register.php" class="button-link">Sign-up</a>
        </form>
        
    </main>

</body>
</html>
<?php include("footerEm.php");?>