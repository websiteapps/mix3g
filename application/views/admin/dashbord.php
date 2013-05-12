<!DOCTYPE html>
<html lang="en">
  <head>

    <title>DashBord</title>

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
      <script src="<?php echo asset_url("admin/javascript/oocharts.js")?>"></script>
      <script src="<?php echo asset_url("admin/javascript/build.js")?>"></script>
  </head>
  
  <body onLoad="buildChart()">
    <!-- Primary navigation -->
    <nav id="primary">
      <ul>
          <li class="active">
              <a>
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
            <div class="box-content">
                <div class="column-left">
                    <div class="box">
                        <div class="box-header">
                            <span class="icon16 cog"></span><h1>Weeks Report</h1>
                        </div>
                        <div id="timeline" style="padding:10px 10px 10px 10px;height:300px;">
                        </div>
                    </div>
                </div>
                <div class="column-right">
                    <div class="box">
                        <div class="box-header">
                            <span class="icon16 cog"></span><h1>Visitor Report</h1>
                        </div>
                        <div id="pie" style="padding:10px 10px 10px 10px;height:300px;">

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-content">
                <div class="column-left">
                    <div class="box">
                        <div class="box-header">
                            <span class="icon16 cog"></span><h1>Statistics</h1>
                        </div>
                        <div style="padding:10px 10px 10px 10px;height:100px;">
                            <table>
                                <tr><th>Visitors</th><th>PageViews</th><th>Bounces</th></tr>
                                <tr>
                                    <td><h1 align="center" id="data1"></h1></td>
                                    <td><h1 align="center" id="data2"></h1></td>
                                    <td><h1 align="center" id="data3"></h1></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="column-right">
                    <div class="box">
                        <div class="box-header">
                            <span class="icon16 cog"></span><h1>Location Report</h1>
                        </div>
                        <div id="table" style="padding: 10px 10px 10px 10px;float:left;width:550px;"></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>