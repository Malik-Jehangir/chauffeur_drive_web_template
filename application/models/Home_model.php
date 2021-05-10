<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

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
	
    /*public function fetch_data(){

        $query= $this->db->query("SELECT * FROM routes");
        return $query->result();
    }*/

    public function fetch_data($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT pickup_route FROM routes WHERE pickup_route LIKE '%".$query."%'");
			$result=$query->result();
			$output='<ul style="list-style: none;">';
			if($result){
				foreach( $result as $row )
				{
					$output .= '<li>'.$row->pickup_route.'</li>';
				}
			}
			else{
				$output .= '<li>Location not found</li>';
			}
			$output .= '</ul>';
			echo $output;
		// }
		

    }

	public function fetch_dataa($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT dropoff_route FROM routes WHERE dropoff_route LIKE '%".$query."%'");
			$result=$query->result();
			$output='<ul style="list-style: none;">';
			if($result){
				foreach( $result as $row )
				{
					$output .= '<li>'.$row->dropoff_route.'</li>';
				}
			}
			else{
				$output .= '<li>Location not found</li>';
			}
			$output .= '</ul>';
			echo $output;
		// }
		

    }


	public function fetch_vdata($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM vehicle_list_table WHERE pick_up='".$query."'");
			$result=$query->result();
			
			if($result){
				foreach( $result as $row )
				{
					$path=base_url($row->img_url);
					$output .= '<div class="row" style="
					
					background:#eee;
					padding:5px; margin:5px;
					overflow-x: hidden;">
					<div class="col-md-3" align="center" style="font-size:20px;"><img style="height: 130px;" src="'.$path.'"/></div>
					<div class="col-md-3" align="left" style="font-size:20px;"><br /><p><i class="fa fa-car" aria-hidden="true"></i>
					
					Vehicle Name: '.$row->vehicle.'</p><p><i class="fa fa-building" aria-hidden="true"></i>
					Vehcile Company: '.$row->vehicle_company.'</p></div>
					<div class="col-md-3" align="left" style="font-size:20px;">	<br /><p><i class="fa fa-users" aria-hidden="true"></i>
				
					Passenger Capacity: '.$row->pass_capac.'</p><p><i class="fa fa-suitcase" aria-hidden="true"></i>
					Bag Capacity: '.$row->bag_capac.'</p></div>
					<div class="col-md-3" align="left" style="font-size:20px;">
					<h2 style="font-size:20px">Trip Price: €'.$row->guest_price.'</h2>
					<a type="button" onClick="GFG_click(this.id)" name="'.$row->vlist_id.'" id="'.$row->vlist_id.'" class="btn btn-warning">Select <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>	
					</div>
					</div>';
					
				}
			}
			else{
				$output .= '<li>Vehicles not found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }


	public function fetch_vdatagency($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM vehicle_list_table WHERE pick_up='".$query."'");
			$result=$query->result();
			
			if($result){
				foreach( $result as $row )
				{
					$path=base_url($row->img_url);
					$output .= '<div class="row" style="
					
					background:#eee;
					padding:5px; margin:5px;
					overflow-x: hidden;">
					<div class="col-md-3" align="center" style="font-size:20px;"><img style="height: 130px;" src="'.$path.'"/></div>
					<div class="col-md-3" align="left" style="font-size:20px;"><br /><p><i class="fa fa-car" aria-hidden="true"></i>
					
					Vehicle Name: '.$row->vehicle.'</p><p><i class="fa fa-building" aria-hidden="true"></i>
					Vehcile Company: '.$row->vehicle_company.'</p></div>
					<div class="col-md-3" align="left" style="font-size:20px;">	<br /><p><i class="fa fa-users" aria-hidden="true"></i>
				
					Passenger Capacity: '.$row->pass_capac.'</p><p><i class="fa fa-suitcase" aria-hidden="true"></i>
					Bag Capacity: '.$row->bag_capac.'</p></div>
					<div class="col-md-3" align="left" style="font-size:20px;">
					<h2 style="font-size:20px">Trip Price: €'.$row->agency_price.'</h2>
					<a type="button" onClick="GFG_click2(this.id)" name="'.$row->vlist_id.'" id="'.$row->vlist_id.'" class="btn btn-warning">Select <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>	
					</div>
					</div>';
					
				}
			}
			else{
				$output .= '<li>Vehicles not found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }

	public function fetch_vfinal($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM vehicle_list_table WHERE vlist_id='".$query."'");
			$result=$query->result();
			
			if($result){
				foreach( $result as $row )
				{
					$output .= ' <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
				    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h1 style="width:100%; max-width:300px;">Summary</h1>
                            </td>
                            
                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            </td>
                            
                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Vehicle
                </td>
                
                <td>
                    Vehicle Company
                </td>
            </tr>
            
            <tr class="details">
                <td>
				'.$row->vehicle.'
                </td>
                
                <td>
				'.$row->vehicle_company.'
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Capacity Information of
                </td>
                
                <td>
                    Capacity
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Passenger
                </td>
                
                <td>
				'.$row->pass_capac.'
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Bags
                </td>
                
                <td>
				'.$row->bag_capac.'
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                </td>
                
                <td>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total Cost: €'.$row->guest_price.'
                </td>
            </tr>
        </table>
		<input type="hidden" id="v_name"  name="v_name" value="'.$row->vehicle.'" />

		<input type="hidden" id="vc_name"  name="vc_name" value="'.$row->vehicle_company.'"/ >

		<input type="hidden" id="pass_name" name="pass_name" value="'.$row->pass_capac.'" />

		<input type="hidden" id="bag_name"  name="bag_name" value="'.$row->bag_capac.'" />

		<input type="hidden" id="price_name"  name="price_name" value="'.$row->guest_price.'" />
    </div>
				';
				
		
				}
			}
			else{
				$output .= '<li>Data Not Found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }
	

	public function fetch_vfinal2($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM vehicle_list_table WHERE vlist_id='".$query."'");
			$result=$query->result();
			
			if($result){
				foreach( $result as $row )
				{
					$output .= '<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
				    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h1 style="width:100%; max-width:300px;">Summary</h1>
                            </td>
                            
                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            </td>
                            
                            <td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Vehicle
                </td>
                
                <td>
                    Vehicle Company
                </td>
            </tr>
            
            <tr class="details">
                <td>
				'.$row->vehicle.'
                </td>
                
                <td>
				'.$row->vehicle_company.'
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Capacity Information of
                </td>
                
                <td>
                    Capacity
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Passenger
                </td>
                
                <td>
				'.$row->pass_capac.'
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Bags
                </td>
                
                <td>
				'.$row->bag_capac.'
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                </td>
                
                <td>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total Cost: €'.$row->agency_price.'
                </td>
            </tr>
        </table>
		<input type="hidden" id="v_name"  name="v_name" value="'.$row->vehicle.'" />

		<input type="hidden" id="vc_name"  name="vc_name" value="'.$row->vehicle_company.'" />

		<input type="hidden" id="pass_name"  name="pass_name" value="'.$row->pass_capac.'" />

		<input type="hidden" id="bag_name"  name="bag_name" value="'.$row->bag_capac.'" />

		<input type="hidden" id="price_name"  name="price_name" value="'.$row->agency_price.'" />


    </div>
				';
				}
			}
			else{
				$output .= '<li>Data Not Found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }
	

	public function fetch_log($query=''){

		// if(isset()){
	
			$output='';
			$query=$this->db->query("SELECT * FROM agencies_login WHERE user_email='".$query."'");
			$result=$query->result();
			
			if($result){
				foreach( $result as $row )
				{
					$output .= '
					<div class="column" style="width:auto;position:absolute; left:870px;display: inline-block;"><input type="text" style="width:100%; height:50px;margin-top:3px;" id="username_label" name="username_label" value="'.$row->user_email.'" disabled/></div>
				    <div class="column" style="width:100px;position:absolute;display: inline-block;margin-left:3px;"><button type="button" style="width:100px; height:50px;margin-top:3px;background-color:#ff8900;color:black;" id="btnOut" name="btnOut" onClick="GFG_logout(this.id)">Sign-out</button></div>
			  ';
				}
			}
			else{
				$output .= '<li>Data Not Found</li>';
				echo $output;
			}
			
			echo $output;
		// }
		

    }



	public function insertData($data){
		alert($data);
		$this->db->insert("vac_bookings",$data);
	}
}
