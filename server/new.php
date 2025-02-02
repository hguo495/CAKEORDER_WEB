<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="../css/manage.css" />
</head>
<body>
  
<?php include 'headerEm.php'; ?>



<div id="content">

  <a class="back-link" href="<?php echo 'manage_order.php'; ?>"> Back to List</a>

  <div class="New Cake">
    <h1>Create New Cake</h1>

    <form action='create.php' method="POST" enctype="multipart/form-data">
    
      <dl>
        <dt>New flavor</dt>
        <dd><input type="text" name="flavor" /></dd>
      </dl>
      <dl>
        <dt>Size</dt>
        <dd><input type="text" name="size"  /></dd>
          
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><input type="text" name="price"  /></dd>
        </dd>
      </dl>
      <dl>
      <dt>Upload Image</dt>
      <dd><input type="file" name="image" accept="image/*" required /></dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Cake" />
      </div>
    </form>


  </div>

</div>

<?php include 'footerEm.php'; ?>
