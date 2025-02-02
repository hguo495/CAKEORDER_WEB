
    <?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    // check session variable
    if (isset($_SESSION['valid_user'])) {
        echo '<p>You are logged in as ' . $_SESSION['valid_user'] . '</p>';
        echo '<p><em>Members-Only content goes here.</em></p>';
        echo "<br>";//you can add more contect here to display for the members 
        


        echo "session ID is " . session_id();
        echo "<br>";
        echo "<br>";
    } else {
        // echo '<p>You are not logged in.</p>';
        // echo '<p>Only logged in members may see this page.</p>';
        header("Location: login.php");
    }
    ?>
   
