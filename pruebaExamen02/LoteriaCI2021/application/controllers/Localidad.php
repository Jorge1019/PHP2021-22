<?php
class Localidad extends CI_Controller {
    public function c() {
        frame($this,'Localidad/c');
    }
    public function cPost() {
        $nombre=isset($_POST["nombre"])?$_POST["nombre"]:null;
        $provincia=isset($_POST["provincia"])?$_POST["provincia"]:null;
        $this->load->model("Localidad_model");
        $this->Localidad_model->c($nombre,$provincia);
        $data['localidades'] =$this->Localidad_model->getAll();
    
        
     
            
            frame($this,'Localidad/r',$data);
           
       
    }

   
}
