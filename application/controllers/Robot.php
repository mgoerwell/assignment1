<?php

/**
	This represents the controller. It gathers all records from the robots
	and parts models.
	
	Author: Alex Zielinski
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Robot extends Application
{
	// Constructor
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// link view
		$this->data['pagebody'] = 'robots';
		
		// call all() function from robots model
		$source = $this->robots->all();
		$robots = array(); // array to store returned values
		
		// iterate thru each model array element and store values
		foreach ($source as $record)
		{
			$robots[] = array ('model_ID' => $record['model_ID'], 
							   'head_ID' => $record['head_ID'], 
							   'torso_ID' => $record['torso_ID'], 
							   'bottom_ID' => $record['bottom_ID'], 
							   'type' => $record['type'],
							   'pic' => $record['pic']);
		}
		$this->data['robots'] = $robots;
		
		// call all() function from parts model
        $source = $this->parts->all();
        $parts = array(); // array to store returned values
		
		// iterate thru each model array element and store values
        foreach ($source as $record)
		{
			$parts[] = array ('model' => $record['model'], 'line' => $record['line'], 'pic' => $record['pic'], 'href' => $record['where']);
		}
        $this->data['parts'] = $parts;
		
		$this->render(); 
	}
}