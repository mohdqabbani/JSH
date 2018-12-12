<?php
include './header_website.php';
include '../JSH/include/connection_db.php';
$QueryPage = "SELECT COUNT(*) as count FROM `blog`";
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
$SQL = "select * from `blog` limit 2 offset $offset";
$res = mysqli_query($link, $SQL);
$userSet = array();
while ($row = mysqli_fetch_assoc($res)) {
    $userSet[] = $row;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>JSH||Blog</title>

    </head>

    <body>

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <?php
                        foreach ($userSet as $row) {
                            echo '<div class="blog-single cp-blog-default">';
                            echo '<div class="inner-box">';
                            echo '<div class="image">';
                            echo "<a href='blog-single.html'><img src='images/blog/{$row['image']}' alt=''/></a>";
                            echo "<div class='post-date' style='font-size:24px'>{$row['blog_date']}</div>";
                            echo '</div>';
                            echo "<h3><a href='blog-single.html'>{$row['title']}</a></h3>";
                            echo '<div class="text">';
                            echo "<p>{$row['text']}</p>";
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>



                        <!--Styled Pagination-->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <?php
                                for ($i = 1; $i <= ($count / 2); $i++) {
                                    echo "<li class='active'><a href='blog-default.php?page=$i'>$i</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <!--End Styled Pagination-->

                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar">


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
//                                            echo '<div class="post-info">250 Views</div>';
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
                            echo "<li class='slide-item'><figure class='image-box'><a href='#'><img src='images/partners/{$row['partner_image']}' alt=''></a></figure></li>";
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Clients Section-->

        <!--Footer Style Two-->
        <!--            <footer class="footer-style-two">
                        <div class="auto-container">
                            Widgets Section
                            <div class="widgets-section">
                                <div class="row clearfix">
        
                                    big column
                                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                        <div class="row clearfix">
        
                                            Footer Column
                                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="footer-widget logo-widget">
                                                    <div class="logo">
                                                        <a href="index.html"><img src="images/logo.jpg" style="height:70px;width:210px;" alt="" /></a>
                                                    </div>
                                                    <div class="text">Core values are the fundamental beliefs of a person or organization. The core values are the guiding prin ples that dictate behavior and action suas labore saperet has there any quote for write lorem percit latineu suas dummy.</div>
                                                    <div class="text"><a href="https://www.linkedin.com/in/fakher-aldeen-odeh-778045148/" class="fakher"> Website desing By ||Front-end developer: Fakher_Aldeen Odeh</a> </div>
                                                    <div class="text"><a href="https://www.beyondsolns.com" class="fakher"> Back-end By || Beyond Company</a> </div>
        
                                                </div>
                                            </div>
        
                                            Footer Column
                                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="footer-widget product-widget">
                                                    <h2>Our Project</h2>
                                                    <ul class="product-list">
                                                        <li><a href="#">Water Surve</a></li>
                                                        <li><a href="#">Education for all</a></li>
                                                        <li><a href="#">Treatment</a></li>
                                                        <li><a href="#">Food Serving</a></li>
                                                        <li><a href="#">Cloth</a></li>
                                                        <li><a href="#">Selter Project</a></li>
                                                        <li><a href="#">Help orphan</a></li>
                                                    </ul>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
        
                                    big column
                                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                        <div class="row clearfix">
        
                                            Footer Column
                                            <div class="footer-column col-md-7 col-sm-7 col-xs-12">
                                                <div class="footer-widget news-widget style-two">
                                                    <h2>Latest News</h2>
        <?php
        $query = "SELECT * FROM `news` ORDER BY news_id DESC LIMIT 3";
        $res = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($res)) {
            echo '<article class="post">';
            echo "<figure class='post-thumb'><a href='blog-single.html'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
            echo "<div class='text'><a href='blog-single.html'>{$row['news_title']}</a></div>";
//                                                echo '<div class="post-info">250 Views</div>';
            echo '</article>';
        }
        ?>
        
                                                </div>
                                            </div>
        
                                            Footer Column
                                            <div class="footer-column col-md-5 col-sm-5 col-xs-12">
                                                <div class="footer-widget links-widget">
                                                    <h2>Useful Link</h2>
                                                    <ul class="links">
        
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="blog-default">Blog </a></li>
                                                        <li><a href="events-grid.html">Event </a></li>
                                                        <li><a href="team.html">Our Team</a></li>
                                                        <li><a href="gallery-fullwidth.html">Portfolio </a></li>
                                                        <li><a href="testimonial.html">tips</a></li>
                                                    </ul>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
        
                                </div>
                            </div>
        
                        </div>
        
                        Footer Bottom
                        <div class="footer-bottom">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-8 col-xs-12">
                                        <div class="copyright">Copyright &copy; 2018 jordanian Socaity of Hematology. All rights reserved</div>
                                    </div>
                                    <div class="social-column col-md-6 col-sm-4 col-xs-12">
                                        <ul class="social-icon-one style-two">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>-->
        <!--Footer Style Two-->

    </div>
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