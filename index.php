<?php require 'initFB.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Rotaract Pool</title>


        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet"> 
        <link href="css/custom.css" rel="stylesheet">
    <body>

        <!-- Preloader -->
        <div class="page-loader" style="display: none;">
            <div class="loader" style="display: none;">Loading...</div>
        </div>

        <!-- Navigation start -->
        <nav class="navbar navbar-custom navbar-fixed-top one-page navbar-transparent" role="navigation">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Rotaract Pool</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home" class="section-scroll">Home</a></li>
                        <li><a href="#details" class="section-scroll">Details</a></li>
                        <li><a href="#register" class="section-scroll">Register</a></li>
                        <li><a href="#rules" class="section-scroll">Rules</a></li>
                        <li><a href="#about" class="section-scroll">About</a></li>                      
                        <li><a href="#" class="section-scroll">Contact</a></li>

                    </ul>
                </div>

            </div>

        </nav>
        <!-- Navigation end -->

        <!-- Home start -->
        <section id="home" class="home-section home-parallax home-fade home-full-height bg-dark-30 bg-gradient"  >

            <div class="hs-caption">
                <div class="caption-content">
                    <div class="hs-title-size-1 font-alt mb-30 text-color-white">
                        Welcome to Pool

                    </div>
                    <div class="hs-title-size-4 font-alt mb-40 text-color-white">
                        We are Rotaract

                    </div>
                    <a href="#register" class="btn btn-border-w btn-round section-scroll">Register Now</a>
                </div>
            </div>

        </section>
        <!-- Home end -->

        <div class="main">

            <section id="details" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">

                            <h2 class="module-title font-alt">Welcome to Rotaract</h2>
                            <div class="module-subtitle font-serif large-text">
                                <p> Integre quaerendum mel ut, an cum putant pericula constituam, et quem dolorem vel.</p>
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-2 col-sm-offset-5">

                            <div class="large-text align-center">
                                <a href="#register" class="section-scroll"><i class="fa fa-angle-down"></i></a>
                            </div>

                        </div>

                    </div>

                </div><!-- .container -->
            </section>
            <!-- About end -->

            <!-- Divider -->
            <hr class="divider-w">
            <!-- Divider -->

            <!-- About start -->
            <section id="register" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">

                            <h2 class="module-title font-alt">Register Now</h2>
                            <div class="module-subtitle font-serif large-text">
                                <p> Integre quaerendum mel ut, an cum putant pericula constituam, et quem dolorem vel.</p>
                                <?php
                                if (isset($loginUrl)) {
                                    echo '<a href="' . $loginUrl . '" > Register with Facebook </a>';
                                }
                                ?>
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-2 col-sm-offset-5">

                            <div class="large-text align-center">
                                <?php
                                if (isset($user)) {
                                    echo 'User ' . $user['name'] . ' is registerd';
                                }
                                ?>
                            </div>

                        </div>

                    </div>

                </div><!-- .container -->
            </section>
            <!-- About end -->

            <!-- Divider -->
            <hr class="divider-w">
            <!-- Divider -->

            <section id="rules" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <h2 class="module-title font-alt">Rules</h2>
                            <div class="module-subtitle font-serif">
                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row multi-columns-row">

                        <!--                         Features start 
                                                <div class="col-sm-6 col-md-3 col-lg-3">
                        
                                                    <div class="features-item">
                                                        <div class="features-icon">
                                                            <span class="icon-lightbulb"></span>
                                                        </div>
                                                        <h3 class="features-title font-alt">Ideas and concepts</h3>
                                                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                                                    </div>
                        
                                                </div>
                                                 Features end 
                        
                                                 Features start 
                                                <div class="col-sm-6 col-md-3 col-lg-3">
                        
                                                    <div class="features-item">
                                                        <div class="features-icon">
                                                            <span class="icon-bike"></span>
                                                        </div>
                                                        <h3 class="features-title font-alt">Optimised for speed</h3>
                                                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                                                    </div>
                        
                                                </div>
                                                 Features end 
                        
                                                 Features start 
                                                <div class="col-sm-6 col-md-3 col-lg-3">
                        
                                                    <div class="features-item">
                                                        <div class="features-icon">
                                                            <span class="icon-tools"></span>
                                                        </div>
                                                        <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
                                                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                                                    </div>
                        
                                                </div>
                                                 Features end 
                        
                                                 Features start 
                                                <div class="col-sm-6 col-md-3 col-lg-3">
                        
                                                    <div class="features-item">
                                                        <div class="features-icon">
                                                            <span class="icon-gears"></span>
                                                        </div>
                                                        <h3 class="features-title font-alt">Highly customizable</h3>
                                                        Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                                                    </div>
                        
                                                </div>
                                                 Features end -->

                        <!-- Features start -->
                        <div class="col-sm-6 col-md-3 col-lg-3">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="icon-tools-2"></span>
                                </div>
                                <h3 class="features-title font-alt">Category: Double </h3>
                                Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                            </div>

                        </div>
                        <!-- Features end -->

                        <!-- Features start -->
                        <div class="col-sm-6 col-md-3 col-lg-3">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="icon-genius"></span>
                                </div>
                                <h3 class="features-title font-alt">Category: Singles Men</h3>
                                Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                            </div>

                        </div>
                        <!-- Features end -->

                        <!-- Features start -->
                        <div class="col-sm-6 col-md-3 col-lg-3">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="icon-mobile"></span>
                                </div>
                                <h3 class="features-title font-alt">Category: Singles Women</h3>
                                Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                            </div>

                        </div>
                        <!-- Features end -->

                        <!-- Features start -->
                        <div class="col-sm-6 col-md-3 col-lg-3">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="icon-lifesaver"></span>
                                </div>
                                <h3 class="features-title font-alt">Other Rules</h3>
                                Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.
                            </div>

                        </div>
                        <!-- Features end -->

                    </div><!-- .row -->

                </div><!-- .container -->
            </section>
            <!-- Features end -->
            <hr class="divider-w">

            <section id="about" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <h2 class="module-title font-alt">Meet Our Team</h2>
                            <div class="module-subtitle font-serif">
                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">

                            <div class="team-item">
                                <div class="team-image">
                                    <img src="./Rival - Multipurpose Template_files/team-1.jpg" alt="">
                                    <div class="team-detail">
                                        <h5 class="font-alt">Hi all</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam.</p>
                                        <div class="team-social">
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-facebook"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-twitter"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-dribbble"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Jim Stone</div>
                                    <div class="team-role">Art Director</div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">

                            <div class="team-item">
                                <div class="team-image">
                                    <img src="./Rival - Multipurpose Template_files/team-2.jpg" alt="">
                                    <div class="team-detail">
                                        <h5 class="font-alt">Good day</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam.</p>
                                        <div class="team-social">
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-facebook"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-twitter"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-dribbble"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Andy River</div>
                                    <div class="team-role">Creative director</div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">

                            <div class="team-item">
                                <div class="team-image">
                                    <img src="./Rival - Multipurpose Template_files/team-3.jpg" alt="">
                                    <div class="team-detail">
                                        <h5 class="font-alt">Hello</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam.</p>
                                        <div class="team-social">
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-facebook"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-twitter"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-dribbble"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Adele Snow</div>
                                    <div class="team-role">Account manager</div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">

                            <div class="team-item">
                                <div class="team-image">
                                    <img src="./Rival - Multipurpose Template_files/team-4.jpg" alt="">
                                    <div class="team-detail">
                                        <h5 class="font-alt">Yes, it's me</h5>
                                        <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam.</p>
                                        <div class="team-social">
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-facebook"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-twitter"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-dribbble"></i></a>
                                            <a href="./Rival - Multipurpose Template_files/Rival - Multipurpose Template.html"><i class="fa fa-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-descr font-alt">
                                    <div class="team-name">Dylan Woods</div>
                                    <div class="team-role">Developer</div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                    </div><!-- .row -->

                </div>
            </section>
        </div>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
