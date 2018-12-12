<?php
include './header_website.php';
include './include/connection_db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/banner-4.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title -->
                    <div class="title-column col-md-6 col-sm-8 col-xs-12">
                        <h1>magazine Detail</h1>
                    </div>
                    <!--Bread Crumb -->
                    <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"> magazine Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side / Causes Single-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="causes-single">
                            <div class="inner-box">
                                <div class="upper-box">
                                    <h2>magazine Name</h2>
                                    <!--Skills-->

                                </div>
                                <div class="image">
                                    <?php
                                    $sql = "SELECT * FROM `magazine` WHERE `mag_id` = {$_GET['id']}";
                                    $res = mysqli_query($link, $sql);
                                    $userSet = array();
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $userSet = $row;
                                    }
                                    echo "<img src='images/magazine_image/{$userSet['mag_image']}' alt='' />";
                                    ?>
                                    <!--<img src="images/resource/causes-single.jpg" alt="" />-->
                                </div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <?php
                                        echo "<h3>{$userSet['mag_name']}</h3>";
                                        ?>
                                        <!--<h3>magazine Description</h3>-->
                                    </div>

                                </div>
                                <div class="text">
                                    <?php
                                    echo "<p>{$userSet['mag_desc']}</p>";
                                    ?>
                                </div>
                                <div class="two-column">
                                    <div class="row clearfix">

                                        <div class="btns-box">

                                            <a href="images/magazine_file/{$userSet['mage_file']}" download="" class="theme-btn btn-style-four" style="float: right; margin-right:10%; ">download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <!--End Comment Form --> 

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

    </body>
</html>
<?php
include './footer_website.php';
?>