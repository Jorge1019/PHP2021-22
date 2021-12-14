<?php
class Cliente extends CI_Controller {
    public function c() {
        $this->load->model("Localidad_model");
        $data['localidades'] =$this->Localidad_model->getAll();
        
        
        
        
        frame($this,'Cliente/c',$data);
        
        
        
        
        
    }
    
    public function cPost() {
        $nombre=isset($_POST["nombre"])?$_POST["nombre"]:null;
        $localidad=isset($_POST["localidad"])?$_POST["localidad"]:null;
        $this->load->model("Cliente_model");
        $this->Cliente_model->c($nombre,$localidad);
        
        $data['clientes'] =$this->Cliente_model->getAll();
        
        frame($this,'Cliente/r',$data);
        
        
        
    }
    
    
    
    
    
    
    
}