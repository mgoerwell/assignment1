<?php

/**

    @author Aing
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{

	function __construct()
	{
		parent::__construct();
		
		
		$this->data['pagebody'] = 'Manage';
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'Parts ('. $role . ')';
        
	}
	
	/**
     * This serves as the entry point for the parts view
	 */
	public function index()
	{
		//create the list of completed robots 
        $data = $this->robots->all();
        $robots = array();
        foreach ($data as $record)
		{
			//get the date, type, description, location, cost, and price of every entry.
			$robots[] = array ('id'=> $record['id'],
								'head_part'=> $record['head_part'],
								'torso_part'=> $record['torso_part'],
								'leg_part'=> $record['leg_part']
								);
		}
		
		

        $this->data['robotos'] = $robots;
		$this->render(); 
	}
	

	public function registerme() {
		$myfile = fopen(__DIR__.'/../../public/data/key.txt','r');
        $apikey = fread($myfile,32);
        $siteAddress = 'https://umbrella.jlparry.com/work/mybuilds?key='.$apikey;
        $response = file_get_contents($siteAddress);
    }
    
    public function rebootme() {
        //$response = file_get_contents('https://umbrella.jlparry.com/endpoint?key=YOUR_API_KEY');
		$this->db->query('delete company where 1=1;');
		$this->db->query('delete head where 1=1;');
		$this->db->query('delete history where 1=1;');
		$this->db->query('delete legs where 1=1;');
		$this->db->query('delete robot where 1=1;');
		$this->db->query('delete torso where 1=1;');
	}
}
