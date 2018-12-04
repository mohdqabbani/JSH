<?php
include '../include/connection_db.php';
$id  = $_GET['id'];
$query  = "DELETE FROM `partner` WHERE partner_id = $id ";
mysqli_query($link, $query);
header("Location:partners.php");
exit();
?>
