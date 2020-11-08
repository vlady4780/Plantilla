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
            $data['pag_id'] = 26;
            $data['tag_page'] = "Home";
            $data['tag_title'] = "Página principal";
            $data['tag_name'] = "Home";
            $data['pag_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, sed iste? Quasi qui porro quae ratione? Veritatis iste natus rerum molestias mollitia accusantium, dicta architecto illo voluptate iusto laboriosam a.";
            $data['getbooks'] = $this->model->getBooks();
            $this->views->getView($this,"home",$data);
            
        }
        public function veditar($id){
            $data = $this->model->getBook($id);
            $this->views->getView($this,"editar",$data);
        }

        public function logout()
        {
            session_start();
            session_destroy();
            header("Location: ../login");
        }

        public function veinsertar(){
            $this->views->getView($this,"crear");

        }

        public function insert()
        {
            $descripcion = $_POST['des'];
            $titulo = $_POST['tit'];
            $data = $this->model->setBook($descripcion,$titulo);
            header('Location: ../Home');  //sdasd

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
            $id = $_POST['id'];
            $tit = $_POST['tit'];
            $des = $_POST['des'];
            $data = $this->model->UpdateBook($id,$tit,$des);
            header('Location: ../Home'); 
        }
        public function Delete($id)
        {
            $data = $this->model->DeleteBook($id);
            header('Location: ../Home');  //sdasd
        }

        public function Search()
        {
            $tit = $_POST['tit'];
            $data = $this->model->SearchBooks($tit);
            $this->views->getView($this,"search",$data);

        }


       
    }

?>
