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
        /* public function veditar($id){
            if(!isset($_SESSION['rol'])){
                header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] != 2){
                    header('Location:'.BASE_URL);
                }
            }
            $data = $this->model->getBook($id);
        } */

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

        public function getProjects()
        {
            if(!isset($_SESSION['rol'])){
                header('Location:'.BASE_URL);
            }else{
                if($_SESSION['rol'] > 2){
                    header('Location:'.BASE_URL);
                }
            }
            if($_POST)
            {
                $carrera = $_POST['carrera'];
            }
            else
            {
                $carrera = '';
            }
            
            $results = $this->model->getPC($carrera);

            foreach($results as $result)
            {

                    echo '<div class="col-md-4 mt-4 mb-5 p-2 d-flex justify-content-center">';
                        echo '<div class="card" style="width: 50rem;">';
                            echo '<img src="'.BASE_URL().'Assets/img/senati.png" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                                echo '<h5 class="card-title">'.$result['Titulo'].'</h5>';
                                echo '<p class="card-text">Especialidad: '.$result['Especialidad'].'</p>';
                                echo '<p class="card-text">Autor: '.$result['Autor'].'</p>';
                                echo '<p class="card-text">Sede: '.$result['Sede'].'</p>';
                                echo '<p class="card-text">Año: '.$result['Año'].'</p>';
                                echo '<a href="'.BASE_URL().'Proyecto/verProyecto/'.$result['Cod_Proyecto'].'">Ver</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';

            }

        }

    }

?>
