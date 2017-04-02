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

	public function compare_id($a, $b)
	{
		return $a['id'] < $b['id'];
	}
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// link view
		$this->data['pagebody'] = 'robots';
		
		// call all() function from robots model
		$sourceRobots = $this->robots->all();
		$robots = array(); // array to store returned values
		
		// iterate thru each model array element and store values
		foreach ($sourceRobots as $record)
		{
			$robots[] = array ('model_ID' => $record['id'], 
							   'head_ID' => $record['head_part'], 
							   'torso_ID' => $record['torso_part'], 
							   'bottom_ID' => $record['leg_part']);
		}
		$this->data['robots'] = $robots;
		
		// call all() function from parts model
        $sourceParts = $this->parts->all();
        $parts = array(); // array to store returned values
        $heads = array();
        $torsos = array();
        $feet = array();
		
		// iterate thru each model array element and store values
        foreach ($sourceParts as $record)
		{
            if ($record['available'] == 0) {
                continue;
            }
            $part = $record['part_code'];
			if ($record['part_type'] == 'head') {
				$heads[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
			} else if ($record['part_type'] == 'torso') {
				$torsos[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
			} else if ($record['part_type'] == 'feet') {
				$feet[] = array ('certificate' => $record['certificate'], 'line' => $record['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
			}
		}
        $this->data['heads'] = $heads;
        $this->data['torsos'] = $torsos;
        $this->data['feet'] = $feet;


        $assembledHeads = array();
        $assembledTorsos = array();
        $assembledFeet = array();

        foreach ($sourceRobots as $robotRecord)
		{
			foreach ($sourceParts as $partRecord)
			{
                $part = $partRecord['part_code'];
				if ($partRecord['certificate'] == $robotRecord['head_part']) {
					$assembledHeads[] = array ('id' => $robotRecord['id'], 'line' => $partRecord['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
				}

				if ($partRecord['certificate'] == $robotRecord['torso_part']) {
					$assembledTorsos[] = array ('id' => $robotRecord['id'], 'line' => $partRecord['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
				}

				if ($partRecord['certificate'] == $robotRecord['leg_part']) {
					$assembledFeet[] = array ('id' => $robotRecord['id'], 'line' => $partRecord['line_type'], 'pic' => $part, 'model' => strtoupper($part[0]));
				}
			}
		}

		usort($assembledHeads, array($this, 'compare_id'));
		usort($assembledTorsos, array($this, 'compare_id'));
		usort($assembledFeet, array($this, 'compare_id'));


		$this->data['assembledHeads'] = $assembledHeads;
        $this->data['assembledTorsos'] = $assembledTorsos;
        $this->data['assembledFeet'] = $assembledFeet;


		
		$this->render(); 
	}
	
	/**
	 * Creates a robot based on the parameters passed in.
	 * Checks if the right parts have been selected. Then
	 * calls functions to update database tables appropriatly.
	 */
	public function createRobot()
	{
		$this->robots->addRobot();
		$this->index();
	}
	
	/**
	 * Returns the robort part selected back to main office.
	 * Then calls function that deletes part from appropriate 
	 * database table.
	 */
	public function returnToOffice()
	{
		$this->robots->removeParts();
		$this->index();
	}
}
