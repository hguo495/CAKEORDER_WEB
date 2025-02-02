<?php
include('headerEm.php');
session_start();

require_once('database.php');
$conn = db_connect();
mysqli_set_charset($conn, 'utf8mb4'); // Ensure consistent character set

$login_error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to validate the username and password
    $query = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Check if the password matches
        if ($row['password'] === $password) {
            $_SESSION['valid_user'] = $username;
            header("Location:login_success.php");
            // header("Location: manage_order.php");
            exit();
        } else {
            $login_error = "Invalid username or password.";
        }
    } else {
        $login_error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background-color: rgba(226, 186, 190, 0.9);
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* h1 {
            color: #4caf50;
        } */
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
    <script>
        function showError(message) {
            if (message) {
                alert(message); // Display the error in a popup
            }
        }
    </script>
</head>
<body onload="showError('<?php echo isset($login_error) ? htmlspecialchars($login_error, ENT_QUOTES) : ''; ?>')" class="container">
    <!-- Display a link to return to the login page -->
    <a href="login.php" class="button">Please Login again</a>
</body>
</html>
<?php include('footerEm.php');