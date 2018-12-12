<?php
include './header_website.php';
include './include/connection_db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog- Single</title>
    </head>
    <body>
        <!--Sidebar Page Container-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="blog-single">
                            <div class="inner-box">
                                <div class="image">
                                    <?php
                                    $sql = "SELECT * FROM `news` WHERE `news_id` = {$_GET['id']}";
                                    $res = mysqli_query($link, $sql);
                                    $userSet = array();
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $userSet = $row;
                                    }
                                    echo "<img src='images/news/{$userSet['news_image']}' alt='' />";
                                    ?>
<!--                                    <img src="images/resource/news-10.jpg" alt="" />-->
                                    <div class="post-date">08 <span>nov</span></div>
                                </div>
                                <?php
                                echo "<h3>{$userSet['news_title']}</h3>";
                                ?>
                                <!--<h3>Provide the clean water for the poor people.</h3>-->
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-user-1"></span>Admin</li>

                                </ul>
                                <div class="text">
                                    <?php
                                    echo "<p>{$userSet['news_text']}</p>";
                                    ?>
<!--                                    <div class="two-column">
                                        <div class="row clearfix">
                                            <div class="inner-column col-md-6 col-sm-6 col-xs-12">
                                                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                <ul class="list-style-one">
                                                    <li>Duis aute irure dolor ut labore in voluptate</li>
                                                    <li>Velit esse cillum dolore eu fugiat nulla exercitation.</li>
                                                    <li>Sed do eiusmod tempor incididunt dolore aliqua.</li>
                                                    <li>Ut enim ad minim veniam, nostrud ullamco laboris nisi</li>
                                                </ul>
                                            </div>
                                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                                <div class="image">
                                                    <img src="images/resource/news-11.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>-->
                                </div>

                                <!--post-share-options-->
<!--                                <div class="post-share-options clearfix">
                                    <div class="pull-left tags"><span>Tags:</span><a href="#">Donation</a>, <a href="#">Charity</a>, <a href="#">Fundraising</a></div>
                                    <div class="pull-right">
                                        <ul class="social-icon-three">
                                            <li class="share">Share:</li>

                                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                        </ul>
                                    </div>
                                </div>-->

                            </div>
                        </div>

                        <!--Author Box-->
<!--                        <div class="author-box">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="image">
                                        <img src="images/resource/author-2.jpg" alt="" />
                                    </div>
                                    <h3>Willium Ranto</h3>
                                    <div class="text">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </div>
                                    <ul class="social-icon-three">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--End Author Box-->

                        <!--Comments Area-->

                        <!--End Comments Area-->

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
                                        echo "<figure class='post-thumb'><a href='blog-single.php?id={$row['news_id']}'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
                                        echo "<div class='text'><a href='blog-single.php?id={$row['news_id']}'>{$row['news_title']}</a></div>";
                                        echo '</article>';
                                    }
                                    ?>
<!--                                    <article class="post">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                        <div class="text"><a href="blog-single.html">Providing Clothes for the children</a></div>
                                        <div class="post-info">250 Views</div>
                                    </article>-->
<!--
                                    <article class="post">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                        <div class="text"><a href="blog-single.html">Clean Water Provide by Poor People!!</a></div>
                                        <div class="post-info">92 Views</div>
                                    </article>-->
<!--
                                    <article class="post">
                                        <figure class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                        <div class="text"><a href="blog-single.html">Help hunger People!!</a></div>
                                        <div class="post-info">360 Views</div>
                                    </article>-->
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


    </body>
</html>
<?php
include './footer_website.php';
?>