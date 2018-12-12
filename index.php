<?php
include '../JSH/include/connection_db.php';
?>
<?php
include './header_website.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>JSH-Home</title>
    </head>

    <body>


        <!--Main Slider-->
<!--            <section class="main-slider">

            <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                    <ul>
        <?php
        $query = "SELECT * FROM `slider`";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">';
            echo '<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""';
            echo "src='images/main-slider/{$row['slide_image']}>";
            $xx = '<div class="tp-caption tp-resizeme" 
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingtop="[0,0,0,0]"
                                     data-responsive_offset="on"
                                     data-type="text"
                                     data-height="none"
                                     data-width="[\'670\',\'670\',\'670\',\'550\']"
                                     data-whitespace="normal"
                                     data-hoffset="[\'15\',\'15\',\'15\',\'15\']"
                                     data-voffset="[\'20\',\'30\',\'20\',\'0\']"
                                     data-x="[\'left\',\'left\',\'left\',\'left\']"
                                     data-y="[\'middle\',\'middle\',\'middle\',\'middle\']"
                                     data-textalign="[\'top\',\'top\',\'top\',\'top\']"
                                     data-frames=\'[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]\'
                                     style="z-index: 7; white-space: nowrap;text-transform:left;">';
            echo '<div class="slider-content">';
            echo "<h2>{$row['slide_title']}</h2>";
            echo "<div class='text'>{$row['slide_subtitle']}</div>";
            echo '<div class="btns-box"></div></div></div></li>';
        }
        ?>








                                                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-4.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                                                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-4.jpg"> 
                        
                                                        <div class="tp-caption tp-resizeme" 
                                                             data-paddingbottom="[0,0,0,0]"
                                                             data-paddingleft="[0,0,0,0]"
                                                             data-paddingright="[0,0,0,0]"
                                                             data-paddingtop="[0,0,0,0]"
                                                             data-responsive_offset="on"
                                                             data-type="text"
                                                             data-height="none"
                                                             data-width="['670','670','670','550']"
                                                             data-whitespace="normal"
                                                             data-hoffset="['15','15','15','15']"
                                                             data-voffset="['20','30','20','0']"
                                                             data-x="['right','right','right','right']"
                                                             data-y="['middle','middle','middle','middle']"
                                                             data-textalign="['top','top','top','top']"
                                                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                                             style="z-index: 7; white-space: nowrap;text-transform:left;">
                                                            <div class="slider-content">
                                                                <h2>Help Homeless People.</h2>
                                                                <div class="text">We are ready for provide better service to <br> make the world happy</div>
                                                                <div class="btns-box">
                                                                </div>
                                                            </div>
                                                        </div>
                        
                                                    </li>

                    </ul>
                </div>
            </div>
        </section>-->
        <section class="main-slider">

            <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                    <ul>
                        <?php
                        $query = "select * from slider";
                        $result = mysqli_query($link, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($i == 1) {
                                echo '<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default"';
                                echo "data-thumb='images/main-slider/{$row['slide_image']}' data-title='Slide Title' data-transition='parallaxvertical'>";
                                echo '<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" ';
                                echo "src='images/main-slider/{$row['slide_image']}'>";
                                $x = <<<HTML
                            <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['670','670','670','550']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['20','30','20','0']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
HTML;
                            } else {
                                echo '<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default"';
                                echo "data-thumb='images/main-slider/{$row['slide_image']}' data-title='Slide Title' data-transition='parallaxvertical'>";
                                echo '<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" ';
                                echo "src='images/main-slider/{$row['slide_image']}'>";
                                $x = <<<HTML
                            <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['670','670','670','550']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['20','30','20','0']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
HTML;
                            }
                            echo $x;
                            $i++;
                            echo "<div class='slider-content'>";
                            echo "<h2>{$row['slide_title']}</h2>";
                            echo "<div class='text'>{$row['slide_subtitle']}</div>";
                            echo "<div class='btns-box'></div></div></div></li>";
                        }
                        ?>                	
                    </ul>
                </div>
            </div>
        </section>
        <!--End Main Slider-->

        <!--Text Banner-->
        <section class="text-banner">
            <div class="auto-container">
                <div class="text">jordanian Socaity of Hematology-JSH</div>
            </div>
        </section>
        <!--End Text Banner-->


        <!--Welcome Section-->
        <section class="welcome-section no-padd-top">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Welcome to JSH Socaity</h2>
                </div>
                <div class="row clearfix">
                    <!--Video Column-->
                    <div class="video-column col-md-6 col-sm-12 col-xs-12">
                        <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="images/resource/video-img.jpg" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-right-arrow-2"></span></a>
                        </div>
                    </div>
                    <!--Content Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="text">
                                <p>We are confident to confirm that all members in Charity are professionals in the charity.It means that human resources experience in the field with consultant, organization events for needy.</p>
                                <p>Our long – term working experience effectively brings us achievement.Our mission is to provide the great result for clients on time. Especially, if they have any questions relating the Charity, please send us.</p>
                            </div>
                            <ul class="list-style-one">
                                <li>We will try our best to deal with issues.</li>
                                <li>Usu graecis eleifend intellege ne quiaug tollit.</li>
                            </ul>
                            <a href="about.html" class="theme-btn btn-style-three">Read More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Welcome Section-->


        <!--Call To Action-->
        <section class="call-to-action" style="background-image:url(images/background/2.jpg)">
            <div class="auto-container">
                <div class="text">Lorem ipsum dolor incorrupte exu. Iisque homero dinoaliqui hisno eahaselitr luemosanta. <br> Usu graecis eleifend intellege ne quiaug tollit. </div>
            </div>
            <div class="outer-box">

                <a href="idea.html" class="theme-btn btn-style-two" style="margin-left:10%; ">Share Your idea</a>

            </div>
        </section>


        <!--Events Section-->
        <section class="events-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Upcoming Events</h2>
                </div>
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Event Block-->
                            <?php
                            $sql = "SELECT * FROM events ORDER BY event_id DESC LIMIT 2";
                            $result = mysqli_query($link, $sql);
                            $userSet = array();
                            while ($row = mysqli_fetch_assoc($result)) {
                                $userSet[] = $row;
                            }
                            foreach ($userSet as $value) {
                                echo '<div class="event-block col-md-6 col-sm-6 col-xs-12">';
                                echo '<div class="inner-box">';
                                echo '<div class="image">';
                                echo "<img src='images/Events/{$value['event_image']}'>";
                                echo '</div>';
                                echo '<div class="lower-box">';
                                echo "<div class='post-info'> {$value['event_date']}/ <span class='theme_color'>{$value['event_location']}</span></div>";
                                echo "<h3><a href='events-single.php?id={$value['event_id']} '>{$value['event_name']}</a></h3>";
                                echo "<div class='text'>{$value['event_desc']}</div>";
                                echo ' </div>';
                                echo ' </div>';
                                echo ' </div>';
                            }
                            ?>



                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <!--Event Block Two-->
                        <?php
                        $query_event = "SELECT * FROM events ORDER BY event_id ASC LIMIT 3";
                        $result = mysqli_query($link, $query_event);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="event-block-two">';
                            echo '<div class="inner-box">';
                            echo '<div class="content">';
                            $event_date = substr($row['event_date'], 10, 6);
                            echo "<div class='date-box'>{$event_date}</div>";
                            echo "<h3><a href='events-single.php?id={$row['event_id']}'>{$row['event_name']}</a></h3>";
                            echo "<div class='post-info'>{$row['event_date']} </div>";
                            echo '</div>';
                            echo'</div>';
                            echo'</div>';
                        }
                        ?>


                    </div>
                </div>
            </div>
        </section>
        <!--End Events Section-->


        <!--End Call To Action Two-->

        <!--Team Section Two-->
        <section class="team-section-two">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Our Team</h2>
                </div>

                <div class="four-item-carousel owl-carousel owl-theme">

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-5.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-6.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-7.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-8.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-5.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-6.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-7.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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

                    <!--Team Block Two-->
                    <div class="team-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/team-8.jpg" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>Jozaf Robat</h3>
                                        <div class="designation">Project Manager</div>
                                        <ul class="social-icon-two">
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
        </section>
        <!--End Team Section Two-->

        <!--Gallery Section-->
        <section class="gallery-section full-widthgallery">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Our Gallery</h2>
                </div>

                <!--Sortable Gallery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs pull-right filter-btns">
                            <li class="filter active" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".homeless">Homeless</li>
                            <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                            <li class="filter" data-role="button" data-filter=".food">Food Help</li>
                            <li class="filter" data-role="button" data-filter=".water">Clean Water</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filter-list clearfix">

                <!--Gallery Block-->
                <?php
                $SQL = "SELECT * FROM `gallery` ";
                $res = mysqli_query($link, $SQL);
                $userSet = array();
                while ($row = mysqli_fetch_assoc($res)) {
                    $userSet[] = $row;
                }
                foreach ($userSet as $value) {

                    echo '<div class="gallery-block style-two   col-lg-3 col-md-4 col-sm-6 col-xs-12">';

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

                <!--Gallery Block-->

                <!--                                  <div class="gallery-block style-two mix all charity water col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="inner-box">
                                                            <div class="image">
                                                                <img src="images/gallery/9.jpg" alt="" />
                                                                <div class="overlay-box">
                                                                    <div class="content">
                                                                        <h3><a href="gallery-single.html">Education</a></h3>
                                                                        <ul class="option-list">
                                                                            <li><a class="lightbox-image" href="images/gallery/9.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                                                            <li><a href="gallery-single.html"></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->

                <!--Gallery Block-->


                <!--Gallery Block-->
                <!--<div class = "gallery-block style-two mix all charity food water col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class = "inner-box">
                <div class = "image">
                <img src = "images/gallery/11.jpg" alt = "" />
                <div class = "overlay-box">
                <div class = "content">
                <h3><a href = "gallery-single.html">Education</a></h3>
                <ul class = "option-list">
                <li><a class = "lightbox-image" href = "images/gallery/11.jpg" data-fancybox-group = "gallery-one"><span class = "la la-arrows"></span></a></li>
                <li><a href = "gallery-single.html"></a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div> -->

                <!--Gallery Block-->
                <!--<div class = "gallery-block style-two mix all food water col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class = "inner-box">
                <div class = "image">
                <img src = "images/gallery/12.jpg" alt = "" />
                <div class = "overlay-box">
                <div class = "content">
                <h3><a href = "gallery-single.html">Education</a></h3>
                <ul class = "option-list">
                <li><a class = "lightbox-image" href = "images/gallery/12.jpg" data-fancybox-group = "gallery-one"><span class = "la la-arrows"></span></a></li>
                <li><a href = "gallery-single.html"></a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div> -->

                <!--Gallery Block-->
                <!--<div class = "gallery-block style-two mix all water col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class = "inner-box">
                <div class = "image">
                <img src = "images/gallery/13.jpg" alt = "" />
                <div class = "overlay-box">
                <div class = "content">
                <h3><a href = "gallery-single.html">Education</a></h3>
                <ul class = "option-list">
                <li><a class = "lightbox-image" href = "images/gallery/13.jpg" data-fancybox-group = "gallery-one"><span class = "la la-arrows"></span></a></li>
                <li><a href = "gallery-single.html"></a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div> -->

                <!--Gallery Block-->


                <!--<div class = "gallery-block style-two mix all homeless food col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class = "inner-box">
                <div class = "image">
                <img src = "images/gallery/14.jpg" alt = "" />
                <div class = "overlay-box">
                <div class = "content">
                <h3><a href = "gallery-single.html">Education</a></h3>
                <ul class = "option-list">
                <li><a class = "lightbox-image" href = "images/gallery/14.jpg" data-fancybox-group = "gallery-one"><span class = "la la-arrows"></span></a></li>
                <li><a href = "gallery-single.html"></a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div> -->

            </div>

        </section>
        <!--End Gallery Section-->


        <!--Testimonial Section-->
        <section class = "testimonial-section" style = "background-image:url(images/background/4.jpg)">
            <div class = "auto-container">
                <div class = "carousel-outer">

                    <!--Sec Title-->
                    <div class = "sec-title">
                        <h2>Tips from our member</h2>
                    </div>

                    <div class = "single-item-carousel owl-carousel owl-theme">

                        <!--Testimonial Block-->
                        <?php
                        $SQL = "SELECT * FROM `tips`";
                        $result = mysqli_query($link, $SQL);
                        $userSet = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $userSet[] = $row;
                        }
                        foreach ($userSet as $value) {
                            echo ' <div class="testimonial-block">';
                            echo '<div class = "inner-box">';
                            echo '<div class = "content">';
                            echo "<div class = 'text'><span class = 'left-icon la la-quote-left'></span> {$value['tip_text']}  <span class = 'right-icon la la-quote-right'></span></div>";
                            echo "<h3>{$value['tip_title']}</h3>";
                            echo "<div class = 'designation'>{$value['tip_position']}</div>";
                            echo '</div>';
                            echo '<div class = "image">';
                            echo "<img src = 'images/resource/{$value['tip_image']}' alt = '' />";
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Section-->



        <!--Subscribe Section-->
        <section class="subscribe-section style-two" style="background-image:url(images/background/pattern-1.png)">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <h2>  Subscribe To Our Newsletter</h2>
                    </div>
                    <div class="form-column col-md-6 col-sm-12 col-xs-12">

                        <!--Subscribe Section-->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter your E-mail" required>
                                    <button type="submit" class="theme-btn btn-style-six">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Subscribe Section-->

        <!--News Section-->
        <section class="news-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title">
                    <h2>Latest News</h2>
                </div>
                <div class="row clearfix">

                    <!--News Block-->
                    <?php
                    $query = "SELECT * FROM `news`ORDER BY news_id DESC LIMIT 3";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="news-block col-md-4 col-sm-6 col-xs-12">';
                        echo '<div class="inner-box">';
                        echo '<div class="image">';
                        echo "<img src='images/Events/{$row['news_image']}' />";
                        echo "<a href='blog-single.php?id={$row['news_id']}' class='overlay-box'><span class='icon flaticon-unlink'></span></a>";
                        echo '</div>';
                        echo '<div class="lower-content">';
                        echo "<div class='post-date'>{$row['news_month']}</div>";
                        echo "<h3><a href='blog-single.php?id={$row['news_id']}'>{$row['news_title']}</a></h3>";
                        echo "<div class='text'>{$row['news_text']}</div>";
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                    <!--                        <div class="news-block col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="images/resource/news-1.jpg" alt="" />
                                                        <a href="blog-single.html" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="post-date">06<span>oct</span></div>
                                                        <h3><a href="blog-single.html">We providing eat for the people.</a></h3>
                    
                                                        <div class="text">Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.</div>
                                                    </div>
                                                </div>
                                            </div>-->

                    <!--News Block-->
                    <!--                        <div class="news-block col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="images/resource/news-2.jpg" alt="" />
                                                        <a href="blog-single.html" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="post-date">28<span>nov</span></div>
                                                        <h3><a href="blog-single.html">Make better life for the children.</a></h3>
                    
                                                        <div class="text">Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.</div>
                                                    </div>
                                                </div>
                                            </div>-->

                    <!--News Block-->
                    <!--                        <div class="news-block col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <img src="images/resource/news-3.jpg" alt="" />
                                                        <a href="blog-single.html" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="post-date">22<span>dec</span></div>
                                                        <h3><a href="blog-single.html">We Providing Clothes for the children. </a></h3>
                    
                                                        <div class="text">Great pleasure to take a trivial example, which of us undertakes laborious soprt the orgnization.</div>
                                                    </div>
                                                </div>
                                            </div>-->

                </div>
            </div>
        </section>
        <!--News Section-->

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
        <!--                            <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
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


        <!--Contact Info Section-->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <ul class="list-style-three">
                            <li><span class="icon flaticon-location-pin"></span>Cecil Sharp House <br> 14 Tottenham Court Road, <br> NewYark.</li>
                            <li><span class="icon flaticon-technology-1"></span>1(784)-775-97-377</li>
                            <li><span class="icon flaticon-symbol"></span>info@yoursite.com</li>
                            <li><span class="icon flaticon-world"></span>www.infoyoursite.com</li>
                        </ul>

                        <!--Map Canvas-->
                        <div id="containerBlood"  class="hidden-sm  hidden-xs">
                            <div class="pour"></div>
                            <div class="pourTube"></div>
                            <div id="beaker">
                                <div class="beer-foam">

                                </div>
                                <div id="plastic">

                                </div>  

                                <div class="drop firstDrop"></div>
                                <div class="drop secondDrop"></div>
                                <div class="drop thirdDrop"></div>


                                <div id="liquid">
                                    <div class="bubble bubble1"></div>
                                    <div class="bubble bubble2"></div>
                                    <div class="bubble bubble3"></div>
                                    <div class="bubble bubble4"></div>
                                    <div class="bubble bubble5"></div>
                                </div>
                            </div>
                        </div>



                    </div>


                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Get in Touch</h2>
                            <div class="text">if you want to get more info, ping us now.</div>

                            <!-- Default Form -->
                            <div class="default-form">
                                <!--Comment Form-->
                                <form method="post" action="@mailto">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Phone No." required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Subject" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Now</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                            <!--End Default Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Contact Info Section-->

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
        $query = "SELECT * FROM `news` ORDER BY news_id DESC LIMIT 3 ";

        $res = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($res)) {
            echo '<article class="post">';
            echo "<figure class='post-thumb'><a href='blog-single.html'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
            echo "<div class='text'><a href='blog-single.html'>{$row['news_title']}</a></div>";
            echo "<div class='post-info'>{$row['news_day']}/{$row['news_month']}</div>";
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
    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>

    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->

</body>
</html>
<?php
include './footer_website.php';
?>