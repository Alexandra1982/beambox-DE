<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/google-map.css">
        <link rel="stylesheet" href="css/mailform.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
        <html class="lt-ie9">
          <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        </html>
        <script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/device.min.js"></script>
    </head>
    <body>
        <div class="page">

            <!-- HEADER -->
            <?php
            include './__header.inc.php';
            ?>
            <!-- END HEADER -->

            <!--
            javascript:void(0)javascript:void(0)
          ========================================================
                                      CONTENT
          ========================================================
            -->
            <main>
                <section class="map">
                    <div id="google-map" class="map_model"></div>
                    <ul class="map_locations">
                        <li data-y="51.471934" data-x="7.127112">
                            <p>Feldstrasse 4, 44867 Bochum <span>02327 9654471</span></p>
                        </li>
                    </ul>
                </section>
                <section class="well3 bg-secondary">
                    <div class="container">
                        <ul class="row contact-list">
                            <li class="grid_4">
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-map-marker"></div>
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <address>Feldstrasse 4<br/>44867 Bochum | Germany</address>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-envelope"></div>
                                    </div>
                                    <div class="box_cnt__no-flow"><a href="mailto:#">info@beambox-3d.com</a></div>
                                </div>
                            </li>
                            <li class="grid_4">
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-phone"></div>
                                    </div>
                                    <div class="box_cnt__no-flow"><a href="callto:#">02327-965-44-71</a></div>
                                </div>
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-fax"></div>
                                    </div>
                                    <div class="box_cnt__no-flow"><a href="callto:#">02327-965-44-75</a></div>
                                </div>
                            </li>
                            <li class="grid_4">
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-facebook"></div>
                                    </div>
                                    <div class="box_cnt__no-flow"><a href="https://www.Facebook.com/xlmedia.tv">Follow on facebook</a></div>
                                </div>
                                <div class="box">
                                    <div class="box_aside">
                                        <div class="icon2 fa-twitter"></div>
                                    </div>
                                    <div class="box_cnt__no-flow"><a href="https://www.Twitter.com/xlmedia.tv">Follow on Twitter</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="well1">
                    <div class="container">
                        <h2>Mitteilung an uns</h2>
                        <form method="post" action="bat/rd-mailform.php" class="mailform off2">
                            <input type="hidden" name="form-type" value="contact">
                            <fieldset class="row">
                                <label class="grid_4"> 
                                    <input type="text" name="name" placeholder="Name:" data-constraints="@LettersOnly @NotEmpty">
                                </label>
                                <label class="grid_4">
                                    <input type="text" name="phone" placeholder="Telefon:" data-constraints="@Phone">
                                </label>
                                <label class="grid_4">
                                    <input type="text" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty">
                                </label>
                                <label class="grid_12">
                                    <textarea name="message" placeholder="Mitteilung:" data-constraints="@NotEmpty"></textarea>
                                </label>
                                <div class="mfControls grid_12">
                                    <button type="submit" class="btn">Mitteilung absenden</button>
                                </div>
                            </fieldset>
                        </form>
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