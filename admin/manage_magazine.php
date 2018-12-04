<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if(isset($_POST['submit']))
{
    $Mag_Name = $_POST['Mag_Name'];
    $Mag_Desc = $_POST['Mag_Desc'];
    if($_FILES['Mag_File']['error']==0 && $_FILES['Mag_Image']['error'] == 0)
    {
        $file_name      = $_FILES['Mag_File']['name'];
        $file_tmp_name  = $_FILES['Mag_File']['tmp_name'];
        
        $image_name     = $_FILES['Mag_Image']['name'];
        $image_tmp_name = $_FILES['Mag_Image']['tmp_name'];
        
        $path_file      = '../images/magazine_file/';
        $path_image     = '../images/magazine_image/';   
        
        move_uploaded_file($file_tmp_name,  $path_file  .  $file_name);
        move_uploaded_file($image_tmp_name,     $path_image .$image_name);
        
        $query    = "INSERT INTO `magazine`( `mag_name`, `mag_desc`, `mag_file`,`mag_image`) "
                . "VALUES ('$Mag_Name','$Mag_Desc','$file_name','$image_name')";
        mysqli_query($link, $query);
        header("Location: manage_magazine.php");
    exit();
    }
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Manage Magazine</title>
    </head>
    <body>
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Add Magazine File</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add Magazine File</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Magazine Name</label>
                                        <input class="form-control" type="text" placeholder="Magazine Name" name="Mag_Name">
                                    </div>  
                                    <div class="form-group">
                                        <label>Magazine Description</label>
                                        <input class="form-control" type="text" placeholder="Magazine Description" name="Mag_Desc">
                                    </div>  
                                    <div class="form-group">
                                        <label>Magazine file</label>
                                        <input type="file"  class="form-control"  placeholder="Magazine file" name="Mag_File">                                     
                                    </div>      
                                    <div class="form-group">
                                        <label>Magazine Image</label>
                                        <input type="file"  class="form-control"  placeholder="Magazine Image" name="Mag_Image">                                     
                                    </div>  
                                    <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">View Magazine</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Magazine Name</th>
                                        <th>Magazine Desc</th>
                                        <th>Magazine File</th>
                                        <th>Magazine Image</th>
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM `magazine` ";
                                    //echo $sql;die;
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo "<tr>";                                        
                                        echo "<td>{$row['mag_name']}</td>"; 
                                        echo "<td>{$row['mag_desc']}</td>";
                                        echo "<td>{$row['mag_file']}</td>";
                                        echo "<td><img style='width:50px;height:50px' src='../images/magazine_image/{$row['mag_image']}'echo</td>";
                                        echo "<td><a href='edit_magazine.php?id={$row['mag_id']}'>Edit</a></td>";
                                        echo "<td><a href='delete_magazine.php?id={$row['mag_id']}'>Delete</a></td>";
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