<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';
if(isset($_POST['submit']))
{
    $date   = $_POST['Bolg_Date'];
    $title  = $_POST['Bolg_Title'];
    $text   = $_POST['Bolg_Text'];
    if($_FILES['Bolg_Image']['error'] == 0)
    {
        $image_name = $_FILES['Bolg_Image']['name'];
        $image_tmp  = $_FILES['Bolg_Image']['tmp_name'];
        $path       = '../images/blog/';
        move_uploaded_file($image_tmp,$path . $image_name);
    }
    $query  =  "INSERT INTO `blog`( `blog_date`, `image`, `title`, `text`) "
            . "VALUES ('$date','$image_name','$title','$text')";
    $res    = mysqli_query($link, $query);
    
    header("Location: manage_blog.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Blog</title>
    </head>
    <body>
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Manage Bolg</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New Bolg`s</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Bolg Date</label>
                                        <input class="form-control" placeholder="Blog Date" name="Bolg_Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Bolg Image</label>
                                        <input type="file" class="form-control" type="text" placeholder="Bolg Image" name="Bolg_Image">
                                    </div>    
                                    <div class="form-group">
                                        <label>Bolg Title</label>
                                        <input class="form-control"  placeholder="Bolg Title" name="Bolg_Title">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Bolg Text</label>
                                        <input class="form-control"  placeholder="Bolg Text" name="Bolg_Text">                                     
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
                                        <th>Bolg Date</th>
                                        <th>Bolg Image</th>
                                        <th>Bolg Title</th>
                                        <th>Bolg Text</th>
                                        
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM `blog` ";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo "<tr>";
                                        echo "<td>{$row['blog_date']}</td>";
                                        echo "<td><img style='width:50px;height:50;' src='../images/blog/{$row['image']}'</td>";
                                        echo "<td>{$row['title']}</td>";
                                        echo "<td>{$row['text']}</td>";
                                        echo "<td><a href='edit_blog.php?id={$row['blog_id']}'>Edit</a></td>";
                                        echo "<td><a href='delete_blog.php?id={$row['blog_id']}'>Delete</a></td>";
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
    </body>
</html>
<?php
include '../include/admin_footer.php';
?>