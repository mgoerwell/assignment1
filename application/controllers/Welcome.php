<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'welcome';
		$numparts = 0; //Number of parts in the inventory
		$numbots = 0; //Number of robots currently on hand
		$profits = 0; //Total profits made
		$spent = 0; //Total money spent

		
		// call all() function from robots model
		$source = $this->robots->all();
		
		// iterate thru each model array element and increment number of robots
		foreach ($source as $record)
		{
			$numbots++;
		}
		$this->data['robots'] = $numbots;

		// call all() function from parts model
		$source = $this->parts->all();
		
		// iterate thru each model array element and incrememt number of parts available
        foreach ($source as $record)
		{
			$numparts++;
		}
       $this->data['parts'] = $numparts;



		// call all() function from history model
		$source = $this->history->all();
		$historicaldata = array ();
		$economics = array();

		foreach ($source as $record)
		{
			$historicaldata[] = array ('type' => $record['type'], 'cost' => $record['cost'], 'price' => $record['price']);
			
			//Add all costs
			if($record['type'] == 'purchase') {
				$spent = $spent + $record['cost'];
				
			//add all profits
			} else if($record['type'] == 'shipment') {
				$profits = $profits + $record['price'];
			}
		}

		$economics[] = array('spent' => $spent, 'profits' => $profits);
		$this->data['economics'] = $economics;

		$this->render();
	}

}