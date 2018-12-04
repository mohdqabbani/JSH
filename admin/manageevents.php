<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if (isset($_POST['submit'])) {
    if ($_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path  = "../images/Events/";
        move_uploaded_file($tmp_name, $path . $image_name);
        $event_name=$_POST['E_name'];
        $event_desc=$_POST['Description'];
        $event_date=$_POST['Event_Date'];
        $event_loc=$_POST['Event_Location'];
        
    }else{        
        echo $_FILES['image']['error'];
    }
        $query = "insert into  events(event_name,event_desc,event_image,event_date,event_location) values ('$event_name','$event_desc','$image_name','$event_date','$event_loc')";
        $result = mysqli_query($link, $query);
        header("location:manageevents.php");
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
                    <li class="active">Manage Events</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New Events</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Event Name</label>
                                        <input class="form-control" placeholder="Name" name="E_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Event Description</label>
                                        <input class="form-control" type="text" placeholder="Description" name="Description">
                                    </div>    
                                    <div class="form-group">
                                        <label>Event Image</label>
                                        <input type="file" class="form-control" placeholder="image" name="image">
                                    </div>  
                                    <div class="form-group">
                                        <label>Event Date</label>
                                        <input class="form-control"  placeholder="Event Date" name="Event_Date">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>Event Location</label>
                                        <input class="form-control" placeholder="Event Location" name="Event_Location">                                     
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
                                        <th>Event Image</th>
                                        <th>Event Name</th>
                                        <th>event Desc</th>
                                        <th>Event Date</th>
                                        <th>Event Location</th>
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM events";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_row($res)) {
                                        echo "<tr>";
                                        echo "<td><img width='50px'  src='../images/Events/{$row[3]}.'jpg'></td>";
                                        echo "<td>{$row[1]}</td>";
                                        echo "<td>{$row[2]}</td>";
                                        echo "<td>{$row[4]}</td>";
                                        echo "<td>{$row[5]}</td>";
                                        echo "<td><a href='edit_events.php?id={$row[0]}'>Edit</a></td>";
                                        echo "<td><a href='delete_events.php?id={$row[0]}'>Delete</a></td>";
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