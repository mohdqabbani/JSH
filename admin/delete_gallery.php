<?php
include '../include/connection_db.php';
$SQL   = "DELETE FROM `gallery` WHERE `photo_id` = {$_GET['id']}";
mysqli_query($link, $SQL);
header("Location: gallery.php");
exit();

?>