<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path  = "../images/Tips/";
        move_uploaded_file($tmp_name, $path . $image_name);
        $Tip_title=$_POST['Tip_Title'];
        $Tip_Position=$_POST['Tip_Position'];
        $Tip_Text=$_POST['Tip_Text'];
        
    }else{        
        echo $_FILES['image']['error'];
    }
        $query = "insert into  tips(tip_title,tip_position,tip_text,tip_image) values ('$Tip_title','$Tip_Position','$Tip_Text','$image_name')";
        $result = mysqli_query($link, $query);
        header("location:manage_tips.php");
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
                    <li class="active">Manage Tips</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New Tips</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tip Title</label>
                                        <input class="form-control" placeholder="Title" name="Tip_Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Tip Position</label>
                                        <input class="form-control" type="text" placeholder="Position" name="Tip_Position">
                                    </div>    
                                    <div class="form-group">
                                        <label>Tip Text</label>
                                        <input class="form-control"  placeholder="Text" name="Tip_Text">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Tip Image</label>
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
                                        <th>Tips Image</th>
                                        <th>Tip Title</th>
                                        <th>Tip Position</th>
                                        <th>Tip Text</th>
                                        
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM tips";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_row($res)) {
                                        echo "<tr>";
                                        echo "<td><img width='50px'  src='../images/Tips/{$row[4]}.'jpg'></td>";
                                        echo "<td>{$row[1]}</td>";
                                        echo "<td>{$row[2]}</td>";
                                        echo "<td>{$row[3]}</td>";
                                        echo "<td><a href='edit_tips.php?id={$row[0]}'>Edit</a></td>";
                                        echo "<td><a href='delete_tips.php?id={$row[0]}'>Delete</a></td>";
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