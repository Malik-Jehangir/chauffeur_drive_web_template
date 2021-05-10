<!--Header Banner Content Start-->
<form method="POST" class="trip-type-frm" action="<?php echo base_url('home/insertForDB')?>">
<section class="tj-banner-form">

				<div class="container">
					<div class="row">
						<!--Header Banner Caption Content Start-->
						<div class="col-md-8 col-sm-7">
							<div class="banner-caption">
								<div class="banner-inner bounceInLeft animated delay-2s">
									<strong>Vactransfer services offers cheap prices for your trips</strong>
									<h2>Book your transfer now and explore our services to enjoy from the best</h2>
									
								</div>
							</div>
						</div>
						<!--Header Banner Caption Content End-->
						<!--Header Banner Form Content Start-->
						<div class="col-md-4 col-sm-5">
							<div class="trip-outer">
								<div class="trip-type-tabs">
									<!--<ul class="nav nav-tabs">
										<li class="active"><a href="#one-way" data-toggle="tab">One Way</a></li>
										<li><a href="#two-way" data-toggle="tab">Two Way</a></li>
									</ul>-->
								</div>


								<!--Banner Tab Content Start-->
								<div class="tab-content">
									<div class="tab-pane active" id="one-way">
										<!--Banner Form Content Start-->
										
											<div class="field-outer">
											<h4 style="text-align:center;">Welcome to Vac Transfer</h4>
											<br />
												<input type="text" name="pick_loc" id="pick_loc" placeholder="Pickup Location">
											    <div id="routeList"></div>
											</div>
											<div class="field-outer">
												<input type="text" name="drop_loc" id="drop_loc" placeholder="Drop Location">
												<div id="routeList2"></div>
											</div>
											<div class="field-outer" style=" margin-top: 20px;">
											<p>Select pick up date</p>
												<input type="date"  class="form-control" value="<?php echo date("d/m/Y"); ?>" name="pick_date" id="pick_date">
											</div>
										
											<div class="field-outer">
												<input type="checkbox" name="promo_code" id="promo_code">
												<label for="promo_code">I Have Promotional Code</label>
											</div>
											
											
											<button type="button" id="btn1" style="background-color:#ff8900; font-weight:bold; color:white;" class="search-btn">Search Cabs <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>	

								
									
										<!--Banner Form Content End-->
									</div>
								</div>
								<!--Banner Tab Content End--> 
							</div>
						</div>
						<!--Header Banner Form Content End-->
					</div>
				</div>
			</section>
			<!--Header Banner Content End-->
			<input type="hidden" name="user" id="user"  value="empty">
			<input type="hidden" name="book_status" id="book_status"   value="pending" >

<div class="container">	
			<p name="sp" id="sp"  style="display:none;">&nbsp;</p>
			<div class="field-outer" style="text-align:center;display:none;" name="booking_table_details_1" id="booking_table_details_1">
			<h2 style="text-align:center;">Booking Details</h2>
			<p>&nbsp;</p>
			<table class="table">
									<tr>
										<td><input class="form-control" type="text" name="to_loc[]" id="to_loc" placeholder="To"/>
</td>
										<td><input class="form-control" type="text" name="fli_num[]" id="fli_num" placeholder="Flight Number"/>
</td>
										<td><input class="form-control" type="time" name="arrival_time[]" id="arrival_time"/></td>
									</tr>
								</table>
								<p>&nbsp;</p>
		</div>		
		<div class="field-outer"style="text-align:center;display:none;" name="booking_table_details_2" id="booking_table_details_2">
			<h2 style="text-align:center;">Booking Details</h2>
			<p>&nbsp;</p>
			<table class="table">
									<tr>
										<td><input type="text" class="form-control" name="from_loc[]" id="from_loc" placeholder="From"/>
</td>
										<td><input type="text" class="form-control" name="fli_num[]" id="fli_num" placeholder="Flight Number"/>
</td>
										<td><input class="form-control" type="time" name="arrival_time[]" id="arrival_time"/></td>
									</tr>
								</table>
								<p>&nbsp;</p>
		</div>		
		<div class="field-outer" style="text-align:center;display:none;" name="booking_table_details_3" id="booking_table_details_3">
			<h2 style="text-align:center;">Booking Details</h2>
			<p>&nbsp;</p>
			<table class="table">
									<tr>
										<td><input type="text" class="form-control" name="from_loc[]" id="from_loc" placeholder="From"/>
</td>
										<td><input type="text" class="form-control" name="to_loc[]" id="to_loc" placeholder="To"/>
