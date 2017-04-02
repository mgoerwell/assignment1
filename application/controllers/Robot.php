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
        $heads = array();
        $torsos = array();
        $feet = array();
		
		// iterate thru each model array element and store values
        foreach ($source as $record)
		{
			if ($record['part_type'] == 'head') {
				$heads[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $record['part_code']);
			} else if ($record['part_type'] == 'torso') {
				$torsos[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $record['part_code']);
			} else if ($record['part_type'] == 'feet') {
				$feet[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $record['part_code']);
			}
			$parts[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $record['part_code']);
		}
        $this->data['parts'] = $parts;
        $this->data['heads'] = $heads;
        $this->data['torsos'] = $torsos;
        $this->data['feet'] = $feet;
		
		$this->render(); 
	}
}
