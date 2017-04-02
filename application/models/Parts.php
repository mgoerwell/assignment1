<?php

/**
 * This is a the model for parts set up to use the actual database.
 *
 * @author matt
 */
class Parts extends CI_Model {
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve all of the parts
	public function all()
	{
        $this->db->order_by("part_code");
        $query = $this->db->get('parts');
        $data = $query->result_array();
		return $data;
	}
    //insert entry into database
    public function insert($data){
        $this->db->insert('parts',$data);
    }
}
