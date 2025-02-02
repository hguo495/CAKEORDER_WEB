<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Our Cake Shop</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
    <script src="../js/register.js" defer></script>
</head>
<body>
    <header>
        <h1>Register at Sweet Bunny Cake House</h1>
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
        <section class="form-section">
            <h2>Register New User</h2>
            <form action="sign_up.php" method="post" onsubmit="return validate()">
               <!-- <form id="register-form" action="http://localhost:3000/register" method="post" onsubmit="return validate()">-->
                <div class="form-group email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <span class="warning"></span>
                </div>
                <div class="form-group username">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                    <span class="warning"></span>
                </div>
                <div class="form-group password">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <span class="warning"></span>
                </div>
                <div class="form-group confirm-password">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password">
                    <span class="warning"></span>
                </div>
                <div class="form-buttons">
                    <button type="reset">Reset</button>
                    <button type="submit">Confirm</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Your Cake Shop. All rights reserved.</p>
    </footer>
</body>
</html>
