<?php
include '../include/connection_db.php';
$id  = $_GET['id'];
$query  = "DELETE FROM `events` WHERE event_id = $id ";
mysqli_query($link, $query);
header("Location: manageevents.php");
exit();
?>
