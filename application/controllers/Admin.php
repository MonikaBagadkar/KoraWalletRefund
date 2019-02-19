<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Kora_model');
    }
    public function index()
	{
		if ($this->session->userdata('logged_user')) {
			$Users['userDetails'] = $this->Kora_model->getUserDetails();
			$this->template->view('dashboard', $Users);
		} 
		else {
			redirect('/index.php/admin/login', 'refresh');
		}
	}
    public function login() {
		$formdata = array(
			'username' => $this->input->post('email'),
			'password' => $this->input->post('pwd')
			);
		$checkAdmin = $this->Kora_model->adminLogin($formdata);
		if($this->input->post('email') && $this->input->post('pwd')) {
			if ($checkAdmin) 
			{
				redirect('/index.php/dashboard');
			} 
			else 
			{
				$this->session->set_flashdata('err_message', 'Please Enter Valid Credentials!!');
			}	
		}
		else if($this->session->userdata('logged_user')){
			redirect('/index.php/dashboard');
		}
		$this->load->view('login');
	}
	public function orderDetails($id)
	{
		$Orders['orderDetails'] = $this->Kora_model->getOrderDetails($id); 
		$this->template->view('order', $Orders);
	}
	public function amountRefund($amount, $refundAmt, $customerid)
	{
		$amountRefund = $this->Kora_model->updateRefund($amount, $refundAmt, $customerid);
		redirect('/index.php/orders/' .$customerid);
	}
	public function addRefund($customerid, $creditamount, $refundAmt)
	{
		$addRefund = $this->Kora_model->addRefundAmount($customerid, $creditamount, $refundAmt);
		redirect('/index.php/dashboard/');
	}
	public function subtractRefund($customerid, $creditamount, $refundAmt)
	{
		$addRefund = $this->Kora_model->subtractRefundAmount($customerid, $creditamount, $refundAmt);
		redirect('/index.php/dashboard/');
	}
	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}
	
