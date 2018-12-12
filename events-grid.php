<?php
include './header_website.php';
include '../JSH/include/connection_db.php';
$QueryPage = "SELECT COUNT(*) as count FROM `events`";
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
//**********
$SQL = "select * from `events` limit 2 offset $offset";
$res = mysqli_query($link, $SQL);
$userSet = array();
while ($row = mysqli_fetch_assoc($res)) {
    $userSet[] = $row;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> JSH||Events</title>

    </head>

    <body>
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/banner-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-8 col-xs-12">
                        <h1>Events</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Events grid</li>
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
                    <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="events-grids">

                            <div class="row clearfix">

                                <!--Event Block Four-->
                                <?php
//                                    $SQL = "SELECT * FROM `events`";
//                                    $res = mysqli_query($link, $SQL);
//                                    $userSet = array();
//                                    while ($row = mysqli_fetch_assoc($res)) {
//                                        $userSet[] = $row;
//                                    }
                                foreach ($userSet as $value) {
                                    echo "<div class='event-block-four col-md-6 col-sm-6 col-xs-12'>";
                                    echo '<div class="inner-box">';
                                    echo '<div class="image">';
                                    echo "<img src='images/Events/{$value['event_image']}' alt='' />";
                                    echo ' <a href="events-single.html" class="overlay-box"><span class="icon flaticon-unlink"></span></a>';
                                    echo '</div>';
                                    echo '<div class="lower-box">';
                                    echo "<div class='post-info'>{$value['event_date']} / <span class='theme_color'>{$value['event_location']}</span></div>";
                                    echo "<h3><a href='events-single.html'>{$value['event_name']}</a></h3>";
                                    echo "<div class='text'>{$value['event_desc']}</div>";
                                    echo '<div class="btns-box">';
                                    echo " <a href='events-single.php?id={$value['event_id']}' class='theme-btn btn-style-four'>More Detail</a>";
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>

                            </div>

                            <!--Styled Pagination-->
                            <div class="styled-pagination">
                                <ul class="clearfix">
                                    <?php
                                    for ($i = 1; $i <= round($count / 2); $i++) {
                                        echo "<li class='active'><a href='events-grid.php?page=$i'>$i</a></li>";
                                    }
                                    ?>
<!--                                 <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" class="active">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>-->
                                </ul>
                            </div>
                            <!--End Styled Pagination-->

                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar style-two">



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
                                        echo "<figure class='post-thumb'><a href='blog-single.php?id={$row['news_id']}'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
                                        echo "<div class='text'><a href='blog-single.php?id={$row['news_id']}'>{$row['news_title']}</a></div>";
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
<!--                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>-->
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