<?php
    class Admin extends Controllers
    {
        public function __construct()
        {

            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 

            parent::__construct();
            
        }
        // Métodos dentro de la vista admin
        public function admin()
        {

            if(!isset($_SESSION['rol'])){
                    header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] != 1){
                    header('Location:'.BASE_URL);
                }
            }

            $data = $this->model->getCarrers();
               
            $request = $this->model->getBooks();
            
            $this->views->getView($this,"admin",$data,$request);
            //$this->views->getView($this,"admin",$data,$request);
            
        }
        public function veditar($id){
            $data = $this->model->getBook($id);
        }

        public function logout()
        {
    

            // Destruir todas las variables de sesión.
            $_SESSION = array();

            // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
            // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }

            // Finalmente, destruir la sesión.
            session_destroy();
            header('Location:'.BASE_URL);
            
        }
        //Insert method and view
        public function insertView($id)
        {

            if(!isset($_SESSION['rol'])){
                    header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] != 1){
                    header('Location:'.BASE_URL);
                }
            }

            if(!empty($id))
            {
                $data = $this->model->getBook($id);

                $this->views->getView($this,"insert", $data);
            }
            else
            {
                $this->views->getView($this,"insert");
            }
            
        }
        public function insert()
        {

            //PDF Config
            
            $nombre_imagen=$_FILES['archivo']['name'];

            $tipo_pdf=$_FILES['archivo']['type'];

            $tamano_pdf=$_FILES['archivo']['size'];

            $ruta=$_SERVER['DOCUMENT_ROOT'].'/proyectos/Plantilla/Docs/';

            move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta.$nombre_imagen);

            //

            $titulo = $_POST['tit'];
            $especialidad = $_POST['esp'];
            $autor = $_POST['aut'];
            $sede = $_POST['sed'];
            $age = $_POST['age'];
            
            
            $data = $this->model->setBook($titulo,$especialidad, $autor, $sede, $age, $ruta, $nombre_imagen);
            header('Location:'.BASE_URL."admin/insertView");

        }
        //
        public function listView()
        {


            if(!isset($_SESSION['rol'])){
                    header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] != 1){
                    header('Location:'.BASE_URL);
                }
            }

            $data['getbooks'] = $this->model->getBooks();
            $this->views->getView($this,"list",$data);
            
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
            $titulo = $_POST['tit'];
            $especialidad = $_POST['esp'];
            $autor = $_POST['aut'];
            $sede = $_POST['sed'];
            $age = $_POST['age'];
            $data = $this->model->UpdateBook($id, $titulo,$especialidad, $autor, $sede, $age);
            header('Location:'.BASE_URL."admin");
        }
        public function Delete($id)
        {

            if($_POST)
            {

                $data = $this->model->DeleteBook($id);
                header('Location:'.BASE_URL."admin/listView");

            }
            die;
   
        }

    }

?>
