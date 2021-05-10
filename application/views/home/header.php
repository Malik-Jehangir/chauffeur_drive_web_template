<!DOCTYPE html>

<html lang="en">
    <head>
	<style>
html {
  scroll-behavior: smooth;
}</style>
        <meta charset="utf-8">
        <meta name="description" content="Prime Cab HTML5 Responsive Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VAC Transfer</title>
		<link rel = "shortcut icon" href = <?=base_url("assets/images/favicon.ico")?>>
        <!-- Css Files Start -->
		<link href=<?=base_url("assets/css/bootstrap.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/style.css")?> rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link id="switcher" href=<?=base_url("assets/css/color.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/color-switcher.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/owl.carousel.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/responsive.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/icomoon.css")?> rel="stylesheet">
		<link href=<?=base_url("assets/css/animate.css")?> rel="stylesheet">
		 <!-- jQuery UI CSS -->
		 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<!-- Css Files End -->

		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
<!-- Script -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- jQuery UI -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

	<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
   
    </head>
	<body>
		<!--Wrapper Content Start-->
		<div class="tj-wrapper">
			<div class="loader-outer">
				<div class="tj-loader">
					<img src=<?=base_url("assets/images/pre-loader.gif")?> style="text-align:center" alt="">
					<h2>Loading...</h2>
				</div>
			</div>
			<header class="tj-header">
				<!--Header Content Start-->
				<div class="container">
					<div class="row">
						<!--Toprow Content Start-->
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!--Logo Start-->
							<div>
								<h1><a href="https://www.vactransfer.com/"><img src=<?=base_url("assets/images/logo-border.png")?> style="width:10; height:10;"></a></h1>
							</div>
							<!--Logo End-->
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="info_box">
								<i class="fa fa-home"></i>
								<div class="info_text">
									<span class="info_title">Address</span>
									<span>Vactransfer, Turkey</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="info_box">
								<i class="fa fa-envelope"></i>
								<div class="info_text">
									<span class="info_title">Email Us</span>
									<span><a href="mailto:primecab@booking.com">info@vactransfer.com</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="phone_info">
								<div class="phone_icon">
									<i class="fa fa-cog fa-spin"></i>
								</div>
								<div class="phone_text">
									<span><a href="tel:1-234-000-2345">+1-234-000-2345</a></span>
								</div>
							</div>
						</div>
						<!--Toprow Content End-->
					</div>
				</div>

				<div class="tj-nav-row">
					<div class="container">
						<div class="row">
							<!--Nav Holder Start-->
							<div class="tj-nav-holder">
								<!--Menu Holder Start-->
								<nav class="navbar navbar-default">
									<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false">
										  <span class="sr-only">Menu</span>
										  <span class="icon-bar"></span>
										  <span class="icon-bar"></span>
										  <span class="icon-bar"></span>
									  </button>
									</div>
									<!-- Navigation Content Start -->
									<div class="collapse navbar-collapse" id="tj-navbar-collapse">
									  <ul class="nav navbar-nav">
										
										<li>
											<!--<a href="<?= base_url('aboutus') ?>">About us</a>-->
											<a href="#section1">About us</a>
										</li>
										
										<li>
											<a href="#section2">Our Services</a>
										</li>
									
									
									  </ul>
									</div>
									<!-- Navigation Content Start -->
								</nav>
								<!--Menu Holder End-->
								<div class="book_btn">
									<button type="button" style="width:100px; height:50px;margin-top:3px;background-color:#ff8900;color:black;"  class="form-control" id="btnLog" name="btnLog" >Login</button>
									<div class="row" style="display:none;" id="logme">
  									<div class="column" style="width:100px;position:absolute; left:933px;display: inline-block;"><input type="text" style="width:100px; height:50px;margin-top:3px;" id="username" name="username"  class="form-control" placeholder="Email"/></div>
  									<div class="column" style="width:100px;display: inline-block;"><input type="password" minlength="8" style="width:100px; height:50px;margin-top:3px;" id="password" name="password"  class="form-control" placeholder="Password"/></div>
									<div class="column" style="width:100px;position:absolute;display: inline-block;margin-left:3px;"><button type="button" style="width:100px;background-color:#ff8900;height:50px;margin-top:3px;color:black;" id="btnLog1" name="btnLog1"  class="form-control">Sign-in</button></div>
									</div>
								</div>
								
							</div><!--Nav Holder End-->
						</div>
					</div>
				</div>
			</header>
			<!--Header Content End-->



