<?php require 'initDB.php'; ?>
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
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    <body>

        <!-- Preloader -->
        <div class="load-background">
            <div class="loader">                
            </div>
            <p>Loading...</p>
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
                    <a class="navbar-brand" href="index.php">RPS</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home" class="section-scroll">Home</a></li>
                        <li><a href="#details" class="section-scroll">Details</a></li>
                        <li><a href="#register" class="section-scroll">Register</a></li>
                        <li><a href="#rules" class="section-scroll">Rules</a></li>
                        <!--<li><a href="#about" class="section-scroll">About</a></li>-->                      
                        <li><a href="#contact" class="section-scroll">Contact</a></li>

                    </ul>
                </div>

            </div>

        </nav>
        <!-- Navigation end -->

        <!-- Home start -->
        <section id="home" class="home-section home-parallax home-fade home-full-height bg-dark-30 bg-gradient"  >
          
            <div class="wow fadeInDownBig logo" data-wow-delay="1.5s" >
                <img src="img/RPS_logo.png" alt="logo">
            </div>
                 
            <div class="hs-caption">
                <div class="caption-content">
                    <div class="wow fadeIn hs-title-size-1 font-alt mb-30 text-color-white" data-wow-delay=".5s" data-wow-duration="2s">
                        Rotaract Pool Smashes
                    </div>
                    <div class="wow fadeIn hs-title-size-4 font-alt mb-40 text-color-white"  data-wow-delay="1s" data-wow-duration="2s">
                        26th of April at Queens Cafe
                    </div>

                    <a href="#register" class="wow fadeInUp btn btn-border-w btn-round section-scroll"  data-wow-delay="1.5s" data-wow-duration="1s">Register Now</a>;

                </div>
            </div>

        </section>
        <!-- Home end -->

        <div class="main">

            <!-- Details start -->
            <section id="details" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">

                            <h2 class="wow fadeInRight module-title font-alt" data-wow-delay=".2s">Welcome to RPS</h2>
                            <div class="module-subtitle font-serif large-text" >
                                <!--new changes-->
                                <div class="wow fadeInLeft row paragraph" data-wow-delay=".2s">
                                    <p> “Rotaract Pool Smashes”, RPS in short, for the first time in Rotaract Mora history, brings the

                                        membership of Rotaract and Rotary Clubs together to compete, to interact and to have fun. </p>
                                </div>

                                <div class="wow fadeInLeft row paragraph" data-wow-delay=".2s">
                                    <p> With the need for relaxation and entertainment of the membership of most educational 

                                        institution based Rotaract clubs including Rotaract Mora, RPS is initiated as a noval concept 

                                        to Rotaract Mora calendar. </p>
                                </div>

                                <div class="wow fadeInLeft row paragraph" data-wow-delay=".2s">
                                    <p> RPS will bring the rotarians and rotaractors to one door step which will lead them to an 

                                        enthusiastic competition alongside with the opportunity to strengthen their friendship 

                                        among club members. RPS will help the participants to get away from their busy schedules 

                                        and stressful work and will ensure a quality time well spent. </p>
                                </div>

                                <div class="wow fadeInLeft row paragraph" data-wow-delay=".2s">
                                    <p> In the belief that “Rotaract Pool Smashes” will firmly establish itself as a much-awaited 

                                        event among all Rotaractors, the first chapter of RPS will be revealed on 26th of April at 

                                        Queens café Kollupitiya from 10 am to 6 pm.</p>
                                </div>

                                <!--new changes-->
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-2 col-sm-offset-5">

                            <div class="wow flip large-text align-center" data-wow-iteration="10">
                                <a href="#register" class="section-scroll"><i class="fa fa-angle-down"></i></a>
                            </div>

                        </div>

                    </div>

                </div><!-- .container -->
            </section>
            <!-- Details end -->

            <!-- Divider -->
            <hr class="divider-w">
            <!-- Divider -->

            <!-- Register start -->
            <section id="register" class="module-register">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2">

                            <h2 class="wow fadeInUpBig module-title font-alt">Register Now</h2>
                            <!--                            <div class="module-subtitle font-serif large-text">
                                                            <p>:P</p>
                            
                            
                                                        </div>-->

                        </div>

                    </div><!-- .row -->




                    <div class="row">

                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="reg-finish-messege">
                                <?php
                                if (isset($userExist) && $userExist === TRUE) {
                                    echo '<span class="label label-warning"> You are alrady registerd</span>';
                                }
                                ?>
                            </div>

                            <div class="wow fadeInUpBig well" data-wow-delay=".4s">
                                <form class="form-horizontal" name="registerForm" onsubmit="return validateRegisterForm();" method="POST" action="#register">
                                    <fieldset>
                                        <legend>Register</legend>

                                        <div id="fgEmail" class="form-group">
                                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="email" placeholder="Email" >
                                            </div>
                                        </div>

                                        <div id="fgName" class="form-group">
                                            <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="name" placeholder="Name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Gender</label>
                                            <div class="col-lg-10">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="male" checked="">
                                                        Male
                                                    </label>
                                                    <label></label>
                                                    <label>
                                                        <input type="radio" name="gender" value="female">
                                                        Female
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div id="fgCategory" class="form-group">
                                            <label for="inputCategory" class="col-lg-2 control-label">Category</label>
                                            <div class="col-lg-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input id="singleselect" type="checkbox" name="single" value="single" checked=""> 
                                                        Single
                                                    </label>
                                                    <label></label>
                                                    <label>
                                                        <input id="doubleselect" type="checkbox" name="double" value="double"> 
                                                        Double
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="double-section">
                                            <div id="fgTeamName" class="form-group">
                                                <label for="inputTeamName" class="col-lg-2 control-label">Team</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="teamName" placeholder="Team Name">
                                                </div>
                                            </div>


                                            <div id="fgDetailPartner" class="form-group">
                                                <label class="col-lg-3 control-label">Partner Details</label>

                                            </div>

                                            <div id="fgEmailPartner" class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="email2" placeholder="Email Partner" >
                                                </div>
                                            </div>

                                            <div id="fgNamePartner" class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="name2" placeholder="Name Partner" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Gender</label>
                                                <div class="col-lg-10">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender2" value="male" checked="">
                                                            Male
                                                        </label>
                                                        <label></label>
                                                        <label>
                                                            <input type="radio" name="gender2" value="female">
                                                            Female
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div id="fgCategory" class="form-group">
                                                <label for="inputCategory" class="col-lg-2 control-label">Category</label>
                                                <div class="col-lg-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="single2" value="Yes"> 
                                                            Single
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>



                                            <!--                                            <div class="form-group">
                                                                                            <label for="select" class="col-lg-2 control-label">Category</label>
                                                                                            <div class="col-lg-10">
                                                                                                <select class="form-control" name="category">
                                                                                                    <option>Singles</option>
                                                                                                    <option>Double</option>                                                  
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>-->
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2">
                                                <!--<div class="g-recaptcha" data-sitekey="6Lfi-gQTAAAAADjTnx_QEHgbw8Uqm8Jwg90pKosB"></div>-->
                                                <div id="recaptcha"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2">
                                                <button type="submit" class="btn btn-default">Register</button>
                                                <label id="validateError">

                                                </label>
                                                <?php
                                                if (isset($registerSuccess)) {
                                                    ?>
                                                    <label></label>
                                                    <label></label>
                                                    <label>
                                                        <span class="label label-success">Successfully Registered.</span>
                                                    </label>
                                                    <?php
                                                } else if (isset($captchaError)) {
                                                    ?>
                                                    <label></label>
                                                    <label></label>
                                                    <label>
                                                        <span class="label label-warning">Please validate the captcha.</span>
                                                    </label>
                                                    <?php
                                                }
                                                ?>
                                            </div>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>



                        </div>

                    </div>

                </div><!-- .container -->
            </section>
            <!-- Register end -->

            <!-- Divider -->
            <hr class="divider-w">
            <!-- Divider -->

            <!-- Rules start -->
            <section id="rules" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <h2 class="wow bounceInDown module-title font-alt">Rules</h2>
                            <div class="wow bounceInDown rules-module-subtitle">
                                General pool tournament rules and specific rules for this tournament.<br>
                                <a id="show-popup-description-general" href = "javascript:void(0)">view more</a>
                            </div>

                        </div>

                    </div><!-- .row -->


                    <div id="popup-description-general" class="popup-content well well-lg">

                        <a id="hide-popup-description-general" class="popup-close" href = "javascript:void(0)">X</a>

                        <h4 class="font-alt">General Rules</h4>

                        <p> 


                            &bull;First round will be given only half an hour of time for 2 opponents. 3 sets of
                            matches will be played. Best of 3 will be chosen.<br><br>

                            &bull;Final and semi-final matches will be given one hour of time for 2 opponents 
                            and will be played 5 sets of matches. Best of 5 will be chosen.<br><br>

                            &bull;Referee’s decision is the last decision.<br><br>

                            &bull;The opening break shot is determined by tossing a coin.<br><br>

                            &bull;Legal shots require that the cue ball be struck only with the cue tip. Failure 
                            to meet this requirement is a foul.<br><br>

                            &bull;The opening break shot is taken with cue ball in hand behind the head 
                            string.<br><br>

                            &bull;If the cue ball is potted on the break shot, the offending player should place 
                            the cue ball anywhere behind the head string and play.<br><br>

                            &bull;It is a foul if a player shoots when at least one foot is not in contact with the 
                            floor.<br><br>

                            &bull;It is a foul to strike, touch or in any way make contact with the cue ball in 
                            play or any object balls in play.<br><br>

                            &bull;Touching any object ball with the cue ball while it is in hand is a foul.<br><br>

                            &bull;It is a foul to pocket an opponent’s ball.
                        </p>

                    </div>

                    <div id="popup-description-male" class="popup-content well well-lg">

                        <a id="hide-popup-description-male" class="popup-close" href = "javascript:void(0)">X</a>

                        <h4 class="font-alt">Singles Men</h4>

                        <p> 



                            &bull;If no ball is pocketed on a shot, the cue ball must contact an object ball, and 
                            after that contact at least one ball (cue ball or any object ball) must be 
                            driven to a rail, or the shot is a foul.<br><br>

                            &bull;Any jump shot is considered a foul.<br><br>

                            &bull;In semi-final and final, for every shot, ball and the pocket must be called 
                            before shooting.<br><br>

                            &bull;And general rules.
                        </p>

                    </div>

                    <div id="popup-description-female" class="popup-content well well-lg">

                        <a id="hide-popup-description-female" class="popup-close" href = "javascript:void(0)">X</a>

                        <h4 class="font-alt">Singles Women</h4>

                        <p> 

                            &bull; If no ball is pocketed on a shot, the cue ball must contact an object ball, and 
                            after that contact at least one ball (cue ball or any object ball) must be 
                            driven to a rail, or the shot is a foul.<br><br>

                            &bull; Any jump shot is considered a foul.<br><br>

                            &bull; And general rules.
                        </p>

                    </div>

                    <div id="popup-description-double" class="popup-content well well-lg">

                        <a id="hide-popup-description-double" class="popup-close" href = "javascript:void(0)">X</a>

                        <h4 class="font-alt">Double</h4>

                        <p> 
                            &bull;If no ball is pocketed on a shot, the cue ball must contact an object ball, and 
                            after that contact at least one ball (cue ball or any object ball) must be 
                            driven to a rail, or the shot is a foul.<br><br>

                            &bull;In semi-final and final, for every shot, ball and the pocket must be called
                            before shooting.

                            &bull;If none of the balls is pocketed on a shot, the cue ball must contact an 
                            object ball, and after that contact at least one ball (cue ball or any object 
                            ball) must be driven to a rail, or the shot is a foul.

                            &bull;Any jump shot is considered a foul.

                            &bull;And general rules.
                        </p>

                    </div>

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
                        <div class="wow bounceInLeft col-sm-12 col-md-4 col-lg-4">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="fa fa-male"></span>
                                </div>
                                <h3 class="features-title font-alt">Singles Men</h3>
                                Only for male participants. <!--new changes-->
                                <a id="show-popup-description-male" href = "javascript:void(0)">view more</a>
                            </div>


                        </div>
                        <!-- Features end -->

                        <!-- Features start -->
                        <div class="wow bounceInUp col-sm-12 col-md-4 col-lg-4">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="fa fa-female"></span>
                                </div>
                                <h3 class="features-title font-alt">Singles Women</h3>
                                Only for female participants. <!--new changes-->
                                <a id="show-popup-description-female" href = "javascript:void(0)">view more</a>
                            </div>

                        </div>
                        <!-- Features end -->


                        <!-- Features start -->
                        <div class="wow bounceInRight col-sm-12 col-md-4 col-lg-4">

                            <div class="features-item">
                                <div class="features-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                                <h3 class="features-title font-alt">Double</h3>
                                Two male participants or two female participants or a mixed combination is accepted.
                                <a id="show-popup-description-double" href = "javascript:void(0)">view more</a>
                            </div>

                        </div>
                        <!-- Features end -->

                        <!-- Features start -->
                        <!--                        <div class="col-sm-6 col-md-3 col-lg-3">
                        
                                                    <div class="features-item">
                                                        <div class="features-icon">
                                                            <span class="icon-lifesaver"></span>
                                                        </div>
                                                        <h3 class="features-title font-alt">Other Details</h3>
                                                        REDBULL beverages will be provided throughout the tournament. Meals will not be provided.
                                                        
                                                    </div>
                        
                                                </div>-->
                        <!-- Features end -->

                    </div><!-- .row -->

                </div><!-- .container -->
            </section>
            <!-- Rules end --> 

            <hr class="divider-w">

            <!-- About start --> 
            <section id="contact" class="module">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <h2 class="module-title font-alt">Contact Us</h2>
                            <div class="module-subtitle main-email">
                                Email:<a href="mailto:poolsmashes15@rotaractmora.org" target="_top"> poolsmashes15@rotaractmora.org</a>                         
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-6 mb-sm- wow fadeInUp animated">

                            <div class="member-item">

                                <div class="member-descr">

                                    <h5 class="member-name">Udesh Sanjeewa</h5>                                   
                                    <div class="member-mail">
                                        Email:<a href="mailto:udeshhh@gmail.com" target="_top"> udeshhh@gmail.com</a>              
                                    </div>
                                    <div class="member-mobile">Mobile: 0717988998</div>
                                    <div class="member-social">
                                        <a href="https://www.facebook.com/udesh.sanjeewa.9" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>                                           
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <div class="col-sm-6 col-md-6 mb-sm- wow fadeInUp animated">

                            <div class="member-item">

                                <div class="member-descr">

                                    <h5 class="member-name">Wageesha Rasanjana</h5>                                   
                                    <div class="member-mail">
                                        Email:<a href="mailto:udeshhh@gmail.com" target="_top"> wageesha.rcc07@gmail.com</a>              
                                    </div>
                                    <div class="member-mobile">Mobile: 0711512572</div>
                                    <div class="member-social">
                                        <a href="https://www.facebook.com/wageesha.rasanjana" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>                                           
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <!--                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">
                        
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
                        
                                                </div>-->
                        <!-- Team item end -->

                        <!-- Team item star -->
                        <!--                        <div class="col-sm-6 col-md-3 mb-sm-20 wow fadeInUp animated" style="visibility: visible;">
                        
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
                        
                                                </div>-->
                        <!-- Team item end -->

                    </div><!-- .row -->

                </div>
            </section>
            <!-- About end -->
        </div>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="js/custom.js"></script>
    </body>
</html>
