<?php
include '../include/connection_db.php';
$id  = $_GET['id'];
$query  = "DELETE FROM `slider` WHERE slide_id = $id ";
mysqli_query($link, $query);
header("Location: advertisement.php");
exit();
?>
