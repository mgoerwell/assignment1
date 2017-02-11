<?php

/**
 * This is a Dummy model for Parts with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author matt
 */
class Parts extends CI_Model {

	// The data is made up based off half of the provided parts
	var $data = array(
		array('id' => '1', 'code' => 'a1', 'pic' => 'a1.jpeg', 'where' => '/a1',
            'model' => 'A', 'line' => 'Household', 'CA' => '#754216',
            'Date Acquired' => '03/05/2016'),		
        array('id' => '2', 'code' => 'm1', 'pic' => 'm1.jpeg', 'where' => '/m1',
            'model' => 'M', 'line' => 'Butler','CA' => '#234289',
            'Date Acquired' => '03/05/2016'),
        array('id' => '3', 'code' => 'w1', 'pic' => 'w1.jpeg', 'where' => '/w1',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839281',
            'Date Acquired' => '03/05/2016'),
		array('id' => '4', 'code' => 'a2', 'pic' => 'a2.jpeg', 'where' => '/a2',
            'model' => 'A', 'line' => 'Household', 'CA' => '#754616',
            'Date Acquired' => '03/05/2016'),
        array('id' => '5', 'code' => 'm2', 'pic' => 'm2.jpeg', 'where' => '/m2',
            'model' => 'M', 'line' => 'Butler', 'CA' => '#234249',
            'Date Acquired' => '03/05/2016'),
        array('id' => '6', 'code' => 'w2', 'pic' => 'w2.jpeg', 'where' => '/w2',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839288',
            'Date Acquired' => '03/05/2016'),
        array('id' => '7', 'code' => 'a3', 'pic' => 'a3.jpeg', 'where' => '/a3',
            'model' => 'A', 'line' => 'Household', 'CA' => '#654616',
            'Date Acquired' => '03/05/2016'),
        array('id' => '8', 'code' => 'm3', 'pic' => 'm3.jpeg', 'where' => '/m3',
            'model' => 'M', 'line' => 'Butler', 'CA' => '#234239',
            'Date Acquired' => '03/05/2016'),
        array('id' => '9', 'code' => 'w3', 'pic' => 'w3.jpeg', 'where' => '/w3',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839221',
            'Date Acquired' => '03/05/2016')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single part
	public function get($which)
	{
		// iterate over the data until we find the one we want
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the parts
	public function all()
	{
		return $this->data;
	}

}
