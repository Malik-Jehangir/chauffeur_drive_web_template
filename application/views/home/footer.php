<!--Footer Content Start-->
<section class="tj-footer"  style="background-color:#ff8900;">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-widget widget">
								<h3 style="color:black;">About Vactransfer</h3>
								<p style="color:black;text-align:justify;">Vac Transfer offers the airport transfer service equipped with high quality standards and professional drivers so that you can enjoy safe and comfortable travel. Vac Transfer carries out tourism-transports and all transfer services like from airport to the hotel, from hotel to the airport or daily tour organization etc., with Mercedes Vito, Mercedes Sprinter, Mercedes S-Class and other vehicles in the luxury segment.</p>
								<ul class="fsocial-links">
									<li  style="color:black;"><a  style="color:black;" href="https://www.facebook.com/vactransfer"><i class="fa fa-facebook-f"></i></a></li>
									<li  style="color:black;"><a  style="color:black;" href="https://www.instagram.com/vac_transfer"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="links-widget widget">
								<h3 style="color:black;">Explore Links</h3>
								<ul class="flinks-list">
									<li  style="color:black;"><i class="fa fa-folder-open" aria-hidden="true"></i>
<a  style="color:black;" href="">Sitemap</a></li>
									<li  style="color:black;"><i class="fa fa-folder-open" aria-hidden="true"></i>
<a  style="color:black;" href="">Terms</a></li>
									<li  style="color:black;"><i class="fa fa-folder-open" aria-hidden="true"></i>
<a  style="color:black;" href="">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="recent-tweets widget">
								<h3 style="color:black;">Recent Features</h3>
								<div>
								<p style="color:black;"> Vac Transfer is an innovative and dynamic company that brings its customers together with the most affordable transport services by putting quality, comfort and hygiene standards in the foreground. Vac Transfer has all the necessary transportation and operational documents for you to have a safe travel experience. We offer an additional insurance service for each passenger.</p></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-info widget">
								<h3 style="color:black;">Contact Info</h3>
								<ul class="contact-box">
									<li  style="color:black;">
									<i class="fa fa-home" aria-hidden="true"></i>
Vactransfer, Antalya, Turkey.
									</li>
									<li  style="color:black;">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<a  style="color:black;" href="info@vactransfer.com">
										info@vactransfer.com</a>
									</li>
									<li  style="color:black;">
										<i class="fa fa-phone" aria-hidden="true"></i>
										+1-333-444-555
									</li>
									<li  style="color:black;">
									<i class="fa fa-globe" aria-hidden="true"></i>
										<a  style="color:black;" href="www.vactransfer.com">www.vactransfer.com</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Footer Content End-->
			<!--Footer Copyright Start-->
			<section class="tj-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p>&copy; Copyrights 2021 <a href="http://localhost/vactransfer/">Vactransfer</a>. All Rights Reserved.</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="payment-icons">
								<li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
								<li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
								<li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
								<li><i class="fa fa-cc-discover" aria-hidden="true"></i></li>
								<li><i class="fa fa-cc-jcb" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--Footer Copyright End-->
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src=<?= base_url("assets/js/jquery-1.12.5.min.js") ?>></script>
		<script src=<?= base_url("assets/js/bootstrap.min.js") ?>></script> 
		<script src=<?= base_url("assets/js/migrate.js") ?>></script>  
		<script src=<?= base_url("assets/js/owl.carousel.min.js") ?>></script>	
		<script src=<?= base_url("assets/js/color-switcher.js") ?>></script>	
		<script src=<?= base_url("assets/js/jquery.counterup.min.js") ?>></script>	
		<script src=<?= base_url("assets/js/waypoints.min.js") ?>></script>
		<script src=<?= base_url("assets/js/tweetie.js") ?>></script>
		<script src=<?= base_url("assets/js/custom.js") ?>></script>
		<!-- Js Files End --> 
	</body>
</html>
<script>
$(document).ready(function(){
				$('#pick_loc').keyup(function(){
					var query=$('#pick_loc').val();
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcall",
							method:"post",
						
							data:{query:query},
							success:function(data){
								$('#routeList').fadeIn();
								$('#routeList').html(data);
							}
						});
					}
					else{
								$('#routeList').fadeOut();
								$('#routeList').html("");
					}
				});
				$(document).on('click','#routeList>ul>li',function(){
			
					$('#pick_loc').val($(this).text());
					$('#routeList').fadeOut();

				});
			});
    </script>
<script>
$(document).ready(function(){
				$('#drop_loc').keyup(function(){
					var query=$('#drop_loc').val();
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcalle",
							method:"post",
						
							data:{query:query},
							success:function(data){
								$('#routeList2').fadeIn();
								$('#routeList2').html(data);
							}
						});
					}
					else{
								$('#routeList2').fadeOut();
								$('#routeList2').html("");
					}
				});
				$(document).on('click','#routeList2>ul>li',function(){
			
					$('#drop_loc').val($(this).text());
					$('#routeList2').fadeOut();

				});
			});
    </script>
