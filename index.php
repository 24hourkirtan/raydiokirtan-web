<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>Raydio Kirtan</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">

        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>        
        <script src="flash-radio/js/nativeflashradiov4.js"></script>
    </head>
    <body>

        <!-- Primary Page Layout
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="container">
            <div class="row">
                <div class="content">
                    <span class="intro-heading">Contemporary Vaishnava Music</span>
                    <img src="images/raydiokirtan-logo.png" width="604" height="512" class="logo-below"/>

                    <div class="main-content clearfix">
                        <div class="main-content-left">
                            <div class="menu-line-toggle lines">
                                <span class="menu-line line line-1"></span>
                                <span class="menu-line line line-2"></span>
                                <span class="menu-line line line-3"></span>
                            </div>
                            <div class="lines">
                                <span class="line line-4"></span>
                                <span class="line line-5"></span>
                                <span class="line line-6"></span>
                            </div>
                        </div>
                        <div class="main-content-right">

                            <div class="main-content-right-intro box">
                                <div class="divider divider-purple">&nbsp;</div>
                                <h1 class="brand"><img src="images/raydiokirtan-logo-above.png" width="227" height="129" class="logo-above" alt="Raydio K"/></h1>
                                <h2 class="subheading">Live Broadcasting</h2>
                                <div class="divider divider-red">&nbsp;</div>
                            </div>
                            <div class="main-content-right-stream box">
                                <!--
                                <audio id="audio1" data-able-player preload="auto">
                                    <source type="audio/mpeg" src="http://server.24hourkirtan.fm:8000/raydio128k.mp3"/>
                                </audio>
                                -->
                                <div id="nativeflashradio" style="width:100%; height:60px;"></div>
                                <script>
                                $("#nativeflashradio").flashradio({
                                    streamurl: "http://server.24hourkirtan.fm:8000", 
                                    streampath: "/",
                                    streamid: "1",
                                    streamtype: "icecast2",
                                    mountpoint: "/raydio128k.mp3",
                                    titlefontname: "Open Sans Condensed",
                                    titlegooglefontname: "Open+Sans+Condensed:300",
                                    songfontname: "Oswald",
                                    songgooglefontname: "Oswald:400",
                                    themecolor: "#6c5b7b", 
                                    themefontcolor:"#ffffff", 
                                    songinformationinterval:"10000", 
                                    radioname: "Raydio Kirtan", 
                                    scroll: "auto", 
                                    autoplay: "false", 
                                    startvolume: "100",
                                    useanalyzer: "real",
                                    analyzertype: "3"
                                });
                                </script>
                                <div class="divider divider-lightpurple">&nbsp;</div>
                            </div>
                            <div class="social-now-playing box">
                                <div class="box-inner">
                                    <div class="social">
                                        <a href="mailto:info@raydiokirtan.fm" class="icon icon-email" target="_blank"><span></span></a>
                                        <a href="https://www.instagram.com/raydiokirtan/" class="icon icon-instagram" target="_blank"><span></span></a> 
                                        <a href="https://www.facebook.com/RaydioKirtan/" class="icon icon-facebook" target="_blank"><span></span></a>
                                    </div>
                                </div>
                                <div class="now-playing">
                                    <h2 class="subheading">Now playing on<br />
                                        <span>24 Hour Kirtan Radio:</span><br />
                                        Madhava Naidoo</h2>
                                </div>
                                <div class="divider divider-lightpurple">&nbsp;</div>

                            </div>
                            <div class="copyright box">
                                Copyright (c) 2018 Raydio Kirtan
                            </div>
                        </div>
                    </div>
                    <div class="modal">
                        <?php
                        include_once('./includes/modal-page-menu.php');
                        include_once('./includes/modal-page-about.php');
                        include_once('./includes/modal-page-credits.php');
                        include_once('./includes/modal-page-donate.php');
                        include_once('./includes/modal-page-imprint.php');
                        include_once('./includes/modal-page-app.php');
                        include_once('./includes/modal-page-contact.php');
                        ?>   
                        <div class="modal-close">X</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End Document
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    </body>
    <script src="includes/form/form.js"></script>
</html>
