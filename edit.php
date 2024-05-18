<!DOCTYPE html>
<html>
<head>
<title>Update all records from Database</title> <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" />
</head>
<body>
  <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                </div>
                <nav> 
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="allrecords.php">Products</a></li>
                        <li><a href="register.php">Registeratio</a></li>
                        <li><a href="login1.php">login</a></li>
                      
                    </ul>
                </nav>


<?php

include "server1.php";

$id = mysqli_real_escape_string($db, $_GET['id']); // Escape user input

$qry1 = mysqli_query($db, "select * from product where id='$id'");

$data = mysqli_fetch_array($qry1);

if(isset($_POST['update'])) {

  $productname = mysqli_real_escape_string($db, $_POST['productname']); // Escape user input
  $color = mysqli_real_escape_string($db, $_POST['color']); // Escape user input
  $price = mysqli_real_escape_string($db, $_POST['price']); // Escape user input

  // Prepared statement approach (recommended)
  $stmt = mysqli_prepare($db, "UPDATE product SET productname = ?, color = ?, price = ? WHERE id = ?");
  mysqli_stmt_bind_param($stmt, "ssss", $productname, $color, $price, $id);
  $result = mysqli_stmt_execute($stmt);

  if ($result) {
    mysqli_close($db);
    header("location:allrecords.php"); // Semicolon added
  } else {
    echo "Error updating record: " . mysqli_error($db);
  }

  mysqli_stmt_close($stmt);  // Close prepared statement (optional)

} else {
  // Existing code for displaying form with pre-filled values 
}

?>

<h3>Update Data</h3>

<form method="post">
  <input type="text" name="productname" value="<?php echo $data['productname']; ?>" placeholder="Enter Product Name" Required>
  <input type="text" name="color" value="<?php echo $data['color']; ?>">
  <input type="text" name="price" value="<?php echo $data['price']; ?>">
  <input type="submit" name="update" value="update">
</form>


</body>
</html>
