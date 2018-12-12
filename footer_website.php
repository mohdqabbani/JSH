
                   <footer class="footer-style-two">
                <div class="auto-container">
                    
                    <div class="widgets-section">
                        <div class="row clearfix">

                            
                            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">

                                   
                                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="footer-widget logo-widget">
                                            <div class="logo">
                                                <a href="index.php"><img src="images/logo.jpg" style="height:70px;width:210px;" alt="" /></a>
                                            </div>
                                            <div class="text">Core values are the fundamental beliefs of a person or organization. The core values are the guiding prin ples that dictate behavior and action suas labore saperet has there any quote for write lorem percit latineu suas dummy.</div>
                                            <div class="text"><a href="https://www.linkedin.com/in/fakher-aldeen-odeh-778045148/" class="fakher"> Website desing By ||Front-end developer: Mohammad Qabbani </a> </div>
                                            <div class="text"><a href="https://www.beyondsolns.com" class="fakher"> Back-end By || Mohammad Qabbani</a> </div>

                                        </div>

                                    </div>

                                   
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

                           
                            <div class="big-column col-md-6 col-sm-12 col-xs-12">
                                <div class="row clearfix">

                                  
                                    <div class="footer-column col-md-7 col-sm-7 col-xs-12">
                                        <div class="footer-widget news-widget style-two">
                                            <h2>Latest News</h2>

                                            <?php
                                            $query = "SELECT * FROM `news` ORDER BY news_id DESC LIMIT 3 ";

                                            $res = mysqli_query($link, $query);
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                echo '<article class="post">';
                                                echo "<figure class='post-thumb'><a href='blog-single.php?id={$row['news_id']}'><img src='images/news/{$row['news_image']}' alt=''></a></figure>";
                                                echo "<div class='text'><a href='blog-single.php?id={$row['news_id']}'>{$row['news_title']}</a></div>";
                                                echo "<div class='post-info'>{$row['news_day']}/{$row['news_month']}</div>";
                                                echo '</article>';
                                            }
                                            ?>


                                        </div>
                                    </div>

                                  
                                    <div class="footer-column col-md-5 col-sm-5 col-xs-12">
                                        <div class="footer-widget links-widget">
                                            <h2>Useful Link</h2>
                                            <ul class="links">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="blog-default.php">Blog </a></li>
                                                <li><a href="events-grid.php">Event </a></li>
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
            </footer>
    </body>
</html>
