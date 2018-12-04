<?php
include './header_website.php';
include './include/connection_db.php';

$SQL = "SELECT * FROM `gallery` ";
$res = mysqli_query($link, $SQL);
$userSet = array();
while ($row = mysqli_fetch_assoc($res)) {
    $userSet[] = $row;
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>JSH ||Gallery</title>

    </head>

    <body>

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/banner-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-8 col-xs-12">
                        <h1>Our Gallery</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Our Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Galery FullWidth Section-->
        <section class="gallery-fullwidth-section">

            <div class="clearfix">

                <!--Gallery Block-->
                <?php
                foreach ($userSet as $value) {

                    echo '<div class="gallery-block style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">';

                    $imgs = unserialize($value['photo_cat']);
                    for ($i = 0; $i < count($imgs); $i++) {
                        echo '<div class="inner-box">';
                        echo '<div class="image">';
                        echo "<img style='width:360px;height:270px;' src='images/gallery/{$imgs[$i]}' alt='' />";
                        echo '<div class="overlay-box">';
                        echo '<div class="content">';
                        echo "<h3><a href='gallery-single.html'>{$value['photo_name']}</a></h3>";
                        echo "<ul class='option-list'>";
                        echo "<li><a class='lightbox-image' href='images/gallery/{$imgs[$i]}' data-fancybox-group='gallery-one'><span class='la la-arrows'></span></a></li>";
                        echo "<li><a href='#'></a></li>";
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
          

                <!--Gallery Block-->
                <!--                <div class="gallery-block style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">
            

                <!--Gallery Block-->
             

                <!--Gallery Block-->
            

                <!--Gallery Block-->
            

                <!--Gallery Block-->
            

                <!--Gallery Block-->
             

                <!--Gallery Block-->

            </div>

            <!--Styled Pagination-->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
<!--                    <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#" class="active">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>-->
                </ul>
            </div>
            <!--End Styled Pagination-->

        </section>
        <!--End Gallery Section-->

        <!--Clients Section-->
        <section class="clients-section" style="background-image:url(images/background/1.jpg)">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <?php
                        $SQL = "SELECT * FROM `partner`";
                        $res = mysqli_query($link, $SQL);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<li class='slide-item'><figure class='image-box'><a href='#'><img src='images/partners/{$row['partner_image']}' 'alt=''></a></figure></li>";
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Clients Section-->



        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



        <script src="js/jquery.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.js"></script>

        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
<?php 
 include './footer_website.php';
?>