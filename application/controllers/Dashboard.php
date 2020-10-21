<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public $viewFolder = "";
//    public $user;

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";
//        $this->user = get_active_user();
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
		array(
                
            )
        );
  
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
		$viewData->items = $items;
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	}