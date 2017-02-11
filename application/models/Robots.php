<?php

/**
	This represents the Robots model. It contains mock data that is to 
	represent a database. It contains robot model IDs, each robort part 
	IDs, the type as well as the picture that goes along with the robot
	
	Author: Alex Zielinski
*/

class Robots extends CI_Model 
{
	// array to hold mock data
	var $data = array(
		array('id' => '1', 'model_ID' => 'a', 'head_ID' => 'a1', 'torso_ID' => 'a2', 'bottom_ID' => 'a3', 'type' => 'Household', 'pic' => 'a.jpg'),
		array('id' => '2', 'model_ID' => 'b', 'head_ID' => 'b1', 'torso_ID' => 'b2', 'bottom_ID' => 'b3', 'type' => 'Household', 'pic' => 'b.jpg'),
		array('id' => '3', 'model_ID' => 'c', 'head_ID' => 'c1', 'torso_ID' => 'c2', 'bottom_ID' => 'c3', 'type' => 'Household', 'pic' => 'c.jpg'),
		array('id' => '4', 'model_ID' => 'm', 'head_ID' => 'm1', 'torso_ID' => 'm2', 'bottom_ID' => 'm3', 'type' => 'Butler', 'pic' => 'm.jpg'),
		array('id' => '5', 'model_ID' => 'r', 'head_ID' => 'r1', 'torso_ID' => 'r2', 'bottom_ID' => 'r3', 'type' => 'Butler', 'pic' => 'r.jpg'),
		array('id' => '6', 'model_ID' => 'w', 'head_ID' => 'w1', 'torso_ID' => 'w2', 'bottom_ID' => 'w3', 'type' => 'Companion', 'pic' => 'w.jpg')
	);
	
	
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single entry
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