<?php
session_start();
unset($_SESSION['valid_user']); //delete session variable
session_unset();
session_destroy(); //kill the session

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Success</title>
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
        <h1>Logout Successful!</h1>
        <p>See you again!</p>
        <a href="index.php" class="button">Back to Home Page</a>
        <a href="login.php" class="button">Login</a>
    </div>
</body>
</html>
<?php include('footerEm.php');?>


