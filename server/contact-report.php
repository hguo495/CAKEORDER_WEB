<?php
// Start session to capture form data
// session_start();

// Retrieve data from the form submission
$name = $_POST['name'] ?? 'Not Provided';
$email = $_POST['email'] ?? 'Not Provided';
$message = $_POST['message'] ?? 'No Message Submitted';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Report - Sweet Bunny Cake House</title>
    <link rel="stylesheet" href="../css/shop-cakes.css">
</head>
<body>
    <header>
        <h1>Contact Submission Report</h1>
    </header>
    <main>
        <section class="report">
            <h2>Thank you for contacting Sweet Bunny Cake House!</h2>
            <p>Your message has been successfully submitted. Below is a summary of the information you provided:</p>
            <table class="report-table">
                <tr>
                    <th>Name:</th>
                    <td><?php echo htmlspecialchars($name); ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo htmlspecialchars($email); ?></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><?php echo nl2br(htmlspecialchars($message)); ?></td>
                </tr>
            </table>
            <br>
            <a href="index.php" class="return-home">Return to Home Page</a>
        </section>
        <?php include("footerEm.php");
