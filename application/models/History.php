<?php

class History extends CI_Model {

	var $data = array(
		array('id' => '1', 	'date' => '15:00 13/1/2017', 
							'location' => 'Seattle, US',
							'purchase' => 'Box of parts',
							'price' => '$100'),

		array('id' => '2', 	'date' => '13:00 14/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'A (Full)',),
		
		array('id' => '3', 	'date' => '7:00 15/1/2017', 
							'location' => 'Dhaka, Bangladesh',
							'shipment' => 'A (Full)',
							'price' => '$50'),

		array('id' => '4', 	'date' => '15:00 15/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'M (Full)'),

		array('id' => '5', 	'date' => '8:30 15/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'B (Full)'),

		array('id' => '6', 	'date' => '10:00 16/1/2017', 
							'location' => 'Delhi, India',
							'shipment' => 'M (Full)',
							'price' => '$100'),

		array('id' => '7', 	'date' => '11:00 17/1/2017', 
							'location' => 'Shanghai, China',
							'purchase' => 'Box of parts',
							'price' => '$100'),

		array('id' => '8', 	'date' => '11:00 20/1/2017', 
							'location' => 'Calgary, Canada',
							'shipment' => 'B (Full)',
							'price' => '$50'),

		array('id' => '9', 	'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'motley'),

		array('id' => '10',	'date' => '14:00 21/1/2017', 
							'location' => 'Moscow, Russia',
							'shipment' => 'motley',
							'price' => '$25'),

		//buy 10 ==> 18 inventory
		array('id' => '11', 'date' => '11:00 17/1/2017', 
							'location' => 'Shanghai, China',
							'purchase' => 'Box of parts',
							'price' => '$100'),

		array('id' => '12', 'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'R (Full)'),
		
		array('id' => '13', 'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'M (Mix)'),
		
		array('id' => '14', 'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'C (Mix)'),

		array('id' => '15',	'date' => '11:00 20/1/2017', 
							'location' => 'London, England',
							'shipment' => 'R (Full)',
							'price' => '$50'),

		array('id' => '16',	'date' => '11:00 20/1/2017', 
							'location' => 'Berlin, Germany',
							'shipment' => 'M (Mix)',
							'price' => '$50'),

		array('id' => '17',	'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'B (Mix)'),
		
		array('id' => '18',	'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'A (Full)'),
		
		array('id' => '19',	'date' => '13:00 20/1/2017', 
							'location' => 'Vancouver, Canada',
							'assemblies' => 'W (Full)'),

		array('id' => '20',	'date' => '11:00 20/1/2017', 
							'location' => 'Toronto, Canada',
							'shipment' => 'C (Mix)',
							'price' => '$25'),
		
		array('id' => '21',	'date' => '11:00 20/1/2017', 
							'location' => 'New York, US',
							'shipment' => 'B (Mix)',
							'price' => '$25'),
		
		array('id' => '22',	'date' => '11:00 20/1/2017', 
							'location' => 'Houston, US',
							'shipment' => 'A (Full)',
							'price' => '$50'),
		
		array('id' => '23',	'date' => '11:00 20/1/2017', 
							'location' => 'Venice, Italy',
							'shipment' => 'W (Full)',
							'price' => '$200'),
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

	// retrieve all of the history
	public function all()
	{
		return $this->data;
	}

}
