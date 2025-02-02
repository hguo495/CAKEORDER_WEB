<?php
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['valid_user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: rgba(226, 186, 190, 0.9);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4caf50;
        }
        .button {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Successful!</h1>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['valid_user']); ?>!</p>
        <a href="menu.php" class="button">Go to Menu</a>
        <a href="manage_order.php" class="button">Manage Orders</a>
    </div>
</body>
</html>
