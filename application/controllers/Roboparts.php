<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roboparts extends Application
{

	function __construct()
	{
		parent::__construct();
	}
	
	/**
     * This serves as the entry point for the parts view
	 */
	public function index()
	{
        //the view we want shown
		$this->data['pagebody'] = 'parts';
        
        //build the list of parts to pass on to the view.
        $source = $this->parts->all();
        $parts = array();
        foreach ($source as $record)
		{
			$parts[] = array ('what' => $record['what'], 'pic' => $record['pic'], 'href' => $record['where']);
		}
        $this->data['parts'] = $parts;
        
		$this->render(); 
	}

}
