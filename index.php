<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BeamBox GmbH  ::  3D Scanner  ::  3D Drucker  ::   Prototypenbau   ::  3D Druckdienstleister</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/grid.css">
        <?php
        if (filter_input(INPUT_GET, 'old') == 'on') {
            ?>
            <link rel="stylesheet" href="css/style_old.css">
            <?php
        } else {
            ?>
            <link rel="stylesheet" href="css/style.css">
            <?php
        }
        ?>


        <link rel="stylesheet" href="css/camera.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
        <html class="lt-ie9">
          <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        </html>
        <script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/device.min.js"></script>
    </head>
    <body>
        <script src="js/script.js"></script>
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

                <div id="tempheader">
                    <a href="http://www.beambox-3d.com/geschenkgutscheinaktion.html">
                        <img src="img/BeamboxHeader.jpg">
                    </a>
                </div>
                <div style="display: block; overflow: hidden; height: 50px;"></div>



<!--                <section class="camera_container">
                    <div id="camera" class="camera_wrap">
                        <div data-src="images/header_2.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/header_2.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6">Scan yourself</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/page-1_slide03.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6">Android & iOSX App`s</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/page-1_slide04.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6">3D Scanner</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/page-1_slide05.png">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6">3D Drucker</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-src="images/page-1_slide06.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="container">
                                    <div class="row">
                                        <div class="preffix_6 grid_6">Domains & Webspace</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <section>
                    <div class="container banner_wr">
                        <ul class="banner">
                            <li>
                                <div class="fa-globe"></div>
                                <h3>3D Druckservice<br/>
                                </h3>
                                <p>Wir drucken Ihre 3D-Designs. Für eine schnelle und effiziente Produktentwicklung, kann man auf Rapid Prototyping heutzutage nicht mehr verzichten. Wir ersparen ihnen Zeit und kosten. Seien Sie schneller als Ihre Mitbewerber und lassen Sie Ihre Entwürfe über Nacht Wirklichkeit werden...</p>
                                <!--<a href="#"></a>-->
                            </li>
                            <li>
                                <div class="fa-lightbulb-o"></div>
                                <h3>3D Scan Service</h3>
                                <p>Für Objekte die visualisiert werden sollen bieten wir ihnen einen schnellen und qualitativ hochwertigen Scan basierend auf der neusten Scan-Technologie an...</p>
                                <!--<a href="#"></a>-->
                            </li>
                            <li>
                                <div class="fa-cog"></div>
                                <h3>3D Datenaufbereitung und -umwandlung</h3>
                                <p>Haben Sie 3D- oder CAD-Daten und möchten diese drucken lassen? Wir bieten Ihnen an, diese zu überprüfen und bei Bedarf so aufzubereiten, dass diese auf dem 3D-Drucker realisiert können.
                                    Natürlich übernehmen wir auch gerne den Ausdruck für Sie...
                                </p>
                                <!--<a href="#"></a>-->
                            </li>
                            <li>
                                <div class="fa-briefcase"></div>
                                <h3>3D Datenkonvertierung</h3>
                                <p>Sie haben druckfähige Daten aber diese Daten haben nicht das richtige Format, um sie auf dem gewünschten 3D-Drucker drucken zu lassen? Senden Sie uns Ihre Daten und wir wandeln diese für Sie in das von Ihnen gewünschte 3D-Druckformat um.</p>
                                <!--<a href="#"></a>-->
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="well ins1">
                    <div class="container hr">
                        <ul class="row product-list">
                            <li class="grid_6">
                                <div style="height:190px;" class="box wow fadeInRight">
                                    <div class="box_aside">
                                        <div class="icon fa-comments"></div>
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <h3><a href="#">Produktentwicklung &amp; Umsetzung</a></h3>
                                        <p>
                                            Von der Idee bis zum realen Modell, wir unterstützen Sie kompetent mit unseren 3D-Druck-Dienstleistungen bei der Umsetzung Ihres Designprojektes!
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                                    <div class="box_aside">
                                        <div class="icon fa-calendar-o"></div>
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <h3><a href="#">Feinguss & Schmuckfertigung</a></h3>
                                        <p>Der Feinschliff für Ihre Designideen.</p>
                                        <p>Wir Produzieren Ihre Schmuckdesigns ! Von der Erstellung des Models, 3D Drucken von direkt aus brennbaren Wachsmodellen und den Feinguss bieten wir ihnen diesen Service in Bereich vom (technischen) Modellbau, über die Schmuck- und Dentalbranche bis hin zum Maschinenbau.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="grid_6">
                                <div style="height:190px;" data-wow-delay="0.3s" class="box wow fadeInRight">
                                    <div class="box_aside">
                                        <div class="icon fa-group"></div>
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <h3><a href="#">SIE IN 3D ? !</a></h3>
                                        <p>Die Revolution des Fotos geht in die dritte Dimension !</p>
                                        <p>Realistische 3D-Miniatur-Figuren von Ihnen ! Wir fertigen 3D Figuren mit modernster 3D-Drucktechnik in exzellenter Vollfarbe in unserem Hause. Unter my3Dclone.de finden Sie alle Infomationen. Lassen Sie sich verewigen !</p>
                                    </div>
                                </div>
                                <hr>
                                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                                    <div class="box_aside">
                                        <div class="icon fa-thumbs-up"></div>
                                    </div>
                                    <div class="box_cnt__no-flow">
                                        <h3><a href="#">Workshops</a></h3>
                                        <p>
                                            Wir bieten Ihnen Workshops u.a. zu den Themen 3D Drucker DIY selbst bauen, 3D Druck und 3D Scan an. Besuchen Sie unsere Seite MakersPlace.de um mehr über die Komplexe Welt des 3D Druckes zu erfahren und vielleicht bekommen Sie auch Lust mal ihren einen 3D Drucker zu bauen....
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="well1">
                    <div class="container">
                        <div class="row">
                            <div class="grid_4">
                                <h2>Über uns</h2>
                                <!--<img src="images/page-1_img01.jpg" alt="">-->
                                <p>
                                    Im Juni 2015 gegründet  mit derzeit mehr als 12 Mitarbeitern. Bieten Wir Firmen und Endkunden verschiedenste Dienstleitungen im Bereich 3D Technik an.
                                </p>
                                <p>
                                    Eine weitere Spezialisierung ist das Erstellen von Prototypen für Firmen und Ideen Gründer in den verschiedensten Bereichen sowie die Herstellung von Scan-Anlagen für den präzisen Einsatz in der Industrie und im Bereich des BodyScanns.
                                </p>
                                <p>
                                    Unsere Möglichkeiten reichen von der Erstellung von CAD und Molding Dateien, Verarbeitung von verschiedensten Materialien in unserer Fertigung u.a. auf CNC Metall Dreh- und Fräsmaschinen, über die eigene Platinen Fertigung, Erstellung von komplexen Elektrotechnischen Bauteilen, 3D Druck verschiedenster Materialien auf verschiebenden 3D Drucker sowie 3D Scan und deren Datenverarbeitung.
                                </p>
                                <!--<a href="#" class="btn">Read more</a>-->


                                <div style="display: block; overflow: hidden; height: 30px;"></div>
                                <div class="info-box">
                                    <h2 class="fa-comment">Hilfe & Kontakt</h2>
                                    <hr>
                                    <p>
                                        Sie haben Fragen oder benötigen Unterstützung zu Ihrem Produkt ? Unser Service Team steht für sie telefonisch wie auch per Email zur Verfügung.
                                    </p>
                                    <dl>
                                        <dt>Telefon:</dt>
                                        <dd>02327 / 965 44 71</dd>
                                    </dl>
                                    <dl>
                                        <dt>E-Mail:</dt>
                                        <dd>info@beambox-3d.com</dd>
                                    </dl>
                                    <hr>
                                    <h3>Öffnungszeiten:</h3>
                                    <dl>
                                        <dt>Montag - Freitag:</dt>
                                        <dd>10.00h - 19.00h</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="grid_4">
                                <h2>Unsere Dienstleitungen im Überblick</h2>
                                <p>Als 3D-Allround Dienstleister, unterstützen wir Sie nicht nur beim 3D-Druck Ihrer Designs, sondern erstellen auch nach Ihren Wünschen entsprechende CAD Daten, Konstruktionen oder Ersatzteile. Sollten Sie als für ihr gewünschtes 3D Objekt noch keine dreidimensionale Zeichnung haben, so können unsere professionellen 3D-Experten auch diese Arbeit für Sie übernehmen! Bringen Sie uns Ihre Idee oder Anforderung, damit wir Ihnen von der Idee bis zum fertigen 3D-Modell tatkräftig zur Seite stehen können.</p>
                                <p>
                                    Bei BeamBox 3D Innovations erhalten Sie Alles aus einer Hand!
                                </p>
                                <ul class="marked-list">
                                    <li><a href="#">3D Druck unterschiedlichster Materialien</a></li>
                                    <li><a href="#">3D Scannen von Objekten</a></li>
                                    <li><a href="#">3D Scannen von Menschen & Tieren</a></li>
                                    <li><a href="#">Digitalisierung</a></li>
                                    <li><a href="#">digitale Produktentwicklung</a></li>
                                    <li><a href="#">Workshops</a></li>
                                    <li><a href="#">3D Druckdaten Aufbereitung</a></li>
                                    <li><a href="#">3D Druckdaten Konvertierung</a></li>
                                    <li><a href="#">Feinguss</a></li>
                                    <li><a href="#">Schmuck Fertigung</a></li>
                                </ul>
                            </div>
                            <!--<a href="#" class="btn">Read more</a> </div>-->
                            <div class="grid_4">

                                <ul class="marked-list">
                                    <li><a href="#">Erstellung von CAD Modellen</a></li>
                                    <li><a href="#">3D Figuren Druck</a></li>
                                    <li><a href="#">Prototyping</a></li>
                                    <li><a href="#">3D Design</a></li>
                                    <li><a href="#">Sonderanfertigung</a></li>
                                    <li><a href="#">Rapid Prototyping</a></li>
                                    <li><a href="#">Stereolithography Druck-Technologie</a></li>
                                    <li><a href="#">Fused Deposition Modeling</a></li>
                                    <li><a href="#">3D Visualisierung</a></li>
                                    <li><a href="#">3D Konstruktion</a></li>
                                    <li><a href="#">3D Drucker Prototypenbau</a></li>
                                    <li><a href="#">3D Scanner Anlagen Bau</a></li>
                                </ul>

                                <!--
                                                                <div class="owl-carousel">
                                                                    <div class="item">
                                                                        <blockquote class="box">
                                                                            <div class="box_aside"><img src="images/page-1_img02.jpg" alt=""></div>
                                                                            <div class="box_cnt__no-flow">
                                                                                <p> <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q> </p>
                                                                                <cite><a href="#">Incididunt ut labor</a></cite> </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="item">
                                                                        <blockquote class="box">
                                                                            <div class="box_aside"><img src="images/page-1_img03.jpg" alt=""></div>
                                                                            <div class="box_cnt__no-flow">
                                                                                <p> <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q> </p>
                                                                                <cite><a href="#">Incididunt ut labor</a></cite> </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="item">
                                                                        <blockquote class="box">
                                                                            <div class="box_aside"><img src="images/page-1_img04.jpg" alt=""></div>
                                                                            <div class="box_cnt__no-flow">
                                                                                <p> <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q> </p>
                                                                                <cite><a href="#">Incididunt ut labor</a></cite> </div>
                                                                        </blockquote>
                                                                    </div>
                                                                    <div class="item">
                                                                        <blockquote class="box">
                                                                            <div class="box_aside"><img src="images/page-1_img05.jpg" alt=""></div>
                                                                            <div class="box_cnt__no-flow">
                                                                                <p> <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q> </p>
                                                                                <cite><a href="#">Incididunt ut labor</a></cite> </div>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>

                                -->

                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- FOOTER -->
            <?php
            include './__footer.inc.php';
            ?>
            <!-- END FOOTER -->
        </div>
    </body>
</html>