<div class="footer">
      
    
	  <div class="row">
		  <div class="col-lg-12" >
			  &copy;  2021 Vactransfer
		  </div>
	  </div>
  </div>
	

<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<!-- <script src="<?= base_url("assets/admin/js/jquery-1.10.2.js") ?>" ></script> -->
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url("assets/admin/js/bootstrap.min.js") ?>" ></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?= base_url("assets/admin/js/custom.js") ?>" ></script>

<script>
$(document).ready(function(){

	
						$.ajax({
							url:"<?= base_url() ?>"+"admin/ajaxcallAll",
							method:"post",
							data:{query:query},
							success:function(data){
								$('#admin_data').fadeIn();
								$('#admin_data').html(data);
							}
						});
					
					else{
								$('#admin_data').fadeOut();
								$('#admin_data').html("");
					}
				
				
			});
    </script>

</body>
</html>