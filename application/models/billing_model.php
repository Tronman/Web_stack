<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
    
    // Get all details ehich store in "products" table in database.
    public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
	public function get_all_orders()
	{
		$query = $this->db->get('demand_orders');
		return $query->result_array();
	}

	public function get_one($id){
		$this->db->where('serial',$id);
        $query = $this->db->get('products');

        return $query->result_array();		
	}
	public function getItemId($name){
         
         $this->db->where('name',$name);
         $query = $this->db->get('products');
	    
	     return $query->row('serial');

	} 

	public function set_location($location,$order_id){
 
        $this->db->set('location', $location);
        $this->db->where('serial',$order_id);
        
        
        return $this->db->update('demand_orders');

    }
    
    // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
       
}