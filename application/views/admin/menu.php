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

      <script type="text/javascript">
          function showImageUpload() {
              var opt = document.getElementById('addMenuType').value;
              if(opt == 'BEST_MENU' || opt == 'SPECIAL_MENU'){
                    document.getElementById('imgUpload').style.display="block";
              }else{
                  document.getElementById('imgUpload').style.display="none";
              }
          }
      </script>
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
          <a href="">
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
          <a href="contact.html">
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
                              <span class="icon16 cog"></span><h1>Add Menu</h1>
                          </div>
                              <div style="padding:10px 10px 10px 10px;">
                                  <?php echo form_open_multipart('admin/addMenu');?>
                                  <p>
                                      <select id="addMenuType" placeholder="MenuType" name="menuType" onchange = "showImageUpload()">
                                          <option value='REGULAR_MENU'>Regular Menu</option>
                                          <option value='BEST_MENU'>Best Menu</option>
                                          <option value='SPECIAL_MENU'>Special Menu</option>
                                      </select>
                                  </p>
                                  <p>
                                      <select id="menuFamilyType" class="{validate:{required:true}}" placeholder="Menu Family" name="menuFamilyType">
                                      <?php
                                      foreach($menuFamily as $mf){
                                          echo "<option value ='".$mf['id']."'>".$mf['menuName']."</option>";
                                      }
                                      ?>
                                      </select>
                                  </p>
                                  <p>
                                      <input type="text" id="menuName" placeholder="Menu Name" name="menuName"/>
                                  </p>
                                  <p>
                                      <input type="text" id="menuPrice" placeholder="Menu Price" name="menuPrice" value="0"/>
                                  </p>
                                  <p id="imgUpload" style="DISPLAY: none;">
                                      <input type="file" id="menuPicture" name="menuPicture" placeholder="Menu Picture"/>
                                  </p>
                                  <input type="submit" class="button blue" value="Save"/>
                                  </form>
                              </div>
                          <div class="clear"></div>
                      </div>
                  </div>
                  <div class="column-right">
                      <div class="box">
                          <div class="box-header">
                              <span class="icon16 cog"></span><h1>Menu Family</h1>
                          </div>
                          <div style="padding:10px 10px 10px 10px;height:91px;">
                              <?php echo form_open_multipart('admin/addMenuFamily');?>
                                <p>
                                  <input type="text" id="menuFamilyName" placeholder="Menu Family Name" name="menuFamilyName"/>
                                </p>
                                <input type="submit" class="button blue" value="Save"/>
                                <span id='ajaxResponse_addMenuFamily'></span>
                              </form>
                          </div>
                      </div>
                      <div class="box">
                          <div class="box-header">
                              <span class="icon16 cog"></span><h1>Delete Menu Family</h1>
                          </div>
                          <div style="padding:10px 10px 10px 10px;height:91px;">
                              <?php echo form_open_multipart('admin/deleteMenuFamily');?>
                              <p>
                                  <select id="deleteMenuFamilyType" class="{validate:{required:true}}" placeholder="Menu Family" name="deleteMenuFamilyType">
                                      <?php
                                      foreach($menuFamily as $mf){
                                          echo "<option value ='".$mf['id']."'>".$mf['menuName']."</option>";
                                      }
                                      ?>
                                  </select>
                              </p>
                              <input type="submit" class="button blue" value="Delete"/>
                              <span id="ajaxResponse_deleteMenuFamily"></span>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="clear"></div>
        </div>

        <!-- Delete Menu -->
        <div id="main" class="container_12">
            <div class="box-content">
                   <div class="box">
                        <div class="box-header">
                            <span class="icon16 cog"></span><h1>Delete Menu</h1>
                        </div>
                        <div style="width:500px;">
                            <div style="padding:10px 10px 10px 10px;">
                                <?php echo form_open_multipart('admin/addMenu');?>
                                <p>
                                    <select id="menuType1" class="{validate:{required:true}}" placeholder="MenuType" name="menuType">
                                        <option id='REGULAR_MENU'>Regular Menu</option>
                                        <option id='BEST_MENU'>Best Menu</option>
                                        <option id='SPECIAL_MENU'>Special Menu</option>
                                    </select>

                                    <input type="submit" class="button blue" value="Select" onclick="saveBestMenu()" />

                                </p
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
            </div>
        </div>
    </section>
  </body>
</html>