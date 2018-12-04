<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';

if (isset($_POST['submit'])){ 

        $News_Day=$_POST['News_Day'];
        $News_Month=$_POST['News_Month'];
        $News_Title=$_POST['News_Title'];
        $News_Text=$_POST['News_Text'];
        if($_FILES['News_Image']['error'] == 0)
        {
            $image_name  = $_FILES['News_Image']['name'];
            $image_tmp   = $_FILES['News_Image']['tmp_name'];
            $path        = '../images/news/';
            move_uploaded_file($image_tmp,$path . $image_name);
        }
    
        $query = "insert into  news(news_day,news_month,news_title,news_text,news_image) values ('$News_Day','$News_Month','$News_Title','$News_Text','$image_name')";
        $result = mysqli_query($link, $query);
        header("location:manage_news.php");
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
                    <li class="active">Manage News</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Add New News</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>News Day</label>
                                        <input class="form-control" placeholder="News Day" name="News_Day">
                                    </div>
                                    <div class="form-group">
                                        <label>News Month</label>
                                        <input class="form-control" type="text" placeholder="News Month" name="News_Month">
                                    </div>    
                                    <div class="form-group">
                                        <label>News Title</label>
                                        <input class="form-control"  placeholder="News Title" name="News_Title">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>News Text</label>
                                        <input class="form-control"  placeholder="News Text" name="News_Text">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>News Image</label>
                                        <input type="file" class="form-control"  placeholder="News Image" name="News_Image">                                     
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
                                        <th>News Day</th>
                                        <th>News Month</th>
                                        <th>News Title</th>
                                        <th>News Text</th>
                                        <th>News Image</th>
                                        
                                    </tr>                            
                                    <?php
                                    $sql = "SELECT * FROM news";
                                    $res = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_row($res)) {
                                        echo "<tr>";
                                        echo "<td>{$row[1]}</td>";
                                        echo "<td>{$row[2]}</td>";
                                        echo "<td>{$row[3]}</td>";
                                        echo "<td>{$row[4]}</td>";
                                        echo "<td><img style='width:50px;height:50px' src='../images/news/{$row[5]}'</td>";
                                        echo "<td><a href='edit_news.php?id={$row[0]}'>Edit</a></td>";
                                        echo "<td><a href='delete_news.php?id={$row[0]}'>Delete</a></td>";
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