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
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <!-- <li class="breadcrumb-item">Statistics</li>
                            <li class="breadcrumb-item active">Chartist.js</li> -->
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>

                        <div class="row">
                            <div class="col-sm-6 col-xl-2">
                                <div class="p-3 bg-primary-600 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <small class="m-0 l-h-n">Jumlah WR Skala SPPL</small>                                      
                                        </h3>
                                        <h1 >
                                            500                                     
                                        </h1>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-2">
                                <div class="p-3 bg-warning-600 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <small class="m-0 l-h-n">Jumlah WR Rumah Tinggal</small>
                                                                                     
                                        </h3>
                                        <h1 >
                                        500                                    
                                        </h1>
                                    </div>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-2">
                                <div class="p-3 bg-success-600 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <small class="m-0 l-h-n">Jumlah Pengajuan Pengujian Lab</small>
                                                                                       
                                        </h3>
                                        <h1 >
                                        181                                   
                                        </h1>
                                    </div>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-2">
                                <div class="p-3 bg-info-600 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <small class="m-0 l-h-n">Jumlah E-SPJ yang dibuat</small>
                                                                                       
                                        </h3>
                                        <h1 >
                                        56                                  
                                        </h1>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-2">
                                <div class="p-3 bg-danger-600 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <small class="m-0 l-h-n">Jumlah Pendapatan</small>
                                                                                      
                                        </h3>
                                        <h1 >
                                        Rp150.000.000                                 
                                        </h1>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-xl-3">
                                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                    <small class="m-0 l-h-n">Target Retribusi Bulan Juli</small>
                                </h3>
                                <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                            <ul>
                                  1 - 10 Juli * Pembayaran
                            </ul>
                            <ul>
                                  1 - 10 juli * Cetak stackedBa
                            </ul> 
                            <ul>    
                                  1 - 20 Juni * Rekapitulasi
                            </ul>
                            <ul>
                                21 - 30 Juni * Update Profile
                            </ul>                                
                                </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Retribusi Perbulan
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content bg-subtlelight-fade">
                                            <div id="js-checkbox-toggles" class="d-flex mb-3">
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" name="gra-0" id="gra-0" checked="checked">
                                                    <label class="custom-control-label" for="gra-0">Per Hari</label>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" name="gra-1" id="gra-1" checked="checked">
                                                    <label class="custom-control-label" for="gra-1">Bulan</label>
                                                </div>
                                                <div class="custom-control custom-switch mr-2">
                                                    <input type="checkbox" class="custom-control-input" name="gra-2" id="gra-2" checked="checked">
                                                    <label class="custom-control-label" for="gra-2">Tahun</label>
                                                </div>
                                            </div>
                                            <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div>
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
