<?php
include "server1.php";

$id = $_GET['id'];
$query="delete from product where id = '$id'";

$del= mysqli_query($db,$query);

if($del){
mysqli_close($db);
header("location:allrecords.php");
}

else
{
echo "Error deleting record";
}
?>