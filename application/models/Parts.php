<?php

/**
 * This is a "CMS" model for Parts, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author matt
 */
class Parts extends CI_Model {

	// The data is made up based off of the provided parts
	var $data = array(
		array('id' => '1', 'pic' => 'a1.jpeg', 'where' => '/a1',
            'model' => 'A', 'line' => 'Household', 'CA' => '#754216',
            'Date Acuired' => 'Today'),		
        array('id' => '2', 'pic' => 'm1.jpeg', 'where' => '/m1',
            'model' => 'M', 'line' => 'Butler','CA' => '#234289',
            'Date Acuired' => 'Today'),
        array('id' => '3', 'pic' => 'w1.jpeg', 'where' => '/w1',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839281',
            'Date Acuired' => 'Today'),
		array('id' => '4', 'pic' => 'a2.jpeg', 'where' => '/a2',
            'model' => 'A', 'line' => 'Household', 'CA' => '#754616',
            'Date Acuired' => '03/05/2016'),
        array('id' => '5', 'pic' => 'm2.jpeg', 'where' => '/m2',
            'model' => 'M', 'line' => 'Butler', 'CA' => '#234249',
            'Date Acuired' => 'Today'),
        array('id' => '6', 'pic' => 'w2.jpeg', 'where' => '/w2',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839288',
            'Date Acuired' => 'Today'),
        array('id' => '7', 'pic' => 'a3.jpeg', 'where' => '/a3',
            'model' => 'A', 'line' => 'Household', 'CA' => '#654616',
            'Date Acuired' => '03/05/2016'),
        array('id' => '8', 'pic' => 'm3.jpeg', 'where' => '/m3',
            'model' => 'M', 'line' => 'Butler', 'CA' => '#234239',
            'Date Acuired' => 'Today'),
        array('id' => '9', 'pic' => 'w3.jpeg', 'where' => '/w3',
            'model' => 'W', 'line' => 'Companion', 'CA' => '#839221',
            'Date Acuired' => 'Today')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
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
