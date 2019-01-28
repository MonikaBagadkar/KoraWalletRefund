<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kora_controller extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Kora_model');
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function adminLogin()
	{
		$formdata = array(
			'username' => $this->input->post('email'),
			'password' => $this->input->post('pwd')
			);
		$checkAdmin = $this->Kora_model->adminLogin($formdata);
		if ($checkAdmin) 
		   	{
		   		$Users['userDetails'] = $this->Kora_model->getUserDetails();
		   		$this->load->view('dashboard', $Users);
		   	} 
   		else 
	   		{
		   		$this->load->view('login');
		   	}
		

	}
	public function orderDetails($id)
	{
		$Orders['orderDetails'] = $this->Kora_model->getOrderDetails($id); 
		$this->load->view('order', $Orders);
	}
	public function amountRefund($amount, $refundAmt, $customerid)
	{
		$amountRefund = $this->Kora_model->updateRefund($amount, $refundAmt, $customerid);
		redirect('/index.php/kora_controller/orderDetails/' .$customerid);
	}
	public function logOut()
	{
		redirect('/index.php/kora_controller/');
	}
}
