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
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'Parts ('. $role . ')';
        
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
            $part = $record['part_code'];
            if (strcmp($record['part_type'],"head") == 0) {
                $heads[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $part, 'model' => strtoupper($part[0]));
            } else if (strcmp($record['part_type'],"torso") == 0) {
                $torsos[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $part, 'model' => strtoupper($part[0]));
            } else {
                $feet[] = array('certificate'=> $record['certificate'],'line' => $record['line_type'],'pic' => $part, 'model' => strtoupper($part[0]));
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
		$source = $this->parts->all();
        foreach ($source as $record) {
            if ($record['certificate'] != $id) {
                continue;
            }
            $part = $record['part_code'];
            $info = array('certificate'=> $record['certificate'],'line' => $record['line_type'],
            'pic' => $part,'code' => strtoupper($part), 'model' => strtoupper($part[0]),'date' => $record['date_acquired'], 
            'type' => strtoupper($record['part_type']));
        } 
        
        //load part info into page.
        $this->data = array_merge($this->data,$info);
		$this->render();
        
    }
    
    public function build_parts() {
        $myfile = fopen(__DIR__.'/../../public/data/key.txt','r');
        $apikey = fread($myfile,32);
        $siteAddress = 'https://umbrella.jlparry.com/work/mybuilds?key='.$apikey;
        $response = file_get_contents($siteAddress);
        $info = json_decode($response,true);
        foreach ($info as $key => $value) {
            $certificate = $value["id"];
            $model = $value["model"];
            $piece = $value["piece"];
            $part_code = $model.$piece;
            $part_type;
            switch ($piece) {
                case '1':
                    $part_type = "head";
                    break;                
                case '2':
                    $part_type = "torso";
                    break;                
                case '3':
                    $part_type = "feet";
                    break;
            }
            if ($model < "m") {
                $line_type = "household";
            } else if ($model < "w") {
                $line_type = "butler";
            } else {
                $line_type = "companion";
            }
            $date_acquired = $value["stamp"];
            
            $data = array(
            "certificate"     => $certificate,
            "line_type"       => $line_type,
            "part_code"       => $part_code,
            "part_type"       => $part_type,
            "date_acquired"   => $date_acquired,
            "available"       => 1
            );
            
            $this->parts->insert($data);
        }
        $this->index();
    }
    
    public function box() {
        $key = file_get_contents('/data/key.txt');
        $response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' + $key);
        $this->index();
    }
}
