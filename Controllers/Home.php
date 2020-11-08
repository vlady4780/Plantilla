<?php
    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
            
        }
        // Métodos dentro de la vista Home
        public function home()
        {
            $data['getbooks'] = $this->model->getBooks();
            $this->views->getView($this,"home",$data);
            
        }
        public function veditar($id){
            $data = $this->model->getBook($id);
        }

        public function logout()
        {
            session_start();
            session_destroy();
            header('Location:'.BASE_URL);;
        }

        public function insert()
        {
            $descripcion = $_POST['des'];
            $titulo = $_POST['tit'];
            $data = $this->model->setBook($descripcion,$titulo);
            header('Location:'.BASE_URL."home");

        }
        public function getBook($id)
        {
            $data = $this->model->getBook($id);
    
        }
        
        
        public function getBooks()
        {
            $data = $this->model->getBooks();
            print_r($data);
        }
        public function Update()
        {
            $id = $_POST['idU'];
            $tit = $_POST['titU'];
            $des = $_POST['desU'];
            $data = $this->model->UpdateBook($id,$tit,$des);
            header('Location:'.BASE_URL."home");
        }
        public function Delete($id)
        {
            $data = $this->model->DeleteBook($id);
            header('Location:'.BASE_URL."home");
        }

    }

?>
