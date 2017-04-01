<?php

/**
    This is the controller used to service the "worker" use case which is parts focused.
    It maps to the parts model only.

    @author Matt
*/

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
        $heads  = array();
        $torsos = array();
        $feet   = array();
        foreach ($source as $record)
		{
            if ($record['available'] == 0) {
                continue;
            }
            
            if (strcmp($record['part_type'],"head") == 0) {
                $heads[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $record['part_code']);
            } else if (strcmp($record['part_type'],"torso") == 0) {
                $torsos[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $record['part_code']);
            } else {
                $feet[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $record['part_code']);
            }
		}
        
        //load parts into the page.
        $this->data['heads'] = $heads;
        $this->data['torsos'] = $torsos;
        $this->data['feet'] = $feet;
        
		$this->render(); 
	}
    
    public function detail($id) {
        // this is the view we want shown
		$this->data['pagebody'] = 'onepart';

		// build the list of authors, to pass on to our view
		$source = $this->parts->get($id);

        //load part info into page.
        $this->data = array_merge($this->data, $source);
		$this->render();
        
    }

}
