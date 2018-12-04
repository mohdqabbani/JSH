<?php
include '../include/admin_header.php';
include '../include/connection_db.php';
$query   = "SELECT * FROM `gallery` WHERE `photo_id`= {$_GET['id']}";
$result  = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    
    $name  = $_POST['Gallery_Name'];
        if($_FILES['Gallery_Image']['error'][0] == 0){
            for($i=0 ; $i<count($_FILES['Gallery_Image']['name']);$i++)
            {
                $allimages[]  = $_FILES['Gallery_Image']['name'][$i];
                $image_name   = $_FILES['Gallery_Image']['name'][$i];
                $tmp_name     = $_FILES['Gallery_Image']['tmp_name'][$i];
                $path = "../images/gallery/";
                move_uploaded_file($tmp_name, $path . $image_name);
            }
            $imgs = serialize($allimages);
            $sql = "UPDATE `gallery` SET `photo_name`='$name',`photo_cat`='$imgs' WHERE photo_id = {$_GET['id']}";
        }else{
            $sql = "UPDATE `gallery` SET`photo_name`='$name' WHERE photo_id = {$_GET['id']}";
        }
        //echo $sql;die;
        
        $resultt = mysqli_query($link, $sql);
        header("Location: gallery.php");
        exit();
    
        
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Add Gallery</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add Gallery</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Gallery Name</label>
                                        <input class="form-control" type="text" placeholder="Gallery Name" name="Gallery_Name" value="<?php echo $userSet['photo_name'];  ?>">
                                    </div>    
                                    <div class="form-group">
                                        <label>Gallery Image</label>
                                        <input type="file" multiple class="form-control"  placeholder="Gallery Image" name="Gallery_Image[]">                                     
                                    </div>                            
                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
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