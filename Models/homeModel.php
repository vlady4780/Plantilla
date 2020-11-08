<?php 

    class homeModel extends Mysql
    {
        public function __construct()
        {
            parent:: __construct();
        }
        public function setBook(string $description, string $title)
        {
            $query_insert = "INSERT INTO biblioteca(descripcion,titulo) VALUES(?,?)";
            $arrData = array($description,$title);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
        public function getBook($id)
        {
            $sql = "SELECT * FROM biblioteca where id = $id";
            $request = $this->select($sql);
            return $request;
        }
        public function getBooks()
        {
            $sql = "SELECT * FROM biblioteca";
            $request = $this->select_all($sql);
            return $request;
        }
        public function UpdateBook(int $id, string $descripcion,string $titulo)
        {
            $sql= "UPDATE biblioteca SET titulo = ? , descripcion = ? WHERE id = $id";
            $arrData = array($titulo,$descripcion);
            $request = $this->update($sql,$arrData);
            return $request;
        }
        public function DeleteBook($id)
        {
            $sql = "DELETE FROM biblioteca WHERE id = $id";
            $request = $this->delete($sql);
            return $request;
        }


        public function SearchBooks($tit)
        {
            $sql = "SELECT * FROM biblioteca WHERE titulo LIKE '%'+$tit+'%'";
            $request = $this->search($sql);
            return $request;
        }
    }


?>