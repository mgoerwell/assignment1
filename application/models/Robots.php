<?php

class Robots extends CI_Model 
{
	var $data = array(
		array('id' => '1', 'model_ID' => 'a', 'head_ID' => 'a1', 'torso_ID' => 'a2', 'bottom_ID' => 'a3', 'type' => 'Household'),
		array('id' => '2', 'model_ID' => 'b', 'head_ID' => 'b1', 'torso_ID' => 'b2', 'bottom_ID' => 'b3', 'type' => 'Household'),
		array('id' => '3', 'model_ID' => 'c', 'head_ID' => 'c1', 'torso_ID' => 'c2', 'bottom_ID' => 'c3', 'type' => 'Household'),
		array('id' => '4', 'model_ID' => 'm', 'head_ID' => 'm1', 'torso_ID' => 'm2', 'bottom_ID' => 'm3', 'type' => 'Butler'),
		array('id' => '5', 'model_ID' => 'r', 'head_ID' => 'r1', 'torso_ID' => 'r2', 'bottom_ID' => 'r3', 'type' => 'Butler'),
		array('id' => '6', 'model_ID' => 'w', 'head_ID' => 'w1', 'torso_ID' => 'w2', 'bottom_ID' => 'w3', 'type' => 'Companion')
	);
	
	
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single 
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the robots
	public function all()
	{
		return $this->data;
	}
};