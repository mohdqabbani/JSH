<?php
include '../include/admin_header.php';
include '../include/connection_db.php';
if(isset($_POST['submit']))
{
    $Gallery_Name  = $_POST['Gallery_Name'];
    for($i = 0 ;$i<count($_FILES['Gallery_Image']['name']);$i++)
    {
        $allimages[]  = $_FILES['Gallery_Image']['name'][$i];
        $image_name   = $_FILES['Gallery_Image']['name'][$i];
        $image_tmp    = $_FILES['Gallery_Image']['tmp_name'][$i];
        $path         = "../images/gallery/"; 
        move_uploaded_file($image_tmp,$path. $image_name);
    }
    $imgs  = serialize($allimages);
    $SQL   = "INSERT INTO `gallery`( `photo_name`, `photo_cat`) VALUES ('$Gallery_Name','$imgs')";
    $res   = mysqli_query($link, $SQL);
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
                                        <input class="form-control" type="text" placeholder="Gallery Name" name="Gallery_Name">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">View Gallery</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <tr>
                                        
                                        <th>Photo Name</th>
                                        <th>Photo Cat</th>
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM `gallery`";
                                    //echo $sql;die;
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        //echo '<pre>';print_r($row);//die;
                                        //$imgs = unserialize($row['imagesubsub']);
                                        //print_r($imgs);die;
//                                        $location = substr($row['location'], -10);
                                        echo "<tr>";                                        
                                        echo "<td>{$row['photo_name']}</td>"; 
                                        echo "<td>";
                                        $imgs = unserialize($row['photo_cat']);
                                        foreach ($imgs as $value) {
                                           echo "<img width='50px' height='50px' src='../images/gallery/{$value}'>";
                                        } 
                                        echo "</td>";
                                        echo "<td><a href='edit_gallery.php?id={$row['photo_id']}'>Edit</a></td>";
                                        echo "<td><a href='delete_gallery.php?id={$row['photo_id']}'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
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