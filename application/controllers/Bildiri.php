<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bildiri extends CI_Controller {

    public $viewFolder = "";


    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "bildiri_v";

        $this->load->model("bildiri_model");
		$this->load->model("user_model");
		$this->load->model("kongre_model");
		
		

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index($id)
	{
		$user = $this->session->userdata("user");
		$userid = "";
		$userid = $user-> id;
		
		
		$viewData = new stdclass();
		/** Tablodan Verilerin Getirilmesi.. */
	   	
		
       $items = $this->bildiri_model->get_all(
		array(
		         "kongre_id"  => $id,
		         "users_id"  => $userid
		));
			 
		  
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
		$viewData->items = $items;
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	   }
	   
	   
	   public function show_form($id){
		     
	   $viewData = new stdclass();
		/** Tablodan Verilerin Getirilmesi.. */
       $items = $this->bildiri_model->get_all(
		array(
		"kongre_id"  => $id,
		"id"  => $id,
		
		));
			  
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "show";
		$viewData->items = $items;
		
		
		
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	   
	   public function new_form(){
		   
		   
	   $viewData = new stdclass();
		/** Tablodan Verilerin Getirilmesi.. */
       $items = $this->bildiri_model->get_all(
		array());
		
			  
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
		$viewData->items = $items;
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	
	public function update($id)
	
	{
		
		
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("title","title","required|trim");
		$this->form_validation->set_rules("ozet","ozet","required|trim");
		$this->form_validation->set_rules("anahtar_kelime","anahtar kelime","required|trim");
		
		
		
		$this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
                 )
        );
		
		$validate = $this->form_validation->run();
		if($validate){
			
			$update = $this->bildiri_model->update(
			array(
                    "id"     => $id
                   
                     
                ),
                array(
                    "title"           => $this->input->post("title"),
                    "ozet"            => $this->input->post("ozet"),
					"anahtar_kelime"  => $this->input->post("anahtar_kelime"),
					"sunumturu"       => $this->input->post("sunumturu"),
					"topic"           => $this->input->post("topic"),
                     
                )
            );
			
		// TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kaydınız başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Şifre Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("bildiri"));

        } else {
			
			$viewData = new stdClass();
			/** Tablodan Verilerin Getirilmesi.. */
            $item = $this->bildiri_model->get(
                array(
                    "users_id"  => $userid
                )
            );
			
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
			$viewData->item=$item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}

	}
	
	public function save($id)
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("title","title","required|trim");
		$this->form_validation->set_rules("topic","başlama tarihi","required|trim");
		$this->form_validation->set_rules("ozet","bitiş tarihi","required|trim");
		$this->form_validation->set_rules("anahtar_kelime","sonuçlanma tarihi","required|trim");
		$this->form_validation->set_rules("sunumturu","sunum turu","required|trim");
		
		$this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
                 )
        );
		
		$validate = $this->form_validation->run();
		if($validate){
			
		$user = $this->session->userdata("user");
		$userid = "";
		$userid = $user-> id;
			
			$insert = $this->bildiri_model->add(
                array(
				    
					"kongre_id"      => $id,
				    "users_id"       => $userid,
                    "title"          => $this->input->post("title"),
                    "topic"          => $this->input->post("topic"),
					"ozet"           => $this->input->post("ozet"),
					"anahtar_kelime" => $this->input->post("anahtar_kelime"),
					"sunumturu"      => $this->input->post("sunumturu"),   
                     
                )
            );
			
			
		// TODO Alert sistemi eklenecek...
            if($insert){

                 $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }
                 
		
		

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url(""));

            die();

            

        } else {
			
			$viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
		}
		
	}
	
	
	public function delete($id){
		
		
			
        $delete = $this->bildiri_model->delete(
            array(
                "id"    => $id,
            )
        );

		
        // TODO Alert Sistemi Eklenecek...
        if($delete){

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde silindi",
                "type"  => "success"
            );

        } else {

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("bildiri"));

	}

public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->bildiri_model->get(
            array(
                "id"    => $id,
            )
        );


/** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
	
	public function yazarlar_form(){
		   
		 $viewData = new stdClass();

 
       
			  
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "yazarlar";
		
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
}


