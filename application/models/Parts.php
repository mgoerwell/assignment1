<?php

/**
 * This is a Dummy model for Parts with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author matt
 */
class Parts extends CI_Model {
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single part
	public function get($which)
	{
        $this->db->order_by("certificate");
        $query = $this->db->get('parts');
        $data = $query->result_array();
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['certificate'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the parts
	public function all()
	{
        $this->db->order_by("certificate");
        $query = $this->db->get('parts');
        $data = $query->result_array();
		return $data;
	}

}
