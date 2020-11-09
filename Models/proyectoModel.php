<?php

    class proyectoModel extends Mysql
    {

        public function __construct()
        {
            parent:: __construct();
        }

        public function getProject(int $id)
        {
            $sql = "SELECT * FROM proyecto WHERE Cod_Proyecto = $id";
            $request = $this->select($sql);
            return $request;
        }

        public function getProjects()
        {
            $sql = "SELECT * FROM proyecto";
            $request = $this->select_all($sql);
            return $request;
        }

    }

?>