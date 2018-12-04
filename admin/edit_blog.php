<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';
$query   = "SELECT * FROM `blog` WHERE `blog_id` = {$_GET['id']}";
$res     = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($res);
if(isset($_POST['update']))
{
    $date = $_POST['Blog_Date'];
    $title = $_POST['Blog_Title'];
    $text = $_POST['Blog_Text'];
    if($_FILES['Blog_Image']['error'] == 0)
    {
        $image_name  = $_FILES['Blog_Image']['name'];
        $tmp_name    = $_FILES['Blog_Image']['tmp_name'];
        $path        = '../images/blog/';
        move_uploaded_file($image_tmp, $path . $image_name);
        $SQL  = "UPDATE `blog` SET `blog_date`='$date',"
                . "`image`='$image_name',`title`='$title',`text`='$text' WHERE `blog_id` = {$_GET['id']}";
        
        mysqli_query($link, $SQL);
        header("Location: manage_blog.php");
        exit();
    }
    else{
         $SQL  = "UPDATE `blog` SET `blog_date`='$date',"
                 . "`title`='$title',`text`='$text' WHERE `blog_id` = {$_GET['id']}";
        mysqli_query($link, $SQL);
        header("Location: manage_blog.php");
        exit();
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Bolg</title>
    </head>
    <body>
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Edit Bolg</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Bolg`s</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Bolg Date</label>
                                        <input  class="form-control" value="<?php echo  $userSet['blog_date']; ?>" name="Blog_Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Bolg Image</label>
                                        <input type="file" class="form-control" type="text" value="<?php echo  $userSet['image']; ?>" name="Blog_Image">
                                    </div>    
                                    <div class="form-group">
                                        <label>Bolg Title</label>
                                        <input class="form-control"  value="<?php echo  $userSet['title']; ?>" name="Blog_Title">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Bolg Text</label>
                                        <input class="form-control"  value="<?php echo  $userSet['text']; ?>" name="Blog_Text">                                     
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" name="update">update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>
<?php
include '../include/admin_footer.php';
?>