<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mix3g Administrator Panel</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/reset.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/icons.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/formalize.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/checkboxes.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/sourcerer.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/jqueryui.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/tipsy.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/calendar.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/tags.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/selectboxes.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/960.css")?>" />
    <link rel="stylesheet" href="<?php echo asset_url("admin/css/main.css")?>" />
    <link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo asset_url("admin/css/portrait.css")?>" />
    <link rel="apple-touch-icon" href="<?php echo asset_url("admin/apple-touch-icon-precomposed.png")?>" />


    <!-- JavaScript -->
    <script src="<?php echo asset_url("admin/js/jquery.min.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jqueryui.min.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.cookies.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.pjax.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/formalize.min.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.metadata.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.validate.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.checkboxes.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.chosen.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.fileinput.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.datatables.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.sourcerer.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.tipsy.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.calendar.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.inputtags.min.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.wymeditor.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.livequery.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/jquery.flot.min.js")?>"></script>
    <script src="<?php echo asset_url("admin/js/application.js")?>"></script>
  </head>
  
  <body>
    <!-- Primary navigation -->
    <nav id="primary">
      <ul>
		<li>
          <a href="<?php echo site_url("adminPanel/admin")?>">
            <span class="icon32 home"></span>
            Home
          </a>
        </li>
		<li>
          <a href="<?php echo site_url("adminPanel/menu")?>">
            <span class="icon32 listicon"></span>
            Menu
          </a>
        </li>
		<li>
          <a href="people.html">
            <span class="icon32 user"></span>
            People
          </a>
        </li>
		<li>
          <a href="<?php echo site_url("adminPanel/contact")?>">
            <span class="icon32 new"></span>
            Contact
          </a>
        </li>
        <li class="bottom">
          <a href="<?php echo site_url('adminPanel/logout') ?>">
            <span class="icon32 quit"></span>
            Log out
          </a>
        </li>
      </ul>
    </nav>
    <section id="maincontainer">
        <div id="main" class="container_12">
            <div class="box">
                <div class="box-header">
                    <h1>Index Picture</h1>
                </div>
                <div>
                    <div style="padding:10px 10px 10px 10px;width:370px;float:left;">
                    <?php echo form_open_multipart('admin/addIndexImage');?>
                    <p>
                        <input type="file" id="indexPicture" name="indexPicture" placeholder="Index picture" />
                    </p>
                    <input type="submit" class="button blue" value="Save"/>
                    <span>Note : Image Should be of 940 X 466 for Best Results </span>
                    </form>
                    </div>
                    <div style="padding:10px 10px 10px 10px;float:right;">
                        <?php
                            $count = 1;
                            foreach($indexImage as $img){
                                if($count > 3){
                                    break;
                                }
                                $count++;
                                echo "<div style='float:left;padding-right: 20px;padding-left: 20px;'>";
                                echo "<img height='100' widht='150' src=".img_url($img->imgName) ." alt='' />";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h1>Sub-Index Picture</h1>
                </div>
                <div>
                    <div style="padding:10px 10px 10px 10px;width:370px;float:left;">
                        <?php echo form_open_multipart('admin/addSubIndexImage');?>
                        <p>
                            <input type="file" id="subIndexPicture" name="subIndexPicture" placeholder=" Sub-Index picture" />
                        </p>
                        <input type="submit" class="button blue" value="Save"/>
                        </form>
                    </div>
                    <div style="padding:10px 10px 10px 10px;float:right;">
                        <?php
                        $count = 1;
                        foreach($subIndex as $img){
                            if($count > 3){
                                break;
                            }
                            $count++;
                            echo "<div style='float:left;padding-right: 20px;padding-left: 20px;'>";
                            echo "<img height='100' widht='150' src=".img_url($img->imgName) ." alt='' />";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h1>Tag Line</h1>
                </div>
                <div>
                    <div style="padding:10px 10px 10px 10px;float:left;">
                        <?php echo form_open_multipart('admin/addTagLine');?>
                        <p>
                        <div style="width:400px;float:left;">
                            <input type="text" id="tagline1" placeholder="Tag" name="tagLine1" class="{validate:{required:true, minlength:3}}" />
                        </div>
                        <div style="width:300px;float:left;">
                            <input type="text" id="tagline2" placeholder="Tag" name="tagLine2" class="{validate:{required:true, minlength:3}}" />
                        </div>
                        </p>
                        <input type="submit" class="button blue" value="Save"/>
                        </form>
                    </div>
                    <div style="padding:10px 10px 10px 10px;float:left;">
                        <br>
                        <p>
                        <?php
                            foreach($tagline as $tag){
                                echo $tag->tagline1 . " " . $tag->tagline2;
                                break;
                            }
                        ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h1>About Us</h1>
                </div>
                <div>
                    <div style="padding:10px 10px 10px 10px;width:600px;float:left;">
                        <?php echo form_open_multipart('admin/addAbout');?>
                        <p>
                            <textarea id="textarea" name="about" class="{validate:{required:true}}">About Us</textarea>
                        </p>
                        <input type="submit" class="button blue" value="Save"/>
                        </form>
                    </div>
                    <div style="padding:10px 10px 10px 10px;float:left;width:570px;">
                        <p>
                            <?php
                                foreach($about as $info){
                                    echo $info->about;
                                    break;
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h1>About Us</h1>
                </div>
                <div>
                    <div style="padding:10px 10px 10px 10px;width:600px;float:left;">
                        <?php echo form_open_multipart('admin/addWhyUs');?>
                        <p>
                            <textarea id="textarea" name="whyUs" class="{validate:{required:true}}">Why Us</textarea>
                        </p>
                        <input type="submit" class="button blue" value="Save"/>
                        </form>
                    </div>
                    <div style="padding:10px 10px 10px 10px;float:left;width:570px;">
                        <p>
                            <?php
                            foreach($about as $info){
                                echo $info->about;
                                break;
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
  </body>
</html>