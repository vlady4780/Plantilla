<?php 

    class homeModel extends Mysql
    {
        public function __construct()
        {
            parent:: __construct();
        }
        public function setBook(string $description, string $title)
        {
            $query_insert = "Insert into biblioteca(descripcion,titulo) values(?,?)";
            $arrData = array($description,$title);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
        public function getBook($id)
        {
            $sql = "Select*From biblioteca where id = $id";
            $request = $this->select($sql);
            return $request;
        }
        public function getBooks()
        {
            $sql = "Select*From biblioteca";
            $request = $this->select_all($sql);
            return $request;
        }
        public function UpdateBook(int $id, string $descripcion,string $titulo)
        {
            $sql= "Update biblioteca set titulo = ? , descripcion = ? Where id = $id";
            $arrData = array($titulo,$descripcion);
            $request = $this->update($sql,$arrData);
            return $request;
        }
        public function DeleteBook($id)
        {
            $sql = "Delete from biblioteca where id = $id";
            $request = $this->delete($sql);
            return $request;
        }
    }


?>