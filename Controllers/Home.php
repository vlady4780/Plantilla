<?php
    class Home extends Controllers
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
        public function home()
        {

            if(!isset($_SESSION['rol'])){
                    header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] != 2){
                    header('Location:'.BASE_URL);
                }
            }

            $data = $this->model->getCarrers();
            $this->views->getView($this,"home",$data);
            
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
            
        }

    }

?>
