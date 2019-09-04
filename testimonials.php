<?php

include "dbCon.php";

session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />



    <title>Karoi Town Council | Housing Stands Allocation</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />


    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css' href='sliders/flexslider/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flex-slider-css' href='sliders/flexslider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-elegant-css' href='sliders/flexslider-elegant/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flex-slider-elegant-css' href='sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ahortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-css'  href='css/contact_form.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />

    <style type="text/css">
            body { background-color: #ffffff; background-image: url('images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
    </style>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>


</head>
<!-- END HEAD -->
<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
    <div id="wrapper" class="container group">

        <!-- START TOP BAR -->
        <div id="topbar">
            <div class="container">
                <div class="row">
                    <div id="nav" class="span12 light">

                        <!-- START MAIN NAVIGATION -->

                        <ul id="menu-menu" class="level-1">
                            <li>
                                <a href="index.html">HOME</a>
                                
                            </li>
                            
                            <li>
                                <a href="testimonials.html">Testimonials</a>
                            </li>
                                    
                            <li>
                                                   
                                <a href="circle-style.html">About Us</a>
                                       
                            </li>
                            
                            <li>
                                <a href="get-in-touch.html">Contact Details</a></li>
                                    
                            </li>
                        </ul>
                        <!-- END MAIN NAVIGATION -->

                     <!-- START TOPBAR LOGIN -->

                        <div id="topbar_login" class="not_logged_in">
                            <?php
                                if($_SESSION['logged']==0){
                                ?>
                            <a class="topbar_login" href="#">
                                LOGIN <span class="sf-sub-indicator"></span>
                            </a>
                            <?php } else {
                                ?>
                                <a href="#"> Hello <?php echo $_SESSION['name']; ?></a>
                                <a href="index.php">Logout</a>
                                <?php
                            }?>
                            <div id="fast-login" class="access-info-box">
                                
                                <form action="login.php" method="post" name="loginform">

                                    <div class="form">
                                        <p>
                                            <label>
                                                Username<br/>
                                                <input type="text" tabindex="10" size="20" value="" name="login_name" class="input-text" />
                                            </label>
                                        </p>

                                        <p>
                                            <label>
                                                Password<br/>
                                                <input type="password" tabindex="20" size="20" value="" name="login_pwd" class="input-text" />
                                            </label>
                                        </p>

                                        <a class="align-left lostpassword" href="#" title="Password Lost and Found">
                                            lost password?
                                        </a>

                                        <p class="align-right">
                                            <input type="submit" tabindex="100" value="Login" name="submit_login" class="input-submit" />
                                          <!--  <input type="hidden" value="index.html" name="redirect_to" />
                                            <input type="hidden" value="1" name="testcookie" />
                                        -->
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- END TOPBAR LOGIN -->
                    </div>
                </div>
            </div>
        </div>
         <!-- END TOP BAR -->

    <!-- START HEADER -->
    <div id="header" class="group margin-bottom">

        <div class="group container">
            <div class="row" id="logo-headersidebar-container">
                <!-- START LOGO -->
                <div id="logo" class="span6 group">
                    <a id="logo-img" href="index.html" title="KTC">
                        <img src="images/ktc-logo1.png" title="KTC" alt="KTC" />
                    </a>
                    <p id='tagline'>Karoi Town Council | Housing Stands Allocation</p>
                </div>
                <!-- END LOGO -->

                <!-- START HEADER SIDEBAR -->
                <div id="header-sidebar" class="span6 group">
                    <div class="widget-first widget header-text-image">
                        <div class="text-image" style="text-align:left">
                            <img src="images/phone1.png" alt="CUSTOMER SUPPORT" />
                        </div>

                        <div class="text-content">
                            <h3>CUSTOMER SUPPORT</h3>
                            <p>+263-264457-05/6</p>
                        </div>
                    </div>

                    <div class="widget-last widget widget_text">
                        <div class="textwidget">
                            <div class="socials-default-small facebook-small default">
                                <a href="# " class="socials-default-small default facebook" >facebook</a>
                            </div>

                            <div class="socials-default-small skype-small default">
                                <a href="# " class="socials-default-small default skype" >skype</a>
                            </div>

                            <div class="socials-default-small linkedin-small default">
                                <a href="#" class="socials-default-small default linkedin" >linkedin</a>
                            </div>

                            <div class="socials-default-small twitter-small default">
                                <a href="#" class="socials-default-small default twitter" >twitter</a>
                            </div>

                            <div class="socials-default-small rss-small default">
                                <a href="#" class="socials-default-small default rss" >rss</a>
                            </div>

                            <div class="socials-default-small pinterest-small default">
                                <a href="#" class="socials-default-small default pinterest" >pinterest</a>

                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="top-border span12"></div>
    </div>

        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-no">
            <div class="container group">
                <div class="row">
                <!-- START CONTENT -->
                    <div id="content-page" class="span12 content group">
                        <div class="page type-page status-publish  group">
                            <h2>
                                Comments <span class="title-highlight">Circle</span>
                            </h2>
                            <!-- LIBRA STYLE -->

                            <div class="row">
                                <div class="span3">
                                    <div class="testimonial-circle-style">
                                        <div class="testimonial-text">
                                            <p>
                                                Quisque turpis purus, semper luctus molestie elementum, egestas et nibh. Nulla in sapien
                                                elit, et eleifend risus.
                                                Quisque at elit id libero vulputate facilisis. Suspendisse potenti. Vestibulum malesuada
                                                molestie rutrum. Aenean eget
                                                nulla lectus, quis varius tellus. Donec interdum ullamcorper odiosemper.
                                            </p>
                                        </div>
                                        <div class="testimonial-name ">
                                            <a href="testimonial-detail.html" class="name">Lee Hon</a>
                                            <a class="website" href="http://www.netsons.com">www.netsons.com</a>
                                        </div>
                                        <div class="testimonial-quote"></div>
                                        <div class="thumbnail">
                                            <img width="100" height="100" src="images/pages/nando1-100x100.png" class="attachment-thumb-testimonial-circle wp-post-image" alt="nando"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="testimonial-circle-style">
                                        <div class="testimonial-text">
                                            <p>
                                                Quisque turpis purus, semper luctus molestie elementum, egestas et nibh. Nulla in sapien
                                                elit, et eleifend risus. Quisque at elit id libero vulputate facilisis. Suspendisse
                                                potenti. Vestibulum malesuada molestie rutrum. Aenean eget nulla lectus, quis varius
                                                tellus. Donec interdum ullamcorper odiosemper.
                                            </p>
                                        </div>
                                        <div class="testimonial-name ">
                                            <a href="testimonial-detail.html" class="name">Sara Presenti</a>
                                            <a class="website" href="http://www.netsons.com">www.netsons.com</a>
                                        </div>
                                        <div class="testimonial-quote"></div>
                                        <div class="thumbnail">
                                            <img width="100" height="100" src="images/pages/sara1-100x100.png" class="attachment-thumb-testimonial-circle wp-post-image" alt="sara"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="testimonial-circle-style">
                                        <div class="testimonial-text">
                                            <p>
                                                Quisque turpis purus, semper luctus molestie elementum, egestas et nibh. Nulla in sapien
                                                elit, et eleifend risus. Quisque at elit id libero vulputate facilisis. Suspendisse
                                                potenti. Vestibulum malesuada molestie rutrum. Aenean eget nulla lectus, quis varius
                                                tellus. Donec interdum ullamcorper odiosemper.
                                            </p>
                                        </div>
                                        <div class="testimonial-name ">
                                            <a href="testimonial-detail.html" class="name">Nicola Mustone</a>
                                            <a class="website" href="http://www.netsons.com">www.netsons.com</a></div>
                                        <div class="testimonial-quote"></div>
                                        <div class="thumbnail">
                                            <img width="100" height="100" src="images/pages/nicola1-100x100.png" class="attachment-thumb-testimonial-circle wp-post-image" alt="nicola"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="testimonial-circle-style">
                                        <div class="testimonial-text">
                                            <p>
                                                Quisque turpis purus, semper luctus molestie elementum, egestas et nibh. Nulla in sapien
                                                elit, et eleifend risus. Quisque at elit id libero vulputate facilisis. Suspendisse
                                                potenti. Vestibulum malesuada molestie rutrum. Aenean eget nulla lectus, quis varius
                                                tellus. Donec interdum ullamcorper odiosemper.
                                            </p>
                                        </div>
                                        <div class="testimonial-name ">
                                            <a href="testimonial-detail.html" class="name">Antonino Scarfi</a>
                                            <a class="website" href="http://www.netsons.com">www.netsons.com</a>
                                        </div>
                                        <div class="testimonial-quote"></div>
                                        <div class="thumbnail">
                                            <img width="100" height="100" src="images/pages/anto1-100x100.png" class="attachment-thumb-testimonial-circle wp-post-image" alt="anto"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <h2>
                                Testimonials <span class="title-highlight">Slider</span>
                            </h2>

                            <div class="testimonials-flexslider">
                                <ul class="slides">


                                    <li>
                                        <blockquote>
                                            <p>
                                                <a href="">
                                                    &rdquo;Quisque turpis purus, semper luctus molestie elementum, egestas et nibh.
                                                    Nulla in sapien elit, et eleifend risus. Quisque at elit id libero vulputate
                                                    facilisis. Suspendisse potenti. Vestibulum malesuada molestie rutrum. Aenean eget
                                                    [...]&rdquo;
                                                </a>
                                            </p>
                                        </blockquote>
                                        <p class="meta">
                                            <strong>
                                                <a href="testimonial-detail.html" class="name">Nando Pappalardo</a>
                                            </strong> -
                                            <a href="http://www.netsons.com">www.netsons.com</a>
                                        </p>
                                    </li>


                                    <li>
                                        <blockquote>
                                            <p>
                                                <a href="">
                                                    &rdquo;Quisque turpis purus, semper luctus molestie elementum, egestas et nibh.
                                                    Nulla in sapien elit, et eleifend risus. Quisque at elit id libero vulputate
                                                    facilisis. Suspendisse potenti. Vestibulum malesuada molestie rutrum. Aenean eget
                                                    [...]&rdquo;
                                                </a>
                                            </p>
                                        </blockquote>
                                        <p class="meta">
                                            <strong>
                                                <a href="testimonial-detail.html" class="name">Sara Presenti</a>
                                            </strong> -
                                            <a href="http://www.netsons.com">www.netsons.com</a>
                                        </p>
                                    </li>


                                    <li>
                                        <blockquote>
                                            <p>
                                                <a href="">
                                                    &rdquo;Quisque turpis purus, semper luctus molestie elementum, egestas et nibh.
                                                    Nulla in sapien elit, et eleifend risus. Quisque at elit id libero vulputate
                                                    facilisis. Suspendisse potenti. Vestibulum malesuada molestie rutrum. Aenean eget
                                                    [...]&rdquo;
                                                </a>
                                            </p>
                                        </blockquote>
                                        <p class="meta">
                                            <strong>
                                                <a href="testimonial-detail.html" class="name">Nicola Mustone</a>
                                            </strong> -
                                            <a href="http://www.netsons.com">
                                                www.netsons.com
                                            </a>
                                        </p>
                                    </li>


                                    <li>
                                        <blockquote>
                                            <p>
                                                <a href="">
                                                    &rdquo;Quisque turpis purus, semper luctus molestie elementum, egestas et nibh.
                                                    Nulla in sapien elit, et eleifend risus. Quisque at elit id libero vulputate
                                                    facilisis. Suspendisse potenti. Vestibulum malesuada molestie rutrum. Aenean eget
                                                    [...]&rdquo;
                                                </a>
                                            </p>
                                        </blockquote>
                                        <p class="meta">
                                            <strong>
                                                <a href="testimonial-detail.html" class="name">Antonino Scarfi</a>
                                            </strong> -
                                            <a href="http://www.netsons.com">
                                                www.netsons.com
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                                <div class="prev"></div>
                                <div class="next"></div>
                            </div>
                            <script type="text/javascript">
                                jQuery(function ($) {
                                    var animation = $.browser.msie || $.browser.opera ? 'fade' : 'slide';
                                    $('.testimonials-flexslider').flexslider({
                                        animation: animation,
                                        slideshowSpeed: 5000,
                                        animationSpeed: 500,
                                        touch: false,
                                        controlNav: false,
                                        directionNav: true
                                    });
                                });
                            </script>


                            </div>
                    <!-- START COMMENTS -->
                    <div id="comments"></div>
                    <!-- END COMMENTS -->
                    </div>
                <!-- END CONTENT -->


                <!-- START EXTRA CONTENT -->
                <!-- END EXTRA CONTENT -->
                </div>
            </div>
        </div>
        <!-- END PRIMARY -->


        <!-- START FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-widgets-area with-sidebar-right">
                    <div class="widget-first widget span2 widget_text"><h3>About us</h3>
                        <div class="textwidget">
                            Karoi Town Council is a company that speacilises in many trades that deals with the well-being of the residents surrounding the town and those who like to join in expanding the city
                        </div>
                    </div>

                    <div class="widget span2 widget_nav_menu">
                        <h3>A menu widget</h3>

                        <div class="menu-widget-footer-container">
                            <ul id="menu-widget-footer" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="get-in-touch.html">About</a>
                                </li>

                                <li class="menu-item menu-item-type-post_type">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Policy</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="services-module.html">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-last widget span2 widget_nav_menu">
                        <h3>Socialize</h3>

                        <div class="menu-socialize-container">
                            <ul id="menu-socialize" class="menu">

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Facebook</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Twitter</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">LinkedIn</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Google+</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Pinterest</a>
                                </li>

                                <li class="menu-item menu-item-type-custom">
                                    <a href="#">Flickr</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-widgets-sidebar with-sidebar-right">
                    <div  class="widget-first widget span6 yit_quick_contact">
                        <h3>Get in touch</h3>

                        <form class="contact-form row" method="post" action="" enctype="multipart/form-data">

                            <div class="usermessagea"></div>
                            <fieldset>
                                <ul>
                                    <li class="text-field with-icon span3">
                                       
                                       <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/author-footer.png" alt="" title=""/></span>
                                            <input type="text" name="yit_contact[name]" class="with-icon required" value="" placeholder="Name" required/>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="text-field with-icon span3">
                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/envelope-footer.png" alt="" title=""/>
                                            </span>
                                            <input type="text" name="yit_contact[email]" class="with-icon required email-validate" value="" placeholder="Email" REQUIRED/>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="textarea-field with-icon span6">
                                        
                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <img src="images/footer/pencil-footer.png" alt="" title=""/>
                                            </span>
                                            <textarea name="yit_contact[message]" rows="8" cols="30" class="with-icon required" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="msg-error"></div>
                                        <div class="clear"></div>
                                    </li>

                                    <li class="submit-button span6">
                                        <div style="position:absolute;left:-9999px;">
                                            <input type="text" name="email_check_2" id="email_check_2" value=""/>
                                        </div>
                                        <input type="hidden" name="yit_action" value="sendemail" id="yit_action"/>
                                        <input type="hidden" name="yit_referer" value="index.html"/>
                                        <input type="hidden" name="id_form" value="228"/>
                                        <input type="submit" name="yit_sendemail" value="SEND" class="sendmail alignright"/>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>

                        <script type="text/javascript">
                            var messages_form_228 = {
                                name: "Insert the name",
                                email: "Insert a valid email",
                                message: "Insert a message"
                            };
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="left span6">
                    <p>
                        <a href="http://yithemes.com/"><img src="http://yithemes.com/cdn/images/various/footer_yith_grey.png" alt="Your Inspiration Themes" style="position:relative; top:9px; margin: -22px 5px 0 0;"></a>&nbsp;Copyright 2017 - <strong>Libra theme</strong> Edited by
                       Lee Hon
                    </p>
                </div>
                <div class="right span6">
                    <p>
                        @ Lee Hon
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <div class="wrapper-border"></div>

    </div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->

    <script type='text/javascript' src='js/comment-reply.min.js'></script>
    <script type='text/javascript' src='js/underscore.min.js'></script>
    <script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.js'></script>
    <script type='text/javascript' src='js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='js/media-upload.min.js'></script>
    <script type='text/javascript' src='js/jquery.clickout.min.js'></script>
    <script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='sliders/usquare/js/frontend/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='sliders/usquare/js/frontend/jquery.usquare.js'></script>
    <script type='text/javascript' src='js/responsive.js'></script>
    <script type='text/javascript' src='js/mobilemenu.js'></script>
    <script type='text/javascript' src='js/jquery.superfish.js'></script>
    <script type='text/javascript' src='js/jquery.placeholder.js'></script>
    <script type='text/javascript' src='js/contact.js'></script>
    <script type='text/javascript' src='js/jquery.tipsy.js'></script>
    <script type='text/javascript' src='js/jquery.cycle.min.js'></script>
    <script type='text/javascript' src='js/shortcodes.js'></script>
    <script type='text/javascript' src='js/jquery.custom.js'></script>

    </body>
    <!-- END BODY -->
    </html>