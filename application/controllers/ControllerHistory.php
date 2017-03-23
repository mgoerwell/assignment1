<!-- Author: Aing Ragunathan
	This file holds the description for the History controller.
	It includes a controller and index functions. -->

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerHistory extends Application
{

	function __construct()
	{
		parent::__construct();
	}
	
	/**
     * This serves as the entry point for the history view
	 */
	public function index()
	{
        //the view we want shown
		$this->data['pagebody'] = 'history';
        
        //create the list of logs
        $data = $this->history->all();
        $history = array();
        foreach ($data as $record)
		{
			//get the date, type, description, location, cost, and price of every entry.
			$history[] = array ('date' => $record['date'], 'type' => $record['type'], 'data' => $record['data'], 'location' => $record['location'], 'cost' => $record['cost'], 'price' => $record['price']);
		}
        
        $this->data['history'] = $history;
        
		$this->render(); 
	}

}
