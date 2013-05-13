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

      <!--  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->

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
              <a href="<?php echo site_url("adminPanel/dashbord") ?>">
                  <span class="icon32 dashboard"></span>
                  Dashboard
              </a>
          </li>
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
          <a href="<?php echo site_url("adminPanel/people")?>">
            <span class="icon32 user"></span>
            People
          </a>
        </li>
		<li class="active">
          <a href="">
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
                    <span class="icon16 cog"></span><h1>Contact</h1>
                </div>
                <div style='padding:10px 10px 10px 10px;width:500px;float:left'>

                    <?php echo form_open_multipart('admin/addContact');?>
                    <p>
                        <input type="text" id="contactName" placeholder="Contact Name" name="contactName"/>
                    </p>
                    <p>
                        <input type="text" id="contactEmail" placeholder="Email id" name="contactEmail"/>
                    </p>
                    <p>
                        <input type="text" id="phoneNumber" placeholder="Phone Number" name="phoneNumber"/>
                    </p>
                    <p>
                        <input type="text" id="phoneNumber1" placeholder="Phone Number 1" name="phoneNumber1"/>
                    </p>
                    <p>
                        <input type="text" id="phoneNumber2" placeholder="Phone Number 2" name="phoneNumber2"/>
                    </p>
                    <p>
                        <input type="text" id="fax" placeholder="Fax" name="fax"/>
                    </p>
                    <p>
                        <input type="text" id="street" placeholder="Street" name="street"/>
                    </p>
                    <p>
                        <input type="text" id="state" placeholder="State" name="state"/>
                    </p>
                    <p>
                        <input type="text" id="city" placeholder="City" name="city"/>
                    </p>
                    <p>
                        <input type="text" id="zip" placeholder="Zip" name="zip"/>
                    </p>
                    <input type="submit" class="button blue" value="Save"/>
                    </form>
                </div>
                <div style="padding-top:10px; padding-left:30px;float:left;">

                    <table style="width:500px;">
                        <?php
                            foreach($contact as $info){
                                echo "<tr><td>Name</td><td>$info->contactName</td></tr>";
                                echo "<tr><td>Phone Number</td><td>$info->phoneNumber</td></tr>";
                                echo "<tr><td>Phone Number 1</td><td>$info->phoneNumber1</td></tr>";
                                echo "<tr><td>Phone Number 2</td><td>$info->phoneNumber2</td></tr>";
                                echo "<tr><td>Email</td><td>$info->email</td></tr>";
                                echo "<tr><td>Fax</td><td>$info->fax</td></tr>";
                                echo "<tr><td>Street</td><td>$info->street</td></tr>";
                                echo "<tr><td>State</td><td>$info->state</td></tr>";
                                echo "<tr><td>City</td><td>$info->city</td></tr>";
                                echo "<tr><td>Zip</td><td>$info->zip</td></tr>";
                                break;
                            }
                        ?>
                    </table>
                </div>
                <div class="clear"></div>
             </div>
        </div>
    </section>
  </body>
</html>