
<?php

require_once('database.php');
$conn = db_connect();

// Handle form values sent by new.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
  $flavor = $_POST['flavor']; // access the form data
  $size = $_POST['size'];
  $price = $_POST['price'];

  $imageData = null;

  // Check if an image file is uploaded
  if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // Read the image data as binary
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageData = mysqli_real_escape_string($conn, $imageData); // Escape binary data for SQL
  }

  // Prepare SQL query to insert data including the image (if available)
  $sql = "INSERT INTO cake (flavor, size, price, image_blob) VALUES ('$flavor', '$size', '$price', " . ($imageData ? "'$imageData'" : "NULL") . ")";
  $result = mysqli_query($conn, $sql);

  if ($result) { // Check if insertion is successful
    $id = mysqli_insert_id($conn); // Get the last inserted ID
    header("Location: show.php?cake_id=$id"); // Redirect to the show page with the ID
    exit();
  } else {
    echo "<p>Error: " . mysqli_error($conn) . "</p>";
  }
} else {
  header("Location: new.php");
  exit();
}
?>