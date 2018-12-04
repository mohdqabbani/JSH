<?php
ob_start();
include './header_website.php';
include '../JSH/include/connection_db.php';
$QueryPage = "SELECT COUNT(*) as count FROM `magazine`";
$resultQuery = mysqli_query($link, $QueryPage);
$row = mysqli_fetch_assoc($resultQuery);
$count = array_shift($row);
$per_page = 2;
$pages = $count / $per_page;
if (isset($_GET['page'])) {
    $offset = $per_page * ($_GET['page'] - 1);
} else {
    $offset = $per_page * (1 - 1);
}
$SQL = "select * from `magazine` limit 2 offset $offset";
$res = mysqli_query($link, $SQL);
$userSet = array();
while ($row = mysqli_fetch_assoc($res)) {
    $userSet[] = $row;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> JSH||magazine </title>
        <!-- Stylesheets -->

    </head>

    <body>
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/banner-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-8 col-xs-12">
                        <h1>Our magazine</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-3.html">Home</a></li>
                            <li class="active">Our magazine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="causes-list">

                            <!--Causes Block-->
                            <?php
                            foreach ($userSet as $row) {
                                echo '<div class="causes-block-two">';
                                echo '<div class="inner-box">';
                                echo '<div class="row clearfix">';
                                echo '<div class="image-column col-md-4 col-sm-4 col-xs-12">';
                                echo '<div class="image">';
                                echo "<img src='images/magazine_image/{$row['mag_image']}' alt='' />";
                                echo '<a href="causes-single.html" class="overlay-box"><span class="icon flaticon-unlink"></span></a>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="content-column col-md-8 col-sm-8 col-xs-12">';
                                echo '<div class="inner-column">';
                                echo "<h3><a href='causes-single.html'>{$row['mag_name']}</a></h3>";
                                echo "<div class='text'>{$row['mag_desc']}</div>";
                                echo '<div class="btns-box">';
                                echo "<a href='../images/magazine_file/{$row['mag_file']}' download='{$row['mag_file']}' class='theme-btn btn-style-four'>Read more and download</a>";
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                         
                            <!--Styled Pagination-->
                            <div class="styled-pagination">
                                <ul class="clearfix">
                                    <?php
                                    for ($i = 1; $i <= round($count/2); $i++) {
                                        echo "<li class='active'><a href='causes-list.php?page=$i'>$i</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!--End Styled Pagination-->

                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar default-sidebar">

                            <!--Category Blog-->


                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h2>Update News</h2>
                                </div>
                                <div class="inner-box">
                                    <?php
                                    $query = "SELECT * FROM `news` ORDER BY news_id DESC LIMIT 3";
                                    $res = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo '<article class="post">';
                                        echo "<figure class='post-thumb'><a href='blog-single.html'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
                                        echo "<div class='text'><a href='blog-single.html'>{$row['news_title']}</a></div>";
                                        echo '</article>';
                                    }
                                    ?>
                                </div>
                            </div>



                            <!--Newsletter Widget-->
                            <div class="sidebar-widget newsletter-widget">
                                <div class="inner-box">
                                    <div class="sidebar-title">
                                        <h2>News Letter</h2>
                                    </div>
                                    <div class="text">Those were the days and we'll do it our way yes our way. Make our dreams come true for me.</div>

                                    <!-- Search -->
                                    <div class="sidebar-newsletter-box">
                                        <form method="post" action="contact.html">
                                            <div class="form-group">
                                                <input type="email" name="email-field" value="" placeholder="Email....." required>
                                                <button type="submit"><span class="icon flaticon-symbol"></span></button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </div>


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

        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
<?php
include './footer_website.php';
?>