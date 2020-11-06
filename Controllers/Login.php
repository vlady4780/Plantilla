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
        public function sign_in()
        {
            header('location:../home');
        }

    }
    $login = new Login();
    $login->login();

?>