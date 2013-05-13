<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
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
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="<?php echo asset_url("js/html5.js")?>"></script>
	<![endif]-->
</head>
<body id="page1">

	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="<?php echo base_url()?>">Vidhata's <span>Mix 3G</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="home/index">Home</a></li>
                            <li><a href="<?php echo site_url("home/menu")?>">Menu</a></li>
                            <li><a href="<?php echo site_url("home/people")?>">People</a></li>
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
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <?php
                                    $count = 1;
                                    foreach($indexImage as $img){
                                        if($count > 3){
                                            break;
                                        }
                                        $count++;

                                        echo "<li>";
                                        echo "<img src=".img_url($img->imgName) ." alt='' />";
                                        echo "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <?php
                $count = 1;
                foreach($subIndex as $img){
                    if($count > 3){
                        break;
                    }
                    $count++;

                    if($count == 3){
                        echo "<article class='col-2'>";
                    }else{
                        echo "<article class='col-1'>";
                    }
                    echo "<a href=''><img height='170px' width='300px' class='img-border' src=".img_url($img->imgName)." alt=''></a><img src= alt='' />";
                    echo "</article>";
                }
                ?>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            <h3>Why Us..</h3>
                            <ul class="list-1">
                                <?php
                                foreach($whyUs as $item){
                                    echo "<li><a>$item->whyUs</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <a class="button-1" href="#">Read More</a>
                    </div>
                </article>
                <article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">About Mix3G</h3>
                        <h6 class="p2"></h6>
                        <?php
                        foreach($about as $info){
                            echo "<p class='p2'>$info->about</p>";
                            break;
                        }
                        ?>
                    </div>
                    <a class="button-2" href="#">Read More</a>
                </article>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	<span>Mix3G.com &copy; 2012</span>
                <span>Developed by</span>
                <a rel="nofollow" class="link" target="_blank" href="http://www.websiteapps.in">WebsiteApps
            </div>
        </div>

        <!-- REMOTE THIS TRACKING CODE  -->
        <div style="DISPLAY: none">
        <br>
        <script language="JavaScript" src="http://www.counter160.com/js.js?img=15"></script><br>
        <a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/15/left.png" alt="Free web hosting" border="0" align="texttop"></a>
        <a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/15/right.png" border="0" align="texttop"></a>
        </div>
        <!-- REMOTE THIS TRACKING CODE  -->


    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
