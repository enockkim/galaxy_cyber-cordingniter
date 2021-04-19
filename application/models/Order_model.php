<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {
	
	
	//register client
	public function order(){

		$name = $this->input->post('name');
        $phoneNumber = $this->input->post('phoneNumber');
        $service = $this->input->post('service');
        $description = $this->input->post('description');
		$created_at=date('d/M/Y');

		//client login array
		$order_data = array(
			'name' => $name,
			'phoneNumber' => $phoneNumber,
			'service' => $service,
			'description'=> $description,
            'created_at' => $created_at,
		);

		//post login
		$add_order=$this->db->insert('orders',$order_data);

		//get last id
		//  $last_insert = $this->db->insert_id();


		//client profile array
		// $add_client_profile_data = array(
		// 	'date_registered'=>strtotime($date_reg),
		// 	'login_id'=>$last_insert,
		// );

		//post login
		//  $added_client_profile_data=$this->db->insert('profiles',$add_client_profile_data);

		 //logs
		//  $log= array(
		//  	'message' => 'New user registered',
		//  	'user_id' => $last_insert,
		//  	'trigger_date'=>strtotime('now')
		//  );
		 //inset logs table
		//  $insert_log=$this->db->insert('logs',$log);

		 //if success
		if($add_order){
			return true;
		}else{
			return false;
		}
}//end register function

 ////////IMAGE URL//////////
    
//end bracket for login model	
}