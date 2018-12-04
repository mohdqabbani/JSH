<?php
include '../include/connection_db.php';
$SQL  = "DELETE FROM `blog` WHERE `blog_id` = {$_GET['id']}";
mysqli_query($link, $SQL);
header("Location: manage_blog.php");
exit();

?>