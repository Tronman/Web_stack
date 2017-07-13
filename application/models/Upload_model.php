<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {

	// Insert customer details in "customer" table in database.
	public function insert_order($data)
	{
		$this->db->insert('demand_orders', $data);

		$id = $this->db->insert_id();

		
		
		return (isset($id)) ? $id : FALSE;		
	}

	public function order_progress($data)
	{
		$this->db->insert('order_progress', $data);

		$id = $this->db->insert_id();

		
		
		return (isset($id)) ? $id : FALSE;		
	}
    
}