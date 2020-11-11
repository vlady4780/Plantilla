<?php

    class Proyecto extends Controllers
    {

        public function __construct()
        {

            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 

            parent::__construct();
            
        }

        public function verProyecto($id)
        {
            if(!isset($_SESSION['rol'])){
                header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] > 2){
                    header('Location:'.BASE_URL);
                }
            }
            $data = $this->model->getProject($id);
            $this->views->getView($this,"proyecto",$data);
            
        }

    }

?>