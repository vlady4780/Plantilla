<?php 

    class Login extends Controllers
    {
        public function __construct()
        {

            parent::__construct();
            
        }
        public function login()
        {
            $this->views->getView($this,"login");
        }

        public function logout()
        {
    
            // Inicializar la sesión.
            // Si está usando session_name("algo"), ¡no lo olvide ahora!
            session_start();

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

        public function logn_in()
        {      

            if($_POST)
            {
                session_start();

                $correo = $_POST['correo'];
                $clave = $_POST['clave'];

                $data = $this->model->loginUser($correo, $clave);
                print_r($data);
                if(!empty($data))
                {
                    $rol = $data[5];
                    $_SESSION['rol'] = $rol;
                    switch($_SESSION['rol']){
                        case 1:
                            header('Location:'.BASE_URL."admin");
                        break;
                  
                        case 2:
                            header('Location:'.BASE_URL."home");
                        break;
                  
                        default:
                  
                    }
                }
                //header('Location:'.BASE_URL."home/insertView");

            }            
    
        }

    }
    $login = new Login();
    $login->login();


?>