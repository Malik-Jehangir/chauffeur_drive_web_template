<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
				  
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome  </strong> You Have No pending Task For Today.
                        </div>
                        <div id="admin_data" name="admin_data" class="">
                        <table id="table_id" class="display">
                                    <thead>
                                        <tr>
                                        <th >Booking ID</th>
            <th >Pick Up Location</th>
            <th >Drop off Location</th>
            <th >Pick Up Date</th>
            <th >To</th>
            <th >From</th>
            <th >Flight Number</th>
            <th >Arrival Time</th>
            <th >Vehicle Name</th>
            <th >Vehicle Company</th>
            <th >No. of Passengers</th>
            <th >No. of Bags</th>
            <th >Total Price</th>
            <th >Extra Baby</th>
            <th >Extra Booster</th>
            <th >Extra Cradle</th>
            <th >Customer Name</th>
            <th >Customer Email</th>
            <th >Customer Address</th>
            <th >Customer Comments</th>
            <th >Customer Telephone</th>
            <th >Payment Method</th>
            <th >Agency</th>
            <th >Booking Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($cars as $car) { ?>
                                        <tr>
            <td><?= $car->booking_id ?></td>
            <td><?= $car->pick_from ?></td>
            <td><?= $car->drop_to ?></td>
            <td><?= $car->pick_date ?></td>
            <td><?= $car->to_details ?></td>
            <td><?= $car->from_details ?></td>
            <td><?= $car->flight_number ?></td>
            <td><?= $car->arrival_time ?></td>
            <td><?= $car->vehicle_name ?></td>
            <td><?= $car->vehicle_company_name ?></td>
            <td><?= $car->no_of_passengers ?></td>
            <td><?= $car->no_of_bags ?></td>
            <td><?= $car->total_price ?></td>
            <td><?= $car->baby_extra ?></td>
            <td><?= $car->booster_extra ?></td>
            <td><?= $car->cradle_extra ?></td>
            <td><?= $car->customer_name ?></td>
            <td><?= $car->customer_email ?></td>
            <td><?= $car->customer_address ?></td>
            <td><?= $car->customer_telephone ?></td>
            <td><?= $car->customer_comments ?></td>
            <td><?= $car->payment_method ?></td>
            <td><?= $car->agency ?></td>
            <td><?= $car->booking_status ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    </div>
                  <!-- /. ROW  --> 


                            
				 
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

        <script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>