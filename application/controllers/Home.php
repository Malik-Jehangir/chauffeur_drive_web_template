<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		die;
	}

    public function front(){

        $this->load->view('home/header');
        $this->load->view('home/home');
        $this->load->view('home/footer');
    
    }
	public function aboutus(){

		$this->load->view('home/header');
        $this->load->view('aboutus');
        $this->load->view('home/footer');
	}
 function ajaxcall(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_data($this->input->post('query'));
		echo $returndata;
		die;
		
	}

	function ajaxcalle(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_dataa($this->input->post('query'));
		echo $returndata;
		die;
		
	}

	function ajaxcallv(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_vdata($this->input->post('query'));
		echo $returndata;
		die;
		
	}

	function ajaxcallvagency(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_vdatagency($this->input->post('query'));
		echo $returndata;
		die;
		
	}

	function ajaxcallvlist2(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_vfinal2($this->input->post('query'));
		echo $returndata;
		die;
		
	}

	function ajaxcallvlist(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_vfinal($this->input->post('query'));
		echo $returndata;
		die;
		
	}
	
	function ajaxcalllog(){
	
        $this->load->model('Home_model');
        $returndata=$this->Home_model->fetch_log($this->input->post('query'));
		echo $returndata;
		die;
		
	}


	function insertForDB(){
	
        $this->load->model('Home_model');
		// print_r($this->input->post());
		// die;
		$to_details='';
		$to_loc=$this->input->post('to_loc');
		foreach($to_loc as $v){
			if(trim(!empty($v))){
				$to_details=trim($v);
				break;
			}
		}

		$from_details='';
		$from_loc=$this->input->post('from_loc');
		foreach((array)$from_loc as $x){
			if(trim(!empty($x))){
				$from_details=trim($x);
				break;
			}
		}
		 
		
		$fli_details='';
		$fli_loc=$this->input->post('fli_num');
		foreach((array)$fli_loc as $p){
			if(trim(!empty($p))){
				$fli_details=trim($p);
				break;
			}
		}
		 

			
		$ari_details='';
		$ari_loc=$this->input->post('arrival_time');
		foreach((array)$ari_loc as $q){
			if(trim(!empty($q))){
				$ari_details=trim($q);
				break;
			}
		}


        $data = array(
			"pick_from" => $this->input->post('pick_loc'),
			"drop_to" => $this->input->post('drop_loc'),
			"pick_date" => $this->input->post('pick_date'),
			"to_details" => $to_details,
			"from_details" => $to_details,
			"flight_number" => $fli_details,
			"arrival_time" => $ari_details,
			"vehicle_name" => $this->input->post('v_name'),
			"vehicle_company_name" => $this->input->post('vc_name'),
			"no_of_passengers" => $this->input->post('pass_name'),
			"no_of_bags" => $this->input->post('bag_name'),
			"total_price" => $this->input->post('price_name'),
			"baby_extra" => $this->input->post('baby'),
			"booster_extra" => $this->input->post('boos'),
			"cradle_extra" => $this->input->post('crad'),
			"customer_name" => $this->input->post('cus_name'),
			"customer_email" => $this->input->post('cus_email'),
			"customer_address" => $this->input->post('cus_address'),
			"customer_telephone" => $this->input->post('cus_telephone'),
			"customer_comments" => $this->input->post('cus_comments'),
			"payment_method" => $this->input->post('pay'),
			"agency" => $this->input->post('user'),
			"booking_status" => $this->input->post('book_status')
		);
		// print_r($data);
		$this->db->insert("vac_bookings",$data);

		redirect(base_url());
		
	}
	

	public function inserted(){
		alert("Thank you for booking with Vactransfer.Your booking confirmation is in progress..");
	}
}
