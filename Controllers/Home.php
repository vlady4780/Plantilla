<?php
    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
            
        }

        public function home()
        {
            $data['pag_id'] = 26;
            $data['tag_page'] = "Home";
            $data['tag_title'] = "Página principal";
            $data['tag_name'] = "Home";
            $data['pag_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, sed iste? Quasi qui porro quae ratione? Veritatis iste natus rerum molestias mollitia accusantium, dicta architecto illo voluptate iusto laboriosam a.";
            $this->views->getView($this,"home",$data);
        }
        public function logout()
        {
            session_start();
            session_destroy();
            header("Location: ../login");
        }
        public function insert()
        {
            $data = $this->model->setBook("escrito por un tal asjmaksasdonkis","El gen egoisto");
            print_r($data);
        }
        public function getBook($id)
        {
            $data = $this->model->getBook($id);
            print_r($data);
        }
        public function getBooks()
        {
            $data = $this->model->getBooks();
            print_r($data);
        }
        public function Update()
        {
            $data = $this->model->UpdateBook(1,"La","Pasas");
            print_r($data);
        }
        public function Delete($id)
        {
            $data = $this->model->DeleteBook($id);
            print_r($data);
        }
       
    }

?>
