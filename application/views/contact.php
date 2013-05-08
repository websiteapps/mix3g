<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo asset_url("css/reset.css")?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/style.css")?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo asset_url("css/layout.css")?>" type="text/css" media="screen">
    <script src="<?php echo asset_url("js/jquery-1.7.1.min.js")?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-yui.js")?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/cufon-replace.js")?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/Dynalight_400.font.js")?>" type="text/javascript"></script>
    <script src="<?php echo asset_url("js/FF-cash.js")?>" type="text/javascript"></script>
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
    <script type="text/javascript">
        function send(){
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
            }
            var url ="name="+document.contact.name.value +
                "&email="+document.contact.email.value +
                "&msg="+document.contact.msg.value;

            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState == 4 && xmlhttp.status== 200)
                {
                    if(xmlhttp.responseText == 1){
                        document.getElementById('contact-form').reset();
                        document.getElementById('ajaxResponse').innerHTML="Message Send";
                    }else{
                        document.getElementById('ajaxResponse').innerHTML="Fail to Send Message. Please Contact us via Phone Number";
                    }
                }
            }
            xmlhttp.open("post","<?php echo site_url('admin/sendEmail')?>",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.setRequestHeader("Content-length",url.length);
            xmlhttp.send(url);
        }
    </script>
</head>
<body id="page6">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                    <h1><a href="<?php echo base_url() ?>">Vidhata's <span>Mix 3G</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="<?php echo site_url()?>">Home</a></li>
                            <li><a href="<?php echo site_url('home/menu')?>">Menu</a></li>
                            <li><a class="active" href="<?php echo site_url('home/contact')?>">Contact</a></li>
                            <li><a href="<?php echo site_url("home/login")?>">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Impressive Selection <span>for any Occasion</span></h2>
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
                    	<h3 class="p1">Our Contacts</h3>
                        <figure class="indent-bot">
                            <iframe width="240" height="180" src="http://maps.google.co.in/maps?q=16.860292,74.569454&amp;num=1&amp;hl=en&amp;ie=UTF8&amp;ll=16.859717,74.570319&amp;spn=0.002747,0.005284&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                        </figure>
                        <dl>
                            <?php
                                echo "<dt class='p1'>$street, $state, $city</dt>";
                                echo "<dd><span>Freephone:</span>$phoneNumber</dd>";
                                echo "<dd><span>Telephone:</span>$phoneNumber1</dd>";
                                echo "<dd><span>Fax:</span>$fax</dd>";
                                echo "<dd><span>Email:</span><a class='color-2'>$email</a></dd>";
                            ?>
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">Contact Form</h3>
                    <form id="contact-form" name="contact">
                        <fieldset>
                              <label><span class="text-form">Your Name:</span><input name="name" type="text" /></label>
                              <label><span class="text-form">Your Email:</span><input name="email" type="text" /></label>                              
                              <div class="wrapper">
                                <div class="text-form">Your Message:</div>
                                <div class="extra-wrap">
                                    <textarea name="msg"></textarea>
                                    <div class="clear"></div>

                                    <div class="buttons">
                                        <a class="button-2" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                        <a class="button-2" onClick="send()">Send</a>
                                    </div>
                                    <span id='ajaxResponse'></span>
                                </div>
                              </div>                            
                        </fieldset>						
                    </form>
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
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
