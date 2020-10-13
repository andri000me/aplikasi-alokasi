<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />

    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
    
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
      <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <a href="index.html" class="navbar-brand">
            <small>
              Sistem Alokasi Bantuan Logistik Penanggulangan Bencana
            </small>
          </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">
            <li class="light-blue dropdown-modal">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <span class="user-info">
                  <small>Selamat datang,</small>
                  <?php echo $this->session->userdata('name'); ?>
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a href="<?php echo base_url();?>auth/logout">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
          try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <h1>
              MENU
            </h1>
          </div>
        </div><!-- /.sidebar-shortcuts -->

        <?php $this->load->view('v_menuadmin'); ?>
      </div>
    </div>

      <div class="main-content">
<form class="form-horizontal form-material" action="" method="post">
            <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                  <div class="col-md-6">
                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Posko</label>
                                            <input type="text" name="nm_posko" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Kondisi</label>
                                            <input type="text" name="kondisi" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Alamat Posko</label>
                                            <input type="text" name="alamat_posko" class="form-control form-control-line" value="">
                                        </div>                    
                                    </div>


                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Korban</label>
                                            <input type="text" name="jumlah_korban" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>



                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Latitude</label>
                                            <input type="text" name="latitude" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Longitude</label>
                                            <input type="text" name="longitude" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Jenis Bantuan</label>
                                            <input type="text" name="jenis_bantuan" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Bantuan</label>
                                            <input type="text" name="jumlah_bantuan" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Alokasi</button>
                                        </div>
                                    </div>

                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>



                                    
        </form>
      </div>
                        

  <script src="<?php echo base_url()?>js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()?>js/popper.min.js"></script>
  <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>js/aos.js"></script>
  <script src="<?php echo base_url()?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url()?>js/scrollax.min.js"></script>
  <script src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url()?>js/google-map.js"></script>
  <script src="<?php echo base_url()?>js/main.js"></script>
    
  </body>
</html>
       
          
      <div class="footer">
        <div class="footer-inner">
          <div class="footer-content">
            <span class="bigger-120">
              <span class="blue bolder">BPBD Kota Bandar Lampung</span>
            </span>
          </div>
        </div>
      </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sparkline.index.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
    
  </body>
</html>

