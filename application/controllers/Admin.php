<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('cars_model');
        //$this->load->model('admins_model');

        $admin = $this->session->userdata('admin_id');
        if (!$admin) {
            $this->session->set_flashdata("errormessage", 'Please login to access the AdminPanel');
            redirect("adminauth/login");
        }
    }

    public function index() {
        $admin = $this->session->userdata('admin_id');
        if (!$admin) {
            $this->session->set_flashdata("errormessage", 'Please login to access the AdminPanel');
            redirect("adminauth/login");
        } else {
            redirect(base_url('admin/dashboard'));
        }
    }

    public function dashboard() {

        $query=$this->db->query("SELECT * FROM vac_bookings");
			$result=$query->result();
            
$data['cars']=$result;

        $this->load->view('admin/header');
        // $this->load->view('admin/home');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }


    function ajaxcallAll(){
	
        $returndata=$this->fetch_alldata();
		echo $returndata;
		die;
		
	}


    public function fetch_alldata(){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM vac_bookings");
			$result=$query->result();
			$output='<table class="tg">
            <thead> <tr>
            <th class="tg-0pky">Booking ID</th>
            <th class="tg-0pky">Pick Up Location</th>
            <th class="tg-0pky">Drop off Location</th>
            <th class="tg-0pky">Pick Up Date</th>
            <th class="tg-0pky">To</th>
            <th class="tg-0pky">From</th>
            <th class="tg-0pky">Flight Number</th>
            <th class="tg-0pky">Arrival Time</th>
            <th class="tg-0pky">Vehicle Name</th>
            <th class="tg-0lax">Vehicle Company</th>
            <th class="tg-0lax">No. of Passengers</th>
            <th class="tg-0lax">No. of Bags</th>
            <th class="tg-0lax">Total Price</th>
            <th class="tg-0lax">Extra Baby</th>
            <th class="tg-0lax">Extra Booster</th>
            <th class="tg-0lax">Extra Cradle</th>
            <th class="tg-0lax">Customer Name</th>
            <th class="tg-0lax">Customer Email</th>
            <th class="tg-0lax">Customer Address</th>
            <th class="tg-0lax">Customer Comments</th>
            <th class="tg-0lax">Customer Telephone</th>
            <th class="tg-0lax">Payment Method</th>
            <th class="tg-0lax">Agency</th>
            <th class="tg-0lax">Booking Status</th>
          </tr>';
			if($result){
				foreach( $result as $row )
				{

                    
					
					$output .= '
                      <tr>
                        <th class="tg-0pky">'.$row->booking_id.'</th>
                        <th class="tg-0pky">'.$row->pick_from.'</th>
                        <th class="tg-0pky">'.$row->drop_to.'</th>
                        <th class="tg-0pky">'.$row->pick_date.'</th>
                        <th class="tg-0pky">'.$row->to_details.'</th>
                        <th class="tg-0pky">'.$row->from_details.'</th>
                        <th class="tg-0pky">'.$row->flight_number.'</th>
                        <th class="tg-0pky">'.$row->arrival_time.'</th>
                        <th class="tg-0pky">'.$row->vehicle_name.'</th>
                        <th class="tg-0lax">'.$row->vehicle_company_name.'</th>
                        <th class="tg-0lax">'.$row->no_of_passengers.'</th>
                        <th class="tg-0lax">'.$row->no_of_bags.'</th>
                        <th class="tg-0lax">'.$row->total_price.'</th>
                        <th class="tg-0lax">'.$row->baby_extra.'</th>
                        <th class="tg-0lax">'.$row->booster_extra.'</th>
                        <th class="tg-0lax">'.$row->cradle_extra.'</th>
                        <th class="tg-0lax">'.$row->customer_name.'</th>
                        <th class="tg-0lax">'.$row->customer_email.'</th>
                        <th class="tg-0lax">'.$row->customer_address.'</th>
                        <th class="tg-0lax">'.$row->customer_telephone.'</th>
                        <th class="tg-0lax">'.$row->customer_comments.'</th>
                        <th class="tg-0lax">'.$row->payment_method.'</th>
                        <th class="tg-0lax">'.$row->agency.'</th>
                        <th class="tg-0lax">'.$row->booking_status.'</th>
                      </tr>
                    </thead>
                    </table>';
					
				}
			}
			else{
				$output .= '<li>Vehicles not found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }




public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata("successmessage", 'Successfully logged out');
        redirect(base_url('admin'));
    }
}