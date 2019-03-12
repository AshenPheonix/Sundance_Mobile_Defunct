<?php if(session_status()==PHP_SESSION_NONE){
    $good='false';
//    session_start();
}else{
    $good='true';
}

define('CLASSROOT',ROOT.'/mobile/includes/classes/');
define('DBROOT',ROOT.'/mobile/includes/dbs/');

function saleDate($end,$salePrice,$regularPrice)
{
    if((int)date('mdy')<=(int)$end):?>
Sale Price: $<?=$salePrice;?>
<?php else:?>
Our Price: $<?=$regularPrice;?>
<?php endif;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        // FOR MOBILE REDIRECT!!!!!
        //require_once ROOT.'/mobile/includes/linkmap.php';
    ?>
    <?php if(stristr($_SERVER['PHP_SELF'], 'emergency')===false):?>
    <script>
    location.replace('/mobile/emergency-mobile.php')
    </script>
    <?php endif;?>
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php
  define( 'RUSH_PRICE', '10.00' );
  if ( !isset($title) ) {
    $title = 'Sundance Art Glass Center';
  }
  if ( !isset($description) ) {
    $description = 'Sundance Art Glass';
  }
  $description = '<META name="description" content="' . $description . '">';
  if ( !isset($keywords) ) {
    $keywords = 'Sundance Art Glass';
  }
  $keywords = '<META name="Keywords" content="' . $keywords . '">';
  if ( isset( $abstract ) ) {
    $abstract = '<META name="Abstract" content="' . $abstract . '">';
  } else {
    $abstract = '';
  }
  define( 'CSS', 1 );

  /*
  require_once( ROOT . '/includes/dbLib.php' );
  $db = dbConnect( "sundanceglass" );
  $updateClasses = true;
  */
  //$updateClasses = false;

  ?>
    <!-- START header.php -->
    <title>
        <?php echo $title; ?>
    </title>
    <?php echo $description."\t\n\r".$keywords."\t\n\r".$abstract."\t\n\r"; ?>

    <!-- START Meta tags -->
    <meta name="alexaVerifyID" content="s-x0pZlrAj3GHNcvJytcpuazpN8">
    <meta name="language" content="en-us">
    <meta name="author" content="Brian Helgerson">
    <meta name="author" content="Brandon Porter">
    <meta name="copyright" content="&copy; Copyright 2008 Brian Helgerson. All rights reserved.">
    <meta name="organization" content="http://www.sundanceglass.com">
    <meta name="home_url" content="http://www.sundanceglass.com">
    <meta name="resource-type" content="document">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="audience" content="all">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <meta charset="utf-8">
    <meta name="description"
        content="'Sundance Art Glass is your preferred distributor of Bethlehem, Hothead, Nortel, Carlisle, and GTT torches, Various kits for the beginning hobbyist who wants to learn more about all types of glass work including pipe making, beadmaking, marble making, fusing, lampwork, sculpture and more.  We are a proud distributor of Bullseye, Schott, Trautman, Northstar, Momka, and Glass Alchemy Rods, Frits, Powders, Stringers and Tubing. Paragon kilns always in stock, along with several other major brands. Look no further than Sundance for all of your glassworking supply and tool needs'.">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/mobile/includes/js/search.js"></script>
    <script type="text/javascript" src="/mobile/includes/js/cart.js"></script>
    <script src="//use.edgefonts.net/butcherman.js"></script>
    <script src="//use.edgefonts.net/nosifer.js"></script>
    <!-- END Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" href="/mobile/includes/css/dropdown.css">
    <link type="text/css" href="/mobile/includes/css/cssverticalmenu.css">
    <link type="text/css" href="/mobile/includes/css/layout.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/mobile/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" href="/mobile/includes/chrometheme/chromestyle.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integ
        rity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="/mobile/includes/css/tooltips.css">
    <link rel="stylesheet" href="/mobile/includes/css/basic.css">
    <!--[if IE]>
<link  type="text/css" href="/mobile/includes/css/ielayout.css">
<![endif]-->
    <?php if((int)date('md')>= 1101  && (int)date('md')<1201 && true):?>
    <link href="/mobile/includes/css/november.css">
    <?php endif; ?>

    <!-- Do not remove Code Below, for Tracking Visitors and Statistical Analysis. FROM CD 5/12/09 -->
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost +
        "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-8723721-3");
        pageTracker._trackPageview();
    } catch (err) {}
    </script>
    <!-- Do not remove Code Above, for Tracking Visitors and Statistical Analysis. FROM CD 5/12/09 -->
    <!--<script language="JavaScript1.2">mmLoadMenus();</script>-->

    <link href="/mobile/includes/css/printer.css" media="print">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <a href="/mobile/index.php">
                    <img class="img-fluid" alt="Sundance Art Glass" src="/mobile/images/logo.jpg">
                </a>
            </div>
        </div>
    </div>
    <br>
    <div id="cartModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="cartLabel">Cart</div>
                    <button type="button" data-dismiss="modal" aria-label="close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-info mx-auto" style="cursor:pointer"
                                    onclick="window.location='http://www.mcssl.com/SecureCart/SecureCart.aspx?mid=/*private*/'">
                                    View Cart
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <a href="http://www.1shoppingcart.com/features/4" target="_blank">
                                    <img src="http://www.sundanceglass.com/mobile/images/learn-more-now-web.jpg"
                                        alt="Learn about our commitment to security" class="img-fluid mx-auto">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="chromestyle center" id="chromemenu">
        <nav class="navbar navbar-expand-md navbar-light bg-chrome" role="navigation">
            <a class="navbar-brand" href="/mobile/index.php">Sundance Glass</a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                data-target="#primaryControl" aria-controls="primaryControl" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-chrome" id="primaryControl">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/mobile/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="/mobile/about/index.php">About Us</a>
                            <a class="dropdown-item" href="/mobile/about/contactus.php">Contact Us</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/mobile/wholesale.php" class="nav-link">Wholesale</a>
                    </li>
                    <li class="nav-item"><a href="/mobile/orderform.php" class="nav-link">Ordering Information</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Glass
                        </a>
                        <div class="dropdown-menu">
                            <a href="/mobile/rods_tubes/hard/index.php" class="dropdown-item">Borosilicate(COE
                                33/Glassblowing/Pyrex)</a>
                            <a href="/mobile/glass/bullseye-main.php" class="dropdown-item">Bullseye(COE 90/Fusing)</a>
                            <a href="/mobile/glass/soft-main.php" class="dropdown-item">Moretti/Effetre(COE 104/Soft
                                Glass)</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dichroic</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/dichroic/index.php" class="dropdown-item">Dichroic Main</a>
                            <a href="/mobile/dichroic/coe33.php" class="dropdown-item">Pyrex/COE 33 Dichroic</a>
                            <a href="/mobile/dichroic/coe90.php" class="dropdown-item">Bullseye/COE 90 Dichroic</a>
                            <a href="/mobile/dichroic/coe104.php" class="dropdown-item">Moretti/Effetre COED 104
                                Dicroic</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Kilns</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/kilns/index.php" class="dropdown-item">Kilns Index</a>
                            <a href="/mobile/kilns/crucible.php" class="dropdown-item">Crucible Kilns</a>
                            <a href="/mobile/kilns/fusing.php" class="dropdown-item">Fusing Kilns</a>
                            <a href="/mobile/kilns/annealing.php" class="dropdown-item">Annealing Kilns</a>
                            <a href="/mobile/kilns/controllers.php" class="dropdown-item">Controllers</a>
                            <a href="/mobile/kilns/pyrometer.php" class="dropdown-item">Pyrometers</a>
                            <a href="/mobile/kilns/shelves_posts.php" class="dropdown-item">Kiln Shelves and Posts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Torches</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/torches/index.php" class="dropdown-item">All Torches</a>
                            <a href="/mobile/torches/gas_equipment.php" class="dropdown-item">Torch Equipment</a>
                            <a href="/mobile/torches/oxygen_concentrator.php" class="dropdown-item">Oxygen
                                Concentrators</a>
                            <a href="/mobile/torches/foot-pedals.php" class="dropdown-item">Foot Pedals</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">DVD's</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/dvds/bead.php" class="dropdown-item">Beadworking</a>
                            <a href="/mobile/dvds/boro.php" class="dropdown-item">Borosilicate Work</a>
                            <a href="/mobile/dvds/lampworking.php" class="dropdown-item">Lampworking</a>
                            <a href="/mobile/dvds/both.php" class="dropdown-item">Multiple Subject</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Kits</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/kits/fusing.php" class="dropdown-item">Fusing Kits</a>
                            <a href="/mobile/kits/toolkit.php" class="dropdown-item">Tool Kits</a>
                            <a href="/mobile/kits/install.php" class="dropdown-item">Gas Equipment Kits</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Supplies</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/supplies/index.php" class="dropdown-item">Index</a>
                            <a href="/mobile/supplies/fusing.php" class="dropdown-item">Fusing</a>
                            <a href="/mobile/supplies/beadmaking.php" class="dropdown-item">Beadmaking Supplies</a>
                            <a href="/mobile/supplies/glassblowing.php" class="dropdown-item">Glassblowing Supplies</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/mobile/display_stands/index.php" class="nav-link">Display Standsw Index</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="glassDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Rods/Tubes</a>
                        <div class="dropdown-menu">
                            <a href="/mobile/rods_tubes/index.php" class="dropdown-item">Rods and Tubes Index</a>
                            <a href="/mobile/rods_tubes/hard/index.php" class="dropdown-item">Borosilicate Rods</a>
                            <a href="/mobile/glass/soft/starter.php" class="dropdown-item">Soft Glass Rods</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/mobile/eye_wear/index.php" class="nav-link">Eye Wear</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <!-- Wholesale -->
    <!-- End of header -->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8">

                <!-- For the print version-->
                <button id="printPage" style="float:right;">
                    Printer Friendly.
                </button><br><br>
                <script>
                $(() => {
                    $('#printPage').on('click', () => {
                        window.print();
                    })
                })
                </script>