<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/manage.css" />
</head>

<body>

<?php
require_once('database.php');
$conn = db_connect();


if (!isset($_GET['cake_id'])) {
  die("cake_id not provided");
} else {
  echo "cake_id is: " . $_GET['cake_id'];
}

include 'headerEm.php' ;
if (!isset($_GET['cake_id'])) { //check if we get the id
  header("Location:  manage_order.php");
}
$id = $_GET['cake_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //access the cake information
  $flavor = $_POST['flavor'];
  $size = $_POST['size'];
  $price = $_POST['price'];
  //update the table with new information
  $sql = "UPDATE cake set flavor = '$flavor' , size= '$size' , price= $price where cake_id = $id ";
  $result = mysqli_query($conn, $sql);
  //redirect to show page
  header("Location: show.php?id=  $id");
}
// display the cake information
else {
  $sql = "SELECT * FROM cake WHERE cake_id= $id ";

  $result_set = mysqli_query($conn, $sql);

  $result = mysqli_fetch_assoc($result_set);
}

?>


<div id="content">

  <a class="back-link" href="manage_order.php"> Back to List</a>

  <div class="page edit">
    <h1>Edit User</h1>

    <form action="<?php echo 'edit.php?cake_id=' . $result['cake_id']; ?>" method="post">
      <dl>
        <dt> ID</dt>
        <dd><input type="text" name="cake_id" value="<?php echo $result['cake_id']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Flavor</dt>
        <dd><input type="text" name="flavor" value="<?php echo $result['flavor']; ?>" /></dd>
      </dl>
      <dl>
        <dt>Size</dt>
        <dd><input type="text" name="size" value="<?php echo $result['size']; ?>" /></dd>

        </dd>
      </dl>
      <dl>
        <dt>Price</dt>

        <dd><input type="text" name="price" value="<?php echo $result['price']; ?>" /></dd>

        </dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Edit cake" />
      </div>
    </form>

  </div>

</div>

<?php include 'footerEm.php'; ?>