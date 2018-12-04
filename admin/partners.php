<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path  = "../images/partners/";
        move_uploaded_file($tmp_name, $path . $image_name);
        
    }else{        
        echo $_FILES['image']['error'];
    }
        $query = "INSERT INTO `partner`(`partner_image`) VALUES ('$image_name')";
        $result = mysqli_query($link, $query);
        header("location:partners.php");
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
                    <li class="active">Manage Partners</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New Partner</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Slide Image</label>
                                        <input type="file" class="form-control" placeholder="image" name="image">
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
                                        <th>Partner Image</th>
                                        <th>Delete</th>
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM partner";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo "<tr>";
                                        echo "<td><img width='100px'  src='../images/partners/{$row['partner_image']}.'jpg'></td>";                                       
                                        echo "<td><a href='delete_partner.php?id={$row['partner_id']}'>Delete</a></td>";
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