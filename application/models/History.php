<!-- Author: Aing Ragunathan
	This file includes all the data required by the history page.
	 -->

<?php

class History extends CI_Model {

	// create an array to hold data for a History object
	var $data = array(
		// add transactions with date, type, data, assembly type,
		// location sold to or built in, cost to build and the 
		// price sold for.
		array('id' => '1', 	'date' => '15:00 13/1/2017', 
							'type' => 'purchase',
							'data' => 'Box of parts',
							'assembly' => '',
							'location' => 'Seattle, US',
							'cost' => 100,
							'price' => 0),

		array('id' => '2', 	'date' => '13:00 14/1/2017', 
							'type' => 'assembly',
							'data' => 'A',
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'cost' => 0,
							'price' => 0),
		
		array('id' => '3', 	'date' => '7:00 15/1/2017', 
							'type' => 'shipment',
							'data' => 'A',
							'assembly' => 'full',
							'location' => 'Dhaka, Bangladesh',
							'cost' => 0,
							'price' => 50),

		array('id' => '4', 	'date' => '15:00 15/1/2017', 
							'type' => 'assembly',
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'data' => 'M',
							'cost' => 0,
							'price' => 0),

		array('id' => '5', 	'date' => '8:30 15/1/2017', 
							'type' => 'assembly',
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'data' => 'B',
							'cost' => 0,
							'price' => 0),

		array('id' => '6', 	'date' => '10:00 16/1/2017',
							'type' => 'shipment', 
							'assembly' => 'full',
							'location' => 'Delhi, India',
							'data' => 'M',
							'cost' => 0,
							'price' => 100),

		array('id' => '7', 	'date' => '11:00 17/1/2017', 
							'type' => 'purchase',
							'assembly' => '',
							'location' => 'Shanghai, China',
							'data' => 'Box of parts',
							'price' => '$100',
							'cost' => 100,
							'price' => 0),

		array('id' => '8', 	'date' => '11:00 20/1/2017',
							'type' => 'shipment', 
							'assembly' => 'full',
							'location' => 'Calgary, Canada',
							'data' => 'B',
							'cost' => 0,
							'price' => 50),

		array('id' => '9', 	'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => '',
							'location' => 'Vancouver, Canada',
							'data' => 'motley',
							'cost' => 0,
							'price' => 0),

		array('id' => '10',	'date' => '14:00 21/1/2017', 
							'type' => 'shipment',
							'location' => 'Moscow, Russia',
							'data' => 'motley',
							'cost' => 0,
							'price' => 25),

		array('id' => '11', 'date' => '11:00 17/1/2017', 
							'type' => 'purchase',
							'assembly' => '',
							'location' => 'Shanghai, China',
							'data' => 'Box of parts',
							'price' => '$100',
							'cost' => 100,
							'price' => 0),

		array('id' => '12', 'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'data' => 'R',
							'cost' => 0,
							'price' => 0),
		
		array('id' => '13', 'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => 'mix',
							'location' => 'Vancouver, Canada',
							'data' => 'M',
							'cost' => 0,
							'price' => 0),
		
		array('id' => '14', 'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => 'mix',
							'location' => 'Vancouver, Canada',
							'data' => 'C',
							'cost' => 0,
							'price' => 0),

		array('id' => '15',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'full',
							'location' => 'London, England',
							'data' => 'R',
							'cost' => 0,
							'price' => 50),

		array('id' => '16',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'mix',
							'location' => 'Berlin, Germany',
							'data' => 'M',
							'cost' => 0,
							'price' => 50),

		array('id' => '17',	'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => 'mix',
							'location' => 'Vancouver, Canada',
							'data' => 'B',
							'cost' => 0,
							'price' => 0),
		
		array('id' => '18',	'date' => '13:00 20/1/2017',
							'type' => 'assembly', 
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'data' => 'A',
							'cost' => 0,
							'price' => 0),
		
		array('id' => '19',	'date' => '13:00 20/1/2017', 
							'type' => 'assembly',
							'assembly' => 'full',
							'location' => 'Vancouver, Canada',
							'data' => 'W',
							'cost' => 0,
							'price' => 0),

		array('id' => '20',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'mix',
							'location' => 'Toronto, Canada',
							'data' => 'C',
							'cost' => 0,
							'price' => 25),
		
		array('id' => '21',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'mix',
							'location' => 'New York, US',
							'data' => 'B',
							'cost' => 0,
							'price' => 25),
		
		array('id' => '22',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'full',
							'location' => 'Houston, US',
							'data' => 'A',
							'cost' => 0,
							'price' => 50),
		
		array('id' => '23',	'date' => '11:00 20/1/2017', 
							'type' => 'shipment',
							'assembly' => 'full',
							'location' => 'Venice, Italy',
							'data' => 'W',
							'cost' => 0,
							'price' => 200),
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