</td>
										<td><input class="form-control" type="time" name="arrival_time[]" id="arrival_time"/></td>
									</tr>
								</table>
								<p>&nbsp;</p>

								
		</div>		
		<div name="vehicles" id="vehicles" style="display:none;"></div>
		<div name="vehicles2" id="vehicles2"  style="display:none;"></div>
		<div name="vehiclesHidden" id="vehiclesHidden" style="display:none; margin: auto;width: 50%;padding: 10px;"></div>
		<div name="vehiclesHidden2" id="vehiclesHidden2" style="display:none; margin: auto;width: 50%;padding: 10px;"></div>


		<div class="field-outer" style="text-align:center;display:none;margin-top:80px;" name="booking_extras_table" id="booking_extras_table">
			<h2 style="text-align:center;">Booking Extras</h2>
			<p>&nbsp;</p>
			<div class="book_btn">
									<div class="row" id="extra_r1">
  									<div class="column" style="display: inline-block;width:340px;"><h2>Service Name</h2></div>
  									<div class="column" style="display: inline-block;width:340px;"><h2>Options</h2></div>
									<div class="column" style="display: inline-block;width:340px;"><h2>Price</h2></div>
									</div>
									<div class="row" id="extra_r2">
  									<div class="column" style="text-align:center;display: inline-block;width:340px;"><h4>Baby Seat (9-36 kg)</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="baby" name="baby" list="baby_seat_amount" value="0"/>
																																			<datalist id="baby_seat_amount">
																																				<option>0</option>
																																				<option>1</option>
																																				<option>2</option>
																																				<option>3</option>
																																				<option>4</option>
																																				<option>5</option>
																																			</datalist></div>
									<div class="column" style="display: inline-block;width:340px;"><h4>FREE</h4></div>
									</div>
									<div class="row" id="extra_r3">
  									<div class="column" style="text-align:center;display: inline-block;width:340px;"><h4>Booster (17-36 kg)</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" id="boos" name="boos" type="text" list="booster" value="0"/>
																																			<datalist id="booster">
																																				<option>0</option>
																																				<option>1</option>
																																				<option>2</option>
																																				<option>3</option>
																																				<option>4</option>
																																				<option>5</option>
																																			</datalist></div>
									<div class="column" style="display: inline-block;width:340px;"><h4>FREE</h4></div>
									</div>
									<div class="row" id="extra_r4">
  									<div class="column" style="text-align:center;display: inline-block;width:340px;"><h4>Cradle (0-13 kg)</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="crad" name="crad" list="cradle" value="0"/>
																																			<datalist id="cradle">
																																				<option>0</option>
																																				<option>1</option>
																																				<option>2</option>
																																				<option>3</option>
																																				<option>4</option>
																																				<option>5</option>
																																			</datalist></div>
									<div class="column" style="display: inline-block;width:340px;"><h4>FREE</h4></div>
									</div>
								</div>
		</div>	
		<div class="field-outer" style="text-align:center;display:none;margin-top:80px;" name="booking_extras_table1" id="booking_extras_table1">
			<h2 style="text-align:center;">Billing Information</h2>
			<p>&nbsp;</p>
			<div class="book_btn">
									<div class="row" id="billing_r1">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Name</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="cus_name" name="cus_name" placeholder="Enter first and last name"/></div>
								
									</div>
									<div class="row" id="billing_r2">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Email</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="cus_email" name="cus_email" placeholder="Enter email address"/></div>
									</div>
									<div class="row" id="billing_r3">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Address</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="cus_address" name="cus_address" placeholder="Enter complete address"/></div>
								
									<div class="row" id="billing_r4">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Telephone</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="cus_telephone" name="cus_telephone" placeholder="Enter contact number"/></div>
									</div>
									<div class="row" id="billing_r5">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Comments (if any)</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="cus_comments" name="cus_comments"/></div>
									</div>
								</div>
		</div>	
		</div>	
		<div class="field-outer" style="text-align:center;display:none;margin-top:80px;" name="booking_extras_table2" id="booking_extras_table2">
			<h2 style="text-align:center;">Payment Selection</h2>
			<p>&nbsp;</p>
			<table class="table" style="display:none;">
									<tr>
										<td  style="padding: 0px;"><input type="text" name="from_loc1" id="from_loc1" placeholder="From">
										</td>
										<td  style="padding: 0px;"><input type="text" name="from_loc2" id="from_loc2" placeholder="From">
										</td>
										<td style="padding: 0px;"><button type="Submit" style="position:absolute;display:none;" id="btnSubmit2" name="btnSubmit2" class="btn btn-warning">Proceed with booking <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>	
										</td>
									</tr>
								</table>


								<div class="book_btn">
									
									<div class="row" id="pay_r1">
  									<div class="column" style="text-align:left;display: inline-block;width:340px;"><h4>Choose a payment method</h4></div>
  									<div class="column" style="display: inline-block;width:340px;"><input class="form-control" type="text" id="pay" name="pay" list="pay_method"/>
																																			<datalist id="pay_method">
																																				<option>Cash</option>
																																				<option>PayPal</option>
																																				<option>Credit Card</option>
																																				<option>Bank Transfer</option>
																																			</datalist></div>
									<div class="column" style="display: inline-block;width:340px;"><button type="Submit" style="display:none;" id="btnSubmit" name="btnSubmit" class="btn btn-warning">Proceed with booking <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></div>
									<p>&nbsp;</p>
									<p>&nbsp;</p>
									</div>

									
								</div>
		</div>	
		</div>	
		
		
								</form>
