<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<?php
include('auth.php');

include("headerEm.php");


  require_once('database.php');

  $conn = db_connect(); //my connection

  $sql_cake = "SELECT * FROM cake ORDER BY flavor ASC"; //query string
  //execute the query
  $result_cake = mysqli_query($conn, $sql_cake);

  $sql_orders="SELECT * FROM orders ORDER BY flavor ASC";
  $result_orders = mysqli_query($conn, $sql_orders);

  if (!$result_cake || !$result_orders) {
    die("Query failed: " . mysqli_error($conn));
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="../css/manage.css">
  
</head>
<body>
    <header>
    
    </header>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <main>
        <div id="content">
            <div class="subjects listing">
              <h1>Order Details and Cake Details</h1>
              <fieldset>
              <legend>Cake Details</legend>            
              <table class="list">
                <tr>
                  <th>ID</th>
                  <th>flavor</th>
                  <th>size</th>
                  <th>price</th>
                  <th>&nbsp</th>
                  <th>&nbsp</th>
                  <th>&nbsp</th>
                </tr>
                <!-- Process the results -->
                <?php while ($results_cake = mysqli_fetch_assoc($result_cake)) { ?>
                  <tr>
                    <td><?php echo $results_cake['cake_id']; ?></td>
                    <td><?php echo $results_cake['flavor']; ?></td>
                    <td><?php echo $results_cake['size']; ?></td>
                    <td><?php echo $results_cake['price']; ?></td>
                    <!-- send the id as parameter -->
                    <td><a class="action" href="<?php echo "show.php?cake_id=" . $results_cake['cake_id']; ?>">View</a></td>
                    <td><a class="action" href="<?php echo "edit.php?cake_id=" . $results_cake['cake_id']; ?>">Edit</a></td>
                    <td><a class="action" href="<?php echo "delete.php?cake_id=" . $results_cake['cake_id']; ?>">Delete</a></td>
        
                  </tr>
                <?php } ?>
              </table>
              <br>
              <br>
              <div class="actions">
                <a class="action" href="new.php">Create New Cake</a>
              </div>
              </fieldset>



              <fieldset>
              <legend>Orders Details</legend>
              <table class="list">
                <tr>
                  <th>ID</th>
                  <th>flavor</th>
                  <th>size</th>
                  <th>price</th>
                  <th>&nbsp</th>
                  <th>&nbsp</th>
                  <th>&nbsp</th>
                </tr>
                <!-- Process the results -->
                <?php while ($results_orders = mysqli_fetch_assoc($result_orders)) { ?>
                  <tr>
                    <td><?php echo $results_orders['order_id']; ?></td>
                    <td><?php echo $results_orders['flavor']; ?></td>
                    <td><?php echo $results_orders['size']; ?></td>
                    <td><?php echo $results_orders['price']; ?></td>
                    <!-- send the id as parameter -->
                    <td><a class="action" href="<?php echo "show_order.php?order_id=" . $results_orders['order_id']; ?>">View</a></td>
                    <td><a class="action" href="<?php echo "edit_order.php?order_id=" . $results_orders['order_id']; ?>">Edit</a></td>
                    <td><a class="action" href="<?php echo "delete_order.php?order_id=" . $results_orders['order_id']; ?>">Delete</a></td>
        
                  </tr>
                <?php } ?>
              </table>
              </fieldset>
            </div>
            
          </div>
      </main>
   </body>
</html>
<?php include("footerEm.php");








