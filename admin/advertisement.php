<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path  = "../images/main-slider/";
        move_uploaded_file($tmp_name, $path . $image_name);
        $title    = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        
    }else{        
        echo $_FILES['image']['error'];
    }
        $query = "INSERT INTO `slider`(`slide_image`, `slide_title`,`slide_subtitle`) VALUES ('$image_name','$title','$subtitle')";
        $result = mysqli_query($link, $query);
        header("location:advertisement.php");
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
                    <li class="active">Manage Slider</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New SLide</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Slide Image</label>
                                        <input type="file" class="form-control" placeholder="image" name="image">
                                    </div>  
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" placeholder="Title" name="title">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Sub-Title</label>
                                        <input class="form-control" placeholder="Sub Title" name="subtitle">                                     
                                    </div>

                                    
                                    <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">View Category</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Slide Image</th>
                                        <th>Title</th>
                                        <th>Sub-Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM slider";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo "<tr>";
                                        echo "<td><img width='50px'  src='../images/main-slider/{$row['slide_image']}.'jpg'></td>";
                                        echo "<td>{$row['slide_title']}</td>";
                                        echo "<td>{$row['slide_subtitle']}</td>";
                                        echo "<td><a href='edit_adver.php?id={$row['slide_id']}'>Edit</a></td>";
                                        echo "<td><a href='delete_adver.php?id={$row['slide_id']}'>Delete</a></td>";
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