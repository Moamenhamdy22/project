<!DOCTYPE html>
<html>
<head>
<title>Display all records from Database</title> 

<link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" />



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
            
              
            </div>
<h2>Product Details</h2>
<div class="table">
<table border="2">
<tr>
<td>ID.</TD>
<td>Product-Name</td>
<td>color</td>
<td>Price</td>
<td>Image</td>
</tr>
</div>
<?php 
include "server1.php";
$records = mysqli_query($db,"select * from product");
while($data = mysqli_fetch_array($records))
{
?>
<tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['productname']; ?></td>
<td><?php echo $data['color']; ?></td>
<td><?php echo $data['price']; ?></td>
<td><img src=" <?php echo $data['image']; ?>" height="50px" width="50px"/></td>
<td><a href="edit.php ?id=<?php echo $data['id'];?>">Edit</a></td>
<td><a href="delete.php ?id=<?php echo $data['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>