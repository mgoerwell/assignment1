<!-- Author: Aing Ragunathan
	This file includes all the data required by the history page.
	 -->

<?php

class History extends CI_Model {

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	
	// retrieve all of the history
	public function all()
	{
		$this->db->order_by("id");
        $query = $this->db->get('history');
        $data = $query->result_array();
		return $data;
	}

}
