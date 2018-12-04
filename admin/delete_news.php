<?php
include '../include/connection_db.php';
$id  = $_GET['id'];
$query  = "DELETE FROM `news` WHERE news_id = $id ";
mysqli_query($link, $query);
header("Location: manage_news.php");
exit();
?>
