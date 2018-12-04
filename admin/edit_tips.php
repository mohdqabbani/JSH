<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';
$id = $_GET['id'];
$query = "SELECT * FROM `tips` WHERE `tip_id` = $id";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path = "../images/Tips/";
        move_uploaded_file($tmp_name, $path . $image_name);
        $Tip_title=$_POST['Tip_Title'];
        $Tip_Position=$_POST['Tip_Position'];
        $Tip_Text=$_POST['Tip_Text'];

        $query = "UPDATE `tips` SET `tip_image`='$image_name',`tip_title`='$Tip_title',`tip_position`='$Tip_Position', `tip_text`='$Tip_Text' WHERE tip_id = $id";
        $result = mysqli_query($link, $query);
       
        header("Location: manage_tips.php");
        exit();
    }else{       
        $Tip_title=$_POST['Tip_Title'];
        $Tip_Position=$_POST['Tip_Position'];
        $Tip_Text=$_POST['Tip_Text'];
       // $query = "UPDATE `events` SET SET `tip_title`='$Tip_title',`tip_position`='$Tip_Position', `Tip Text`='$Tip_Text' WHERE tip_id = $id";
       $query = "UPDATE `tips` SET `tip_title`='$Tip_title',`tip_position`='$Tip_Position',`tip_text`='$Tip_Text' WHERE tip_id = $id";
        $result = mysqli_query($link, $query);
        header("Location: manage_tips.php");
        exit();
    }
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
                    <li class="active"> Edit Tips</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Tips</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label>Tip Title</label>
                                        <input class="form-control" placeholder="Title" name="Tip_Title" value="<?php echo $userSet['tip_title'];  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tip Position</label>
                                        <input class="form-control" type="text" placeholder="Position" name="Tip_Position" value="<?php echo $userSet['tip_position'];  ?>">
                                    </div>    
                                    <div class="form-group">
                                        <label>Tip Text</label>
                                        <input class="form-control"  placeholder="Text" name="Tip_Text" value="<?php echo $userSet['tip_text'];  ?>">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Tip Image</label>
                                        <input type="file" class="form-control" placeholder="image" name="image">
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