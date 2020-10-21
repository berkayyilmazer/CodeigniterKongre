<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kongre extends CI_Controller {

public $wievFolder ="";

function __construct() {
    parent::__construct();
    $this->viewFolder='kongre_v';
	
	$this->load->model("kongre_model");
	$this->load->model("kongre_image_model");
	
	if(!get_active_user()){
            redirect(base_url("login"));
        }
}
	public function index()
	{
		$viewData = new stdclass();
		
		
		/** Tablodan Verilerin Getirilmesi.. */
        $items = $this->kongre_model->get_all(
            array(), "rank ASC"
        );
		
		
	
	
	    $viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "list";
		$viewData->items = $items;
		
		$this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
	}
	
	