<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
<?php include '../layout/head.php';?>
   
    <body class="mod-bg-1 ">
        <!-- DOC: script to save and load page settings -->
        <?php include '../layout/script_atas.php';?>
        
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <?php include '../layout/aside.php';?>
                
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <?php include '../layout/header.php';?>
                    
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main   id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Profile</a></li>
                            <!-- <li class="breadcrumb-item">Statistics</li>
                            <li class="breadcrumb-item active">Chartist.js</li> -->
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            
                                            <div class="row">
                                                
                                                <div class="col-xl-6 order-1 order-xl-1">
                                                    <div class="card mb-g rounded-top">
                                                        <div class="row no-gutters row-grid">
                                                            <div class="col-12">
                                                                <div class="d-flex flex-column align-items-center justify-content-center p-4">
                                                                    <img src="../img/demo/avatars/avatar-admin-lg.png" class="rounded-circle shadow-2 img-thumbnail" alt="">
                                                                    <h5 class="mb-0 fw-700 text-center mt-3">
                                                                        Admin Silika
                                                                        <small class="text-muted mb-0">Cililitan, Kramatjati</small>
                                                                    </h5>
                                                                    <div class="mt-4 text-center demo">
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#3b5998">
                                                                            <i class="fab fa-facebook"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#38A1F3">
                                                                            <i class="fab fa-twitter"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#db3236">
                                                                            <i class="fab fa-google-plus"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#0077B5">
                                                                            <i class="fab fa-linkedin-in"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#000000">
                                                                            <i class="fab fa-reddit-alien"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#00AFF0">
                                                                            <i class="fab fa-skype"></i>
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="fs-xl" style="color:#0063DC">
                                                                            <i class="fab fa-flickr"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="text-center py-3">
                                                                    <h5 class="mb-0 fw-700">
                                                                        764
                                                                        <small class="text-muted mb-0">Connections</small>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="text-center py-3">
                                                                    <h5 class="mb-0 fw-700">
                                                                        1,673
                                                                        <small class="text-muted mb-0">Followers</small>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="p-3 text-center">
                                                                    <a href="javascript:void(0);" class="btn-link font-weight-bold">Follow</a> <span class="text-primary d-inline-block mx-3">&#9679;</span>
                                                                    <a href="javascript:void(0);" class="btn-link font-weight-bold">Message</a> <span class="text-primary d-inline-block mx-3">&#9679;</span>
                                                                    <a href="javascript:void(0);" class="btn-link font-weight-bold">Connect</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 order-2 order-xl-1">
                                                    <div class="form-group">
                                                        <label for="pushSettings_input">
                                                            <strong><h3>Data Pribadi</h3></strong>
                                                        </label>
                                                        <div class="input-group">
                                                            <!-- <input type="text" id="pushSettings_input" list="css_list" name="pushSettings_input" class="form-control" placeholder="e.g. header-function-fixed nav-function-fixed"> -->
                                                            <datalist id="css_list">
                                                                <option value="header-function-fixed">
                                                                <option value="nav-function-fixed">
                                                                <option value="nav-function-minify">
                                                                <option value="nav-function-hidden">
                                                                <option value="nav-function-top">
                                                                <option value="mod-main-boxed">
                                                                <option value="nav-mobile-push">
                                                                <option value="nav-mobile-no-overlay">
                                                                <option value="nav-mobile-slide-out">
                                                                <option value="mod-bigger-font">
                                                            </datalist>
                                                            <!-- <div class="input-group-append">
                                                                <button class="btn btn-secondary btn-w-m" type="button" id="pushSettings_btn">push()</button>
                                                            </div>
                                                        </div> -->
                                                        <div class="help-block">
                                                            <strong><h6>Nama Ketua RT : Dinas Lingkungan Hidup</h6></strong>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                       
                                                        <div class="help-block">
                                                            <h6>No Telp : 08123456789</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Jumlah Kepala Keluarga : 100 KK</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Luas RW (m2)</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Kota/Kabupaten : Jakarta Timur</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Kelurahan : MAndalan V</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Kecamatan : Kramatjati</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>RW : 02</h6>
                                                        </div>                                                        
                                                    </div>
                                                    <!-- <label for="pushSettings_input">
                                                        <strong><h3>Pengurus</h3></strong>
                                                    </label>
                                                    <div class="form-group">                                                       
                                                        <div class="help-block">
                                                            <h6>Ketua RW : H. Suradal Dwi Atmoko</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Sekretaris	 : Ardi Dirgantoro</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Bendahara	 : Fransisca Rina Setianingsih</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Pemuda	 : Priyo Susanto</h6>
                                                        </div>
                                                        <div class="help-block">
                                                            <h6>Ketua RT : Jaeni</h6>
                                                        </div>
                                                        
                                                    </div> -->
                                                    
                                                    <hr class="my-5">
                                                    <button class="btn btn-outline-danger mr-1" type="button" data-action="app-reset">Edit</button>
                                                    <button class="btn btn-outline-success" type="button" id="ng_eventlog_clear">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </main>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                    <?php include '../layout/footer.php';?>
                    
                    <!-- END Page Footer -->
                    <!-- BEGIN Shortcuts -->
                    <!-- modal shortcut -->
                    <?php include '../layout/modal_shorcuts.php';?>
                    <!-- END Shortcuts -->
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <!-- BEGIN Quick Menu -->
        <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
        <?php include '../layout/quick_menu.php';?>
        
        <!-- END Quick Menu -->
        <!-- BEGIN Messenger -->
        <?php include '../layout/Messenger.php';?>
         <!-- END Messenger -->
        <!-- BEGIN Page Settings -->
        <?php include '../layout/Settings.php';?>
        <!-- END Page Settings -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src//jquery-snippets.js (core) -->
                        <?php include '../layout/script.php';?>
                        
    </body>
</html>
