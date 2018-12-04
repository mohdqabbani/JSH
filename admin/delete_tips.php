<?php
include '../include/connection_db.php';
$id  = $_GET['id'];
$query  = "DELETE FROM `tips` WHERE tip_id = $id ";
mysqli_query($link, $query);
header("Location: manage_tips.php");
exit();
?>
