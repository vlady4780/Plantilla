<?php

    class Proyecto extends Controllers
    {

        public function __construct()
        {
            parent::__construct();
            
        }

        public function Proyecto($id)
        {
            $data = $this->model->getProject($id);
            $this->views->getView($this,"proyecto",$data);
            
        }

    }

?>