<?php 

    class adminModel extends Mysql
    {
        public function __construct()
        {
            parent:: __construct();
        }
        public function setBook(string $title, string $especialidad, string $autor, string $sede, int $age, string $ruta, string $nombre_ar)
        {
            $query_insert = "INSERT INTO proyecto(Titulo, Especialidad, Autor, Sede, Año, Ruta_archivo, Nombre_archivo) VALUES(?,?,?,?,?,?,?)";
            $arrData = array($title, $especialidad, $autor, $sede, $age, $ruta, $nombre_ar);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
        public function getBook(int $id)
        {
            $sql = "SELECT * FROM proyecto WHERE Cod_Proyecto = $id";
            $request = $this->select($sql);
            return $request;
        }
        public function getBooks()
        {
            $sql = "SELECT * FROM proyecto";
            $request = $this->select_all($sql);
            return $request;
        }
        public function UpdateBook(int $id, string $title, string $especialidad, string $autor, string $sede, int $age)
        {
            $sql= "UPDATE proyecto SET Titulo = ? , Especialidad = ?, Autor=?, Sede=?, Año=? WHERE Cod_Proyecto = $id";
            $arrData = array($title, $especialidad, $autor, $sede, $age);
            $request = $this->update($sql,$arrData);
            return $request;
        }
        public function DeleteBook(int $id)
        {
            $sql = "DELETE FROM proyecto WHERE Cod_Proyecto = $id";
            $request = $this->delete($sql);
            return $request;
        }


        public function SearchBooks($tit)
        {
            $sql = "SELECT * FROM proyecto WHERE Titulo LIKE '%'+$tit+'%'";
            $request = $this->search($sql);
            return $request;
        }

        public function getCarrers()
        {

            $sql = "SELECT * FROM carrera";
            $request = $this->select_all($sql);
            return $request;

        }

        public function getPC(string $carrera)
        {

            $sql = "SELECT*FROM proyecto WHERE Especialidad='".$carrera."'";
            $request = $this->select_all($sql);
            return $request;

        }

    }


?>