<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/manage.css" />
</head>

<body>

  <?php
  //conect to the datbase

  require_once('database.php');
  include "headerEm.php";
  $conn = db_connect();
  //access URL parameter
  if (!isset($_GET['order_id'])) { //check if we get the id
    header("Location:  manage_order.php");
  }
  $id = $_GET['order_id'];

  //prepare your query
  $sql = "SELECT * FROM orders WHERE order_id= $id";

  $result_set = mysqli_query($conn, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the user data -->
  <div id="content">

    <a class="back-link" href="manage_order.php"> Back to List</a>

    <div class="page show">

      <h1> <?php echo $result['flavor']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>Flavor</dt>
          <dd><?php echo $result['flavor']; ?></dd>
        </dl>
        <dl>
          <dt>Size</dt>
          <dd><?php echo $result['size']; ?></dd>
        </dl>
        <dl>
          <dt>Price</dt>
          <dd><?php echo $result['price']; ?></dd>
        </dl>
        <dl>
          <dt>Image</dt>
          <dd>
        <?php
          if (!empty($result['image_blob'])) {
           $imageData = base64_encode($result['image_blob']); // Convert binary to Base64
          echo "<img src='data:image/jpeg;base64,$imageData' alt='Cake Image' style='max-width: 300px;'>";
         } else {
          echo "No image available."; // If no image, display placeholder
          }
        ?>
        </dd>
      </dl>
      </div>


    </div>

  </div>

  <?php include 'footerEm.php'; ?>
</body>

</html>