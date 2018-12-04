<?php
ob_start();
include '../include/admin_header.php';
include '../include/connection_db.php';
$id = $_GET['id'];
$query = "SELECT * FROM `news` WHERE `news_id` = $id";
$result = mysqli_query($link, $query);
$userSet = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {

    $News_Day = $_POST['News_Day'];
    $News_Month = $_POST['News_Month'];
    $News_Title = $_POST['News_Title'];
    $News_Text = $_POST['News_Text'];
    if ($_FILES['News_Image']['error'] == 0) {

        $image_name   = $_FILES['News_Image']['name'];
        $image_tmp    = $_FILES['News_Image']['tmp_name'];
        $path         = '../images/news/';
        move_uploaded_file($image_tmp,$path . $image_name);
        $query = "UPDATE `news` SET `news_day`='$News_Day',`news_month`='$News_Month',`news_title`='$News_Title', `news_text`='$News_Text',`news_image`='$image_name' WHERE news_id = $id";
        $result = mysqli_query($link, $query);
        header("Location: manage_news.php");
        exit();
    } else {
        $query = "UPDATE `news` SET `news_day`='$News_Day',`news_month`='$News_Month',`news_title`='$News_Title', `news_text`='$News_Text' WHERE news_id = $id";
        $result = mysqli_query($link, $query);
        header("Location: manage_news.php");
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
                    <li class="active"> Edit News</li>
                </ol>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Edit News</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>News Day</label>
                                        <input class="form-control" placeholder="News Day" name="News_Day" value="<?php echo $userSet['news_day']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>News Month</label>
                                        <input class="form-control" type="text" placeholder="News Month" name="News_Month" value="<?php echo $userSet['news_month']; ?>">
                                    </div>    
                                    <div class="form-group">
                                        <label>News Title</label>
                                        <input class="form-control"  placeholder="News Title" name="News_Title" value="<?php echo $userSet['news_title']; ?>">                                     
                                    </div>
                                    <div class="form-group">
                                        <label>News Text</label>
                                        <input class="form-control"  placeholder="News Text" name="News_Text" value="<?php echo $userSet['news_text']; ?>">                                     
                                    </div>   
                                    <div class="form-group">
                                        <label>News Image</label>
                                        <input class="form-control" type="file"  placeholder="News Image" name="News_Image" value="<?php echo $userSet['news_image']; ?>">                                     
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