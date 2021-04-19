<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	//Index Page for this login controller.
	 
	public function __construct(){
		//set errors to false
		error_reporting(0);
		//load default constructors
		parent:: __construct();
		$this->load->model('Order_model','om');
	}

    public function order_crud($p1=""){
		//edit gadget
		if($p1=="add"){
			// $data['gadget_id']=$this->db->get_where('gadgets', array('gadget_id' => $p2));
			$this->load->view('backend/admin/modal_add_order.php', 'refresh');
		}
    }

    public function make_order(){
		$validator = array('success' => false, 'messages' => array());

		$validate_data = array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required',
				
				'errors' => array(
					'required' => 'The %s field is required!',
					)
			),
			array(
				'field' => 'phoneNumber',
				'label' => 'Phone Number',
				'rules' => 'required',
				
				'errors' => array(
					'required' => 'The %s field is required!',
					)
			),
			array(
				'field' => 'service',
				'label' => 'Service',
				'rules' => 'required',
				
				'errors' => array(
					'required' => 'The %s field is required!',
					)
			),
			array(
				'field' => 'description',
				'label' => 'Description',
				'rules' => 'required',
				
				'errors' => array(
					'required' => 'The %s field is required!',
					)
			)
		);

		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_error_delimiters('<p id="reg" class="help-block">','</p>');

		if($this->form_validation->run() === true) {

			$reg = $this->om->order();

			if($reg === true) {
				$validator['success'] = true;
				$validator['messages'] = "Your order has been submitted successfully.";
                
                redirect(base_url(), 'refresh');
                // if ($error == false) {
                    
                    // }else {
                    //     $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
                    // }
			}	
			else {
				$validator['success'] = false;
				$validator['messages'] = "<i class='ti-info-alt'></i> There was an error while posting your data!";
			} // /else

		} 	
		else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}			
		} // /else

		echo json_encode($validator);
	} // /validate function


	
	
	
	// bracket for class controller
}