</body>
</html>

			
			<!--Welcome Section Content Start-->
			<section class="tj-welcome" style="background-color:#ff8900;" id="section1">
				<div class="container">
					<div class="row">
						<!--Welcome Section Start-->
						<div class="col-md-6 col-sm-7">
							<div class="about-info">
								<div>
								<div>
						<h1 style="text-align:left;">Who we are</h1>
						</div>
								</div>
								<p style="color:black;text-align:justify;">With 30 years of experience, Vac Transfer is an innovative and dynamic company that brings its customers together with the most affordable transport services by putting quality, comfort and hygiene standards in the foreground. Vac Transfer offers the airport transfer service equipped with high quality standards and professional drivers so that you can enjoy safe and comfortable travel. Vac Transfer carries out tourism-transports and all transfer services like from airport to the hotel, from hotel to the airport or daily tour organization etc., with Mercedes Vito, Mercedes Sprinter, Mercedes S-Class and other vehicles in the luxury segment. Vac Transfer has all the necessary transportation and operational documents for you to have a safe travel experience. We offer an additional insurance service for each passenger.</p>
							</div>
						</div>
						<!--Welcome Section End-->
						<!--Welcome Section Image Box Start-->
						<div class="col-md-6 col-sm-5">
							<div class="welcome-banner">
								<img src=<?= base_url("assets/images/welcome-img.png") ?> alt=""/>
							</div>
						</div>
						<!--Welcome Section Image Box End-->
					</div>
				</div>
			</section>
			<!--Welcome Section Content End-->
			
			
			

			<!--Cab Services Section Start-->
			<section class="cab-services" id="section2">
				<div class="container">
					<div class="row">
						<!--Cab Services Heading Start-->
						<div style="margin-top:-15px;">
						<h1 style="text-align:center;margin-bottom:100px;">Our Services</h1>
						</div>
						<!--Cab Services Heading End-->
						<div class="row">
					<!--Offer Box Content Start-->
					<div class="col-md-3 col-sm-6">
						<div class="offer-box">
							<img src=<?= base_url("assets/images/offer-icon1.png") ?> alt=""/>
							<div class="offer-info">
								<h4>Best Price Guaranteed</h4>
								<p>Prices that are cheap and totally affordable.</p>
							</div>
						</div>
					</div>
					<!--Offer Box Content End-->
					<!--Offer Box Content Start-->
					<div class="col-md-3 col-sm-6">
						<div class="offer-box">
							<img src=<?= base_url("assets/images/offer-icon2.png") ?> alt=""/>
							<div class="offer-info">
								<h4>24/7 Customer Care</h4>
								<p>Customer support available during the transfers.</p>
							</div>
						</div>
					</div>
					<!--Offer Box Content End-->
					<!--Offer Box Content Start-->
					<div class="col-md-3 col-sm-6">
						<div class="offer-box">
							<img src=<?= base_url("assets/images/offer-icon3.png") ?> alt=""/>
							<div class="offer-info">
								<h4>Location Pickups</h4>
								<p>Flexibility in the avaialable location services.</p>
							</div>
						</div>
					</div>
					<!--Offer Box Content End-->
					<!--Offer Box Content Start-->
					<div class="col-md-3 col-sm-6">
						<div class="offer-box">
							<img src=<?= base_url("assets/images/offer-icon4.png") ?> alt=""/>
							<div class="offer-info">
								<h4>Easy Bookings</h4>
								<p>Easy to navigate the clear instructions during bookings.</p>
							</div>
						</div>
					</div>
					<!--Offer Box Content End-->
				</div>
						<!--Cab Services Outer End-->
					</div>
				</div>

				<p style="text-align:center;margin-top:120px;"><iframe width="560" height="315" src="https://www.youtube.com/embed/UFuVCElpFz4?&autoplay=1" frameborder="0" allowfullscreen></iframe>
			</section></p>		
			<!--Cab Services Section End-->