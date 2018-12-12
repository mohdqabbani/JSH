<?php
include './header_website.php';
include './include/connection_db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Events-Single</title>
    </head>
    <body>
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/banner-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-8 col-xs-12">
                        <h1>Event Detail</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-3.html">Home</a></li>
                            <li class="active">Event Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="events-single">
                            <div class="inner-box">
                                <div class="image">
                                    <?php
                                    $sql = "SELECT * FROM `events` WHERE `event_id` = {$_GET['id']}";
                                    $res = mysqli_query($link, $sql);
                                    $userSet = array();
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $userSet = $row;
                                    }

                                    echo "  <img src='images/Events/{$userSet['event_image']}' alt='' />";
                                    ?>
                                    <!--<img src="images/resource/event-single.jpg" alt="" />-->
                                </div>
                                <div class="lower-content">
                                    <?php
                                    echo "<div class='post-info'>{$userSet['event_date']} <span class='theme_color'>{$userSet['event_location']}</span></div>";
                                    echo "<h3>{$userSet['event_name']}</h3>";
                                    echo " <div class='text'>
                                        <p>{$userSet['event_desc']}</p>
                                    </div>";
                                    ?>
                                    <!--<div class="post-info">03:00 PM, 16 October, 2017 / <span class="theme_color">25 Newyork City.</span></div>-->
                                    <!--                                    <h3>Food help for the hunger people</h3>
                                                                        <div class="text">
                                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                                            <p>Ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                                                        </div>
                                                                        <ul class="list-style-one">
                                                                            <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                                                                            <li>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                                                            <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</li>
                                                                        </ul>-->

                                    <!--Ticket Box-->
                                    <div class="ticket-box">
                                        <div class="row clearfix">
                                            <div class="timer-column col-md-5 col-sm-6 col-xs-12">
                                            </div>
                                            <div class="social-column col-md-7 col-sm-6 col-xs-12">
                                                <div class="inner-column">
                                                    <ul class="social-icon-three">
                                                        <li class="share">Share :</li>
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

                                </div>
                            </div>
                        </div>

                        <!--Related Projects-->
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar default-sidebar">


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
                                        echo "<figure class='post-thumb'><a href='blog-single.php'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
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

    </body>
</html>
<?php
include './footer_website.php';
?>