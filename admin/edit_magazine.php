<?php
include '../include/admin_header.php';
include '../include/connection_db.php';

$sql = "SELECT * FROM `magazine` WHERE `mag_id` = {$_GET['id']}";
$res = mysqli_query($link, $sql);
$userSet = mysqli_fetch_assoc($res);
if(isset($_POST['update']))
{
    $Mag_Name  = $_POST['Mag_Name'];
    $Mag_Desc  = $_POST['Mag_Desc'];
    if($_FILES['Mag_File']['error'] == 0 && $_FILES['Mag_Image']['error'] == 0)
    {
        $file_name      = $_FILES['Mag_File']['name'];
        $file_tmp_name  = $_FILES['Mag_File']['tmp_name'];
        
        $image_name     = $_FILES['Mag_Image']['name'];
        $image_tmp_name = $_FILES['Mag_Image']['tmp_name'];
        
        $path_file      = '../images/magazine_file/';
        $path_image     = '../images/magazine_image/';   
        
        move_uploaded_file($file_tmp_name,  $path_file  .  $file_name);
        move_uploaded_file($image_tmp_name,     $path_image .$image_name);
        
        $query   = "UPDATE `magazine` SET `mag_name`='$Mag_Name',"
                . "`mag_desc`='$Mag_Desc',`mag_file`='$file_name',`mag_image`= $image_name WHERE `mag_id` = {$_GET['id']}";
        mysqli_query($link, $query);
        header("Location: manage_magazine.php");
        exit();
    }
    else
    {
        $sql  = "UPDATE `magazine` SET `mag_name`='$Mag_Name',`mag_desc`='$Mag_Desc' WHERE `mag_id` = {$_GET['id']}";
        mysqli_query($link, $sql);
        header("Location: manage_magazine.php");
        exit();
        
        }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Magazine</title>
    </head>
    <body>
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Edit Magazine File</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Magazine File</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Magazine Name</label>
                                        <input class="form-control" type="text" value="<?php echo $userSet['mag_name']; ?>" name="Mag_Name">
                                    </div>  
                                    <div class="form-group">
                                        <label>Magazine Description</label>
                                        <input class="form-control" type="text" value="<?php echo $userSet['mag_desc']; ?>" name="Mag_Desc">
                                    </div>  
                                    <div class="form-group">
                                        <label>Magazine file</label>
                                        <input type="file"  class="form-control"  value="<?php echo $userSet['mag_file']; ?>" name="Mag_File">                                     
                                    </div>      
                                    <div class="form-group">
                                        <label>Magazine Image</label>
                                        <input type="file"  class="form-control"  value="<?php echo $userSet['mag_image']; ?>" name="Mag_Image">                                     
                                    </div>  
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
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