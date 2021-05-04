<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Corporattica</title>
    <script type="text/javascript" src="public/js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="public/js/menu.js"></script>
    <script type="text/javascript" src="public/js/slideshow.js"></script>
    <script type="text/javascript" src="public/js/cufon-yui.js"></script>
    <script type="text/javascript" src="public/js/Arial.font.js"></script>
    <script type="text/javascript">
    Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
    </script>
    <script type="text/javascript" src="public/js/fancyzoom.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('div.photo a').fancyZoom({directory: 'public/images/zoom', scaleImg: true, closeOnClick: true});
        });
    function Nothing(){alert('Nothing happened(')}
    </script>
    <?
    include ('engine/catalogElement.php');
    include ('engine/productInfo.php');
    $id = $_GET[id];
    ?>
    <link rel="stylesheet" href="public/css/main.css" type="text/css" />
</head>
<body>
<div id="container">
<div id="bg">
    <div class="wrap">
        <!-- logo -->
        <h1><a href="index.php">corporattica</a></h1>
        <!-- /logo -->

        <!-- menu -->
        <div id="mainmenu">
            <ul id="menu">
                <li><a class="current" href="index.php">Home</a></li>
                <li><a href="catalog.php">Catalog</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <!-- /menu -->

        <!-- pitch -->
        <div id="pitch">
            <div id="slideshow">

                <!-- 1st frame -->
                <div class="active">
                    <img src="public/images/pitch/pitch1.jpg" alt="" />
                    <div class="overlay transparent">
                        <h2>Professional Approach</h2>
                        <p>Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
                    </div>
                    <p class="arrow"><a href="#"></a></p>
                </div>
                <!-- /1st frame -->

                <!-- 2nd frame -->
                <div>
                    <img src="public/images/pitch/pitch2.jpg" alt="" />
                    <div class="overlay transparent">
                        <h2>Precise Methods</h2>
                        <p>Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
                    </div>
                    <p class="arrow"><a href="#"></a></p>
                </div>
                <!-- /2nd frame -->

                <!-- 3rd frame -->
                <div>
                    <img src="public/images/pitch/pitch3.jpg" alt="" />
                    <div class="overlay transparent">
                        <h2>Mesurable Results</h2>
                        <p>Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
                    </div>
                    <p class="arrow"><a href="#"></a></p>
                </div>
                <!-- 3rd frame -->

            </div>
        </div>
        <!-- /pitch -->

        <!-- main -->
        <div id="main">
            <div id="shortInfo">
                <a target="_blank" href="public/images/product/<?=$arrImages[$id][1].$arrImages[$id][2]?>"><img src="public/images/product/mini/<?=$arrImages[$id][1].'_mini'.$arrImages[$id][2]?>" alt="Image" class="left" /></a>
                <ul>
                    <li>ID Product: <?=($id+1)?></li>
                    <li>Name: <?=$arrProduct[$id][1]?></li>
                    <li>Price: <?=$arrProduct[$id][2].$arrProduct[$id][3]?></li>
                </ul>
                <button id="buy" onclick="Nothing()">buy</button>
            </div>

            <h2>Info</h2>
            <p><?=$arrProduct[$id][4]?></p>
            </div>

        </div>
        <!-- /main -->

        <!-- side -->

        <!-- /side -->
    </div>

    <!-- footer -->
    <div id="footer">
        <div id="footerbg">
            <div class="wrap">

                <!-- footer links -->
                <p id="footer_menu">
                    <a href="#">Jobs @ corporattica</a>
                    <a href="#">Press Releases</a>
                    <a href="#">Terms and Conditions</a>

                    <!-- credit link -->
                    <a href="http://www.solucija.com" title="Free CSS Templates">Solucija</a>
                </p>
                <!-- /footer links -->

                <p id="copy">corporattica <span>professional approach</span></p>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- /footer -->
</div>
</body>
</html>