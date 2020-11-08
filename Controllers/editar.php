<?php 

    class Editar extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
            
        }
        public function editar()
        {
            $this->views->getView($this,"editar");
            
        }
        public function crear()
        { 
            $this->views->getView($this,"crear");
            
        }

    }
?>