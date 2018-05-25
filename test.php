<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FAQS</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">


        <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
        <style>
            body {
                margin: 0;
                padding: 0;
            }
            a {
                color: #09f;
            }
            a:hover {
                text-decoration: none;
            }
            #back_to_camera {
                clear: both;
                display: block;
                height: 80px;
                line-height: 40px;
                padding: 20px;
            }
            .fluid_container {
                margin: 0 auto;
                max-width: 1000px;
                width: 90%;
            }
        </style>


        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
        <html class="lt-ie9">
          <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        </html>
        <script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/device.min.js"></script>

        <script type='text/javascript' src='js/jquery.min.js'></script>
        <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/camera.js'></script>



        <script>
            jQuery(function () {

                jQuery('#camera_wrap_1').camera({
                    thumbnails: true
                });

            });
        </script>
    </head>
    <body>
        <div class="page">

            <!-- HEADER -->
            <?php
            include './__header.inc.php';
            ?>
            <!-- END HEADER -->



            <!--
          ========================================================
                                      CONTENT
          ========================================================
            -->
            <main>



                <div class="fluid_container">
                    <p>Pagination circles with the height relative to the width</p>
                    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                        <div data-src="images/BeamboxHeader.jpg">
                            <div class="camera_caption fadeFromBottom">
                                Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                            </div>
                        </div>
                        <div data-thumb="../images/slides/thumbs/leaf.jpg" data-src="../images/slides/leaf.jpg">
                            <div class="camera_caption fadeFromBottom">
                                It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                            </div>
                        </div>
                        <div data-thumb="../images/slides/thumbs/road.jpg" data-src="../images/slides/road.jpg">
                            <div class="camera_caption fadeFromBottom">
                                <em>It's completely free</em> (even if a donation is appreciated)
                            </div>
                        </div>
                        <div data-thumb="../images/slides/thumbs/sea.jpg" data-src="../images/slides/sea.jpg">
                            <div class="camera_caption fadeFromBottom">
                                Camera slideshow provides many options <em>to customize your project</em> as more as possible
                            </div>
                        </div>
                        <div data-thumb="../images/slides/thumbs/shelter.jpg" data-src="../images/slides/shelter.jpg">
                            <div class="camera_caption fadeFromBottom">
                                It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                            </div>
                        </div>
                        <div data-thumb="../images/slides/thumbs/tree.jpg" data-src="../images/slides/tree.jpg">
                            <div class="camera_caption fadeFromBottom">
                                Different color skins and layouts available, <em>fullscreen ready too</em>
                            </div>
                        </div>
                    </div><!-- #camera_wrap_1 -->

                </div><!-- .fluid_container -->





                <section class="well1">
                    <div class="container">
                        <h2>FAQs / Häufig gestellte Fragen</h2>
                        <p></p>

                        <hr>

                        <p>
                            Unsere FAQs befinden sich derzeit noch im Aufbau.<br>
                            Wenden Sie sich mit Ihrer Frage bitte an:<br>
                            info@beambox-3d.com
                        </p>
                        <p>
                            Vielen Dank für Ihr Interesse!
                        </p>

                    </div>
                </section>


            </main>

            <!-- FOOTER -->
            <?php
            include './__footer.inc.php';
            ?>
            <!-- END FOOTER -->

        </div>
        <script src="js/script.js"></script>
    </body>
</html>