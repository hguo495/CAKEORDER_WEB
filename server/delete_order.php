<!-- example of single page processing form  -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/manage.css" />
</head>
<body>
<?php

require_once('database.php');
include "headerEm.php" ;
$conn = db_connect();

if(!isset($_GET['order_id'])) {
header("Location:  manage_order.php");
}
$id = $_GET['order_id'];
// if we decided to delete, execute delete query and redirect to the main page

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sql = "DELETE FROM orders WHERE order_id =$id";
  $result = mysqli_query($conn, $sql);
//redirect to the main page
  header("Location: manage_order.php");
} 
else  // to access the user data
{
  $sql = "SELECT * FROM orders WHERE order_id= $id ";
    
$result_set = mysqli_query($conn, $sql);
    
$result = mysqli_fetch_assoc($result_set);
    
}

?>

<?php $page_title = 'Delete Page'; ?>


<div id="content">

  <a class="back-link" href="manage_order.php">&laquo; Back to List</a>

  <div class="page delete">
    <h1>Delete Page</h1>
    <p>Are you sure you want to delete this User?</p>
    <p class="item"><?php echo $result['flavor']; ?></p>

    <form  action="<?php echo 'delete_order.php?order_id=' . $result['order_id']; ?>"  method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete order" />
      </div>
    </form>
  </div>
 </div>
 <?php include 'footerEm.php'; ?>

