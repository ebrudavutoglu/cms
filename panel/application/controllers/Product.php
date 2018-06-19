<?php

class Product extends CI_Controller{
    public $viewFolder = "";
    public function __construct(){
        parent::__construct();
        $this->viewFolder="product_v";
        $this->load->model("product_model");
    }

    public function index(){

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        /* Tablodan verilerin getirilmesi */
        $items = $this->product_model->get_all();
        /*View'e gönderilecek değişkenlerin set edilmesi */
        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save(){
        
        $this->load->library("form_validation");
        //Kurallar yazilir.
        $this->form_validation->set_rules("title","Başlık","required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "{field} alanı doldurulmalıdır."
            )
        );
        // Form Validation calistirilir.
        $validate = $this->form_validation->run();

        //Monitor Askısı - Ürün İsmi
        //monitor-askisi - Ürün Url
        if($validate){
            $insert = $this->product_model->add(
                array(
                    "title"         =>$this->input->post('title'),
                    "description"   =>$this->input->post("description"),
                    "url"           => "test...",
                    "rank"          =>0,
                    "isActive"      =>1,
                    "createdAt"     => date("Y-m-d H:i:s")
                )
            );
            if($insert){
                echo "kayıt tamama";
            }else{
                echo "başarısız";
            }
        }else{
            
            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
        //Basarili ise Kayit islemi baslar
        //Basarisiz ise Hata ekranda gorunur

        



    }
}