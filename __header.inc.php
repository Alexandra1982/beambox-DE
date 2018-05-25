<?php

function nav($links, $return = ' class="active"', $returnOnFalse = '') {
    if (strstr($links, ',')) {
        $links = explode(',', $links);
    } else {
        $links = array($links);
    }
    $match = FALSE;
    $str = $_SERVER['REQUEST_URI'];
    foreach ($links as $value) {
        if ($value == substr($str, 1, strlen($value))) {
            $match = TRUE;
        }
    }
    if ($match == FALSE AND $str == "/" AND in_array('root', $links)) {
        $match = TRUE;
    }
    return ($match == TRUE ? $return : $returnOnFalse);
}
?>

<!--
              ========================================================
                                                                HEADER
              ========================================================
-->
<header>
    <div class="container">
        <!--<div class="topbutton"> <a href="" class="btn2">Read more</a> </div>-->
        <div style="display: block; overflow: hidden; height: 10px;"></div>
        <div class="brand">
            <h1 class="brand_name">
                <a href="./"><img src="img/BeamBox84px.png" alt="Beambox 3D Innovations" longdesc="http://beambox-3d.com"></a>
            </h1>
        </div><a href="callto:#" class="fa-phone">+49(0)2327-965-44-71</a>
        <br><p>Für mehr Informationen kontaktieren Sie uns bitte</p>
    </div>
    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <nav class="nav">
                <ul data-type="navbar" class="sf-menu">
                    <li<?php echo nav('index.html,root'); ?>><a href="./">Home</a> </li>
                    <li<?php echo nav('service_3d-body-scan.html,service_3d-objekt-scan.html'); ?>><a class="noaction" href="">Services</a>
                        <ul>
                            <li<?php echo nav('service_3d-body-scan.html'); ?>><a href="./service_3d-body-scan.html">3D Body Scannen</a></li>
                            <li<?php echo nav('service_3d-objekt-scan.html'); ?>><a href="./service_3d-objekt-scan.html">3D Objekt Scannen</a></li>
                            <li<?php echo nav('service_3d-druck-service.html'); ?>><a href="./service_3d-druck-service.php">3D Druck Service</a></li>
                            <!--
                            <li><a href="proto.html">Prototypenbau</a>
                                <ul>
                                    <li><a href="dyndnsbox.html">DynDnsBox Dienst</a></li>
                                    <li><a href="webinterface.html">3D-Printer Interface</a></li>
                                    <li><a href="homecontrol.html">i-Walletz Interface</a></li>
                                    <li><a href="homecontrol.html">Connected Car Interface</a></li>
                                </ul>
                            </li>

                            <li><a href="terminals.html">3D Druck Terminals</a></li>
                            <li><a href="dommains.html">Domains</a></li>
                            <li><a href="baukasten.html">Homepage-Baukasten</a></li>
                            -->
                        </ul>
                    </li>
                    <li<?php echo nav('produkte_3d-scanner.html,produkte_3d-drucker.html'); ?>><a href="">Produkte</a>
                        <ul>
                            <li><a href="/produkte_3d-scanner.html">3D-Scanner</a></li>
                            <li><a href="/produkte_3d-drucker.html">3D-Drucker</a></li>
                        </ul>
                    </li>
                    <li><a href="workshops.html">Workshops</a></li>
                    <!--<li><a href="referenzen.html">Referenzen</a> </li>-->
                    <!--<li><a href="projekte.html">Projekte</a> </li>-->
                    <!--<li><a href="news.html">News & Presse</a> </li>-->
                    <li<?php echo nav('faqs.html'); ?>><a href="faqs.html">FAQ`S</a> </li>
                    <li<?php echo nav('kontakt.html'); ?>><a href="kontakt.html">Kontakt</a></li>
                    <li<?php echo nav('geschenkgutscheinaktion.html,geschenkgutscheinaktion_erfolgreich.html'); ?>><a class="promo" href="geschenkgutscheinaktion.php">Geschenk-Gutschein Aktion</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>