<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url("assets/admin/css/bootstrap.css") ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url("assets/admin/css/font-awesome.css") ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url("assets/admin/css/custom.css") ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="<?= base_url("assets/admin/js/jquery-1.10.2.js") ?>" ></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  

</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src=<?= base_url("assets/admin/img/logo.png") ?> style="height:80px;width:113px;margin-top:-16px;" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="<?= base_url('admin/logout') ?>" class="btn btn-info btn-sm btn-xs" style="color:#fff;">Logout</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                
                   
                    <li>
                        <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-edit "></i>Booking </a>
                    </li>

                    
					
		

                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->