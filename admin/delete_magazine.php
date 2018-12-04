<?php
include '../include/connection_db.php';
$query   = "DELETE FROM `magazine` WHERE `mag_id` = {$_GET['id']}";
mysqli_query($link, $query);
header("Location: manage_magazine.php");
exit();

?>
