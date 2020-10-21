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
	
	
	public function new_form()
	{
		if(!isAllowedWriteModule()){
			
			redirect(base_url("kongre"));
		}
		
		$viewData = new stdclass();
		$viewData->viewFolder = $this->viewFolder;
		$viewData->subViewFolder = "add";
		
		$this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
		
	}
	public function save()
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("ad","kongre adı","required|trim");
		$this->form_validation->set_rules("btarih","başlama tarihi","required|trim");
		$this->form_validation->set_rules("btstarih","bitiş tarihi","required|trim");
		$this->form_validation->set_rules("starih","sonuçlanma tarihi","required|trim");
		
		$this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
                 )
        );
		
		$validate = $this->form_validation->run();
		if($validate){
			
			$insert = $this->kongre_model->add(
                array(
                    "kongre_name"         => $this->input->post("ad"),
                    "start_date"          => $this->input->post("btarih"),
					"finish_date"         => $this->input->post("btstarih"),
					"announce_date"       => $this->input->post("starih"),
					"rank"          => 0,
                    "isActive"      => 1,
                    
                     
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

            redirect(base_url("kongre"));

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
	
	public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->kongre_model->get(
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
	
	public function update($id)
	{
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("ad","kongre adı","required|trim");
		$this->form_validation->set_rules("btarih","başlama tarihi","required|trim");
		$this->form_validation->set_rules("btstarih","bitiş tarihi","required|trim");
		$this->form_validation->set_rules("starih","sonuçlanma tarihi","required|trim");
		
		$this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
                 )
        );
		
		$validate = $this->form_validation->run();
		if($validate){
			
			$update = $this->kongre_model->update(
			array(
                    "id"     => $id
                   
                     
                ),
                array(
                    "kongre_name"         => $this->input->post("ad"),
                    "start_date"          => $this->input->post("btarih"),
					"finish_date"         => $this->input->post("btstarih"),
					"announce_date"       => $this->input->post("starih"),
                     
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

            redirect(base_url("kongre"));

        } else {
			
			$viewData = new stdClass();
			/** Tablodan Verilerin Getirilmesi.. */
            $item = $this->kongre_model->get(
                array(
                    "id"    => $id,
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
	
	public function delete($id){

        $delete = $this->kongre_model->delete(
            array(
                "id"    => $id
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
                "title" => "İşlem Başarılı",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("kongre"));



    }

 public function isActiveSetter($id){

        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->kongre_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

   public function rankSetter(){


        $data = $this->input->post("data");

        parse_str($data, $order);

        $items = $order["ord"];

        foreach ($items as $rank => $id){

            $this->kongre_model->update(
                array(
                    "id"        => $id,
                    "rank !="   => $rank
                ),
                array(
                    "rank"      => $rank
                )
            );

        }

    }
 
	public function image_form($id){

        $viewData = new stdClass();
		
		
			
			

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item = $this->kongre_model->get(
            array(
                "id"    => $id
            )
        );
		
		$viewData->item_images = $this->kongre_image_model->get_all(
            array(
                "kongre_id"    => $id
            )
        );
		

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

   public function image_upload($id){

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"]   = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");

        if($upload){

            $uploaded_file = $this->upload->data("file_name");

            $this->kongre_image_model->add(
                array(
                    "img_url"       => $uploaded_file,
                    "rank"          => 0,
                    "isActive"      => 1,
                    "isCover"       => 0,
                    "createdAt"     => date("Y-m-d H:i:s"),
                    "kongre_id"    => $id
                )
            );


        } else {
            echo "islem basarisiz";
        }

    }
public function kongre_sayfasi($id){
	
	$viewData = new stdclass();
	
		/** Tablodan Verilerin Getirilmesi.. */
        $items = $this->kongre_model->get_all(
		array(
               "id"    => $id
            )
        );
         
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "kongre_sayfasi";
		$viewData->items = $items;
		
		 
		
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	
	}
	
}
