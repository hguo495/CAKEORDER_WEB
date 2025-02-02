<?php

require_once('db_credentials.php');
//connect to the database
//then confirm the connection otherwise return error
function db_connect()
{
  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }

  return $conn;
}

$conn = db_connect();

// Check connection
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

function db_disconnect($conn)
{
  if (isset($conn)) {
    mysqli_close($conn);
  }
}
// function confirm_result_set($result_set) {
//   if (!$result_set) {
//     exit("Database query failed.");
//   }
// }
