<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';
$id = $_GET['id'];
$query = "SELECT * FROM `events` WHERE `event_id` = $id";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path = "../images/Events/";
        move_uploaded_file($tmp_name, $path . $image_name);
        $event_name=$_POST['E_name'];
        $event_desc=$_POST['Description'];
        $event_date=$_POST['Event_Date'];
        $event_loc=$_POST['Event_Location'];

        $query = "UPDATE `events` SET `event_image`='$image_name',`event_name`='$event_name',`event_desc`='$event_desc', `event_date`='$event_date',`event_location`='$event_loc' WHERE event_id = $id";
        $result = mysqli_query($link, $query);
        header("Location: manageevents.php");
        exit();
    }else{       
        $event_name=$_POST['E_name'];
        $event_desc=$_POST['Description'];
        $event_date=$_POST['Event_Date'];
        $event_loc=$_POST['Event_Location'];
        $query = "UPDATE `events` SET `event_name`='$event_name',`event_desc`='$event_desc', `event_date`='$event_date',`event_location`='$event_loc' WHERE event_id = $id";
        $result = mysqli_query($link, $query);
        header("Location: manageevents.php");
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
                    <li class="active"> Edit Events</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Events</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label>Event Name</label>
                                        <input class="form-control" placeholder="Name" name="E_name" value="<?php echo  $userSet['event_name']  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Event Description</label>
                                        <input class="form-control" type="text" placeholder="Description" name="Description" value="<?php echo  $userSet['event_desc']  ?>" >
                                    </div>    
                                    <div class="form-group">
                                        <label>Event Image</label>
                                        <input type="file" class="form-control" placeholder="image" name="image">
                                    </div>  
                                    <div class="form-group">
                                        <label>Event Date</label>
                                        <input class="form-control"  placeholder="Event Date" name="Event_Date" value="<?php echo  $userSet['event_date']  ?>">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Event Location</label>
                                        <input class="form-control" placeholder="Event Location" name="Event_Location" value="<?php echo  $userSet['event_location']  ?>">                                     
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