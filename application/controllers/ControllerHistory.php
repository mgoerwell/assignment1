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
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'History ('. $role . ')';
        
        //create the list of logs
        $data = $this->history->all();
        $history = array();
        foreach ($data as $record)
		{
			//get the date, type, description, location, cost, and price of every entry.
			$history[] = array ('id'=> $record['id'],
								'date' => $record['date'], 
								'time' => $record['time'], 
								'type' => $record['transaction_type'], 
								'assembly' => $record['assembly'], 
								'location' => $record['location'], 
								'cost' => $record['cost'], 
								'revenue' => $record['revenue'], 
								'data' => $record['item_data']);
		}

        $this->data['history'] = $history;
        
		$this->render(); 
	}

}
