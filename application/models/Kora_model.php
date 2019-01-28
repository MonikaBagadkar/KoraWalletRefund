<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kora_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function adminLogin($formdata){
        extract($formdata);
        $where = array('user_name' => $username, 'password' => $password);

        $this->db->select('*');
        $this->db->where($where);
        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            return TRUE;
        }
        else {
           return False;
        }

    }
    public function getUserDetails(){
        $this->db->select('*');
        $query = $this->db->get('vip_members');
        $result = $query->result_array($query);
        return $result;
    }
    public function getOrderDetails($id)
    {
        $this->db->select('*');
        $this->db->from('coupon');
        $this->db->join('vip_members', 'vip_members.shopify_customer_id = coupon.shopify_customer_id');
        $query = $this->db->get();
        $result = $query->result_array($query); 
        return $result;
    }
    public function updateRefund($amount, $refundAmt, $customerid)
    {
        $this->db->select('credit_balance')->order_by('id',"desc")->limit(1);
        $this->db->where('customer_id', $customerid);
        $query = $this->db->get('credits');
        $result = $query->result_array($query);  
        $creditAmount = $result[0]['credit_balance']; 

        $credit_balance = $creditAmount + $refundAmt;
        
        // insert in credits
        $data = array(
        'customer_id' => $customerid,
        'credit_balance' => $credit_balance,
        'amount_used' => $refundAmt,
        'status' => 1
        );
        $this->db->insert('credits', $data);
       

        // update in vip_members
        $this->db->set('credit_amount', $credit_balance);
        $this->db->where('shopify_customer_id',  $customerid);
        $this->db->update('vip_members');
    }
}
?>