<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/logo uniga.png" type="image" />

    <title>Aplikasi Perpustakaan</title>

    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="index.php" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">APLIKASI PERPUSTAKAAN</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil.php">Tampil Data</a></li>
                      <li><a href="index.php?page=tambah-proses.php">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Data Buku <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tampil-buku.php">Tampil Data</a></li>
                      <li><a href="index.php?page=tambah-buku-proses.php">Tambah Data</a></li>
                    </ul>
                </ul>
              </div>
            </div>

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>

          </div>
        </div>

        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/user.png" alt="">Intan Tiara Sani
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'tampil.php':
      		# code...
      		include 'tampil.php';
      		break;
      	case 'tambah-proses.php':
      		# code...
      		include 'tambah.php';
      		break;
        case 'update.php':
        		# code...
        	include 'edit.php';
        	break;
        case 'tampil-buku.php':
          # code...
          include 'tampil-buku.php';
          break;
        case 'tambah-buku-proses.php':
          # code...
          include 'tambah-buku.php';
          break;
        case 'update-buku.php':
            # code...
          include 'edit-buku.php';
          break;      
        default:
		          #code...
		      include 'home.php';
		      break;
        }
        ?>
        </div>
     
        <footer>
          <div class="pull-right">
            APLIKASI PERPUSTAKAAN
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>


    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <script src="assets/nprogress/nprogress.js"></script>
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/iCheck/icheck.min.js"></script>
    <script src="assets/skycons/skycons.js"></script>
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>
