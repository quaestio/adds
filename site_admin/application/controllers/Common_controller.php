<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_controller extends CI_Controller {
  	
	public function __construct() {
        parent:: __construct();
     	$this->cm->isloggedIn();
      
      
    }

	public function pub_unpub()
	{
		echo $this->cm->pub_unpub();
	}
	
}
