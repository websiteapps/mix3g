<!DOCTYPE html>
<html lang="en">
<head>
    <title>People | Mix36</title>
    <link rel="stylesheet" href="<?php echo asset_url("css/reset.css") ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/style.css") ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/layout.css") ?>" type="text/css" media="screen">
    <script src="<?php echo asset_url("js/jquery-1.7.1.min.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-yui.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-replace.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/Dynalight_400.font.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/FF-cash.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/tms-0.3.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/tms_presets.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/jquery.easing.1.3.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/jquery.equalheights.js") ?>" type="text/javascript"></script>

</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                    <h1><a href="<?php echo base_url() ?>">Vidhata's <span>Mix 3G</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="home/index">Home</a></li>
                            <li><a href="<?php echo site_url("home/menu")?>">Menu</a></li>
                            <li><a class="active" href="<?php echo site_url("home/people")?>">People</a></li>
                            <li><a href="<?php echo site_url("home/contact")?>">Contact</a></li>
                            <li><a href="<?php echo site_url("home/login")?>">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                    <?php
                    foreach($tagline as $tag){
                        echo "<h2>".$tag->tagline1."<span> ".$tag->tagline2."</span></h2>";
                        break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container">
                <?php
                    foreach($people as $emp){
                        echo "<div width='700px' style='height:250px;margin:10px 10px 10px 10px;'>";
                            echo "<div style='float:left;'>";
                                echo "<img height='200px' width='150px' src='".img_url($emp->img)."' />";
                            echo "</div>";
                            echo "<div style='float:right;height:200px;width:750px;'>";
                                echo "<strong>$emp->name</strong>";
                                echo "<p>$emp->designation</p>";
                                echo "<span><p>$emp->desc</p></span>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="aligncenter">
                <span>Mix36.com &copy; 2012</span>
                <span>Developed by</span>
                <a rel="nofollow" class="link" target="_blank" href="http://www.websiteapps.in">WebsiteApps
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
