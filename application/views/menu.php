<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu | Mix36</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo asset_url("css/reset.css") ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/style.css") ?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/layout.css") ?>" type="text/css" media="screen">
    <script src="<?php echo asset_url("js/jquery-1.7.1.min.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-yui.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-replace.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/Dynalight_400.font.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/FF-cash.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/jquery.equalheights.js") ?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/jquery.bxSlider.js") ?>" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 3
			});
		}); 
	</script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="<?php echo asset_urL("js/html5.js") ?>"></script>
	<![endif]-->
</head>
<body id="page2">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="<?php echo base_url() ?>">Vidhata's <span>Mix 3G</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a class="active" href="<?php echo site_url('home/menu')?>">Menu</a></li>
                            <li><a href="<?php echo site_url("home/people")?>">People</a></li>
                            <li><a href="<?php echo site_url('home/contact')?>">Contact</a></li>
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
                        echo "<h2>".$tag->tagline1."<span>".$tag->tagline2."</span></h2>";
                        break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Special Offer</h3>
                            <div class="wrapper img-indent-bot">
                                <?php
                                    foreach($special as $spl){
                                        echo "<figure class='img-indent'><img width='210' height='125' src=". img_url($spl->img) ." alt=''></figure>";
                                        echo "<div class='extra-wrap'>";
                                        echo "<h5>".$spl->specialName." </h5>";
                                        echo $spl->specialDesc;
                                        echo "</div>";
                                        break;
                                    }
                                ?>
                            </div>
                            <a class="button-1" href="#">Read More</a>
                        </div>
                        <h3 class="p1">Our Best Menus</h3>
                            <div id="slider">
                                <?php
                                $cnt = 0;
                                foreach($bestMenu as $parent=>$child){
                                    if($cnt == 0){
                                        echo "<div>";
                                    }
                                    $cnt++;
                                    if($cnt == 1 || $cnt == 2){
                                        echo "<div class='p2'>";
                                        echo "<figure><a><img width='150' height='100' src=" . img_url($child->img) ." alt=''></a></figure>";
                                        echo "<h5>" . $child->menuName . "</h5>";
                                        echo $child->menuPrice;
                                        echo "</div>";
                                    }else{
                                        echo "<figure><a><img width='150' height='100' src=" . img_url($child->img) ." alt=''></a></figure>";
                                        echo "<h5>" . $child->menuName . "</h5>";
                                        echo $child->menuPrice;
                                    }
                                    if($cnt == 3){
                                        echo "</div>";
                                        $cnt = 0;
                                    }
                                }
                                ?>
                            </div>
                    </div>
                </article>
                <article class="col-2">
                    <?php
                      foreach($menu as $menuFamily=>$menuChild){
                          echo "<h3>$menuFamily</h3>";
                          echo "<ul class='price-list p2'>";
                          foreach($menuChild as $m){
                                $price = $m->menuPrice;
                                if($price == '0'){
                                    $price = "";
                                }else{
                                    $price = "₹ " . $price;
                                }
                                echo "<li><span>$price</span>$m->menuName</li>";
                          }
                          echo "</ul>";
                      }
                    ?>
                    <!-- <a class="button-2" href="#">Read More</a> -->
                </article>
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