<script>
$(function(){

   $('#btn1').click(function(){
	$('#user').val($('#username_label').val())
	//alert($('#user').val());
    
	if($('#user').val()==''){
			document.getElementById("vehicles").style.display= "block";

			$('#vehicles2').remove();
	}
	else {
		    document.getElementById("vehicles2").style.display= "block";

			$('#vehicles').remove();

	}



	var w= document.getElementById("sp");
	w.style.display = "block";

	if($('#pick_loc').val().indexOf('AIRPORT')!=-1){
		var x = document.getElementById("booking_table_details_1");
		x.style.display = "block";
	}
	else if($('#drop_loc').val().indexOf('AIRPORT')!=-1){
		var x = document.getElementById("booking_table_details_2");
		x.style.display = "block";
	}
	else{
		var x = document.getElementById("booking_table_details_3");
	    x.style.display = "block";
	}

   })

})
</script>
<script>
$(document).ready(function(){
	$('#btn1').click(function(){
					var query=$('#pick_loc').val();
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcallv",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#vehicles').fadeIn();
								$('#vehicles').html(data);
							}
						});
					}
					else{
								$('#vehicles').fadeOut();
								$('#vehicles').html("");
					}
				});
				$(document).on('click','#vehicles>ul>li',function(){
			
					alert($(this).text());

				});
			});
    </script>


<script>
$(document).ready(function(){
	$('#btn1').click(function(){
					var query=$('#pick_loc').val();
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcallvagency",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#vehicles2').fadeIn();
								$('#vehicles2').html(data);
							}
						});
					}
					else{
								$('#vehicles2').fadeOut();
								$('#vehicles2').html("");
					}
				});
				$(document).on('click','#vehicles2>ul>li',function(){
			
					alert($(this).text());

				});
			});
    </script>




<script>
function GFG_click(clicked) { 

	var property = document.getElementById(clicked);
	if(property.style.backgroundColor != "#4CAF50" && property.style.color != "#FFFFFF"){
		property.style.backgroundColor = "#4CAF50";
		property.style.color = "#FFFFFF"
		var x = document.getElementById("vehicles");
	    x.style.display = "none";
		var y = document.getElementById("vehiclesHidden");
	    y.style.display = "block";
		var z = document.getElementById("booking_extras_table");
	    z.style.display = "block";
		var a = document.getElementById("booking_extras_table1");
	    a.style.display = "block";
		var b = document.getElementById("booking_extras_table2");
	    b.style.display = "block";
		var d = document.getElementById("btnSubmit");
	    d.style.display = "block";
	}
					var query=clicked;
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcallvlist",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#vehiclesHidden').fadeIn();
								$('#vehiclesHidden').html(data);
								//alert("Dont worry it is working");
							}
						});
					}
					else{
								$('#vehiclesHidden').fadeOut();
								$('#vehiclesHidden').html("");
					}
};
</script>


<script>
function GFG_Add() { 

	
		var x = document.getElementById("billing_r6");
	    x.style.display = "none";
		
		
};
</script>




<script>
function GFG_click2(clicked) { 
	//alert('You clicked button with ID:' + clicked);

	var property = document.getElementById(clicked);
	if(property.style.backgroundColor != "#4CAF50" && property.style.color != "#FFFFFF"){
		property.style.backgroundColor = "#4CAF50";
		property.style.color = "#FFFFFF"
		var x = document.getElementById("vehicles2");
	    x.style.display = "none";
		var y = document.getElementById("vehiclesHidden2");
	    y.style.display = "block";
		var z = document.getElementById("booking_extras_table");
	    z.style.display = "block";
		var a = document.getElementById("booking_extras_table1");
	    a.style.display = "block";
		var b = document.getElementById("booking_extras_table2");
	    b.style.display = "block";
		var d = document.getElementById("btnSubmit");
	    d.style.display = "block";
	}
					var query=clicked;
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcallvlist2",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#vehiclesHidden2').fadeIn();
								$('#vehiclesHidden2').html(data);
								//alert("Dont worry it is working");
							}
						});
					}
					else{
								$('#vehiclesHidden2').fadeOut();
								$('#vehiclesHidden2').html("");
					}
};
</script>
<script>
$(function(){

   $('#btnLog').click(function(){
	
		var x = document.getElementById("logme");
		x.style.display = "block";

		var y = document.getElementById("btnLog");
		y.style.display = "none";
   })

})
</script>
<script>
$(document).ready(function(){
	$('#btnLog1').click(function(){
		var x = document.getElementById("username");
		x.style.display = "none";
		var y = document.getElementById("password");
		y.style.display = "none";
		var z = document.getElementById("btnLog1");
		z.style.display = "none";
					var query=$('#username').val();
					if(query!=''){
						$.ajax({
							url:"<?= base_url() ?>"+"home/ajaxcalllog",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#logme').fadeIn();
								$('#logme').html(data);
							}
						});
					}
					else{
								$('#logme').fadeOut();
								$('#logme').html("");
					}
				});
				
			});
    </script>


<script>
function GFG_logout(clicked) { 
	location.reload();


};
</script>