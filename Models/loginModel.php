<?php

    class loginModel extends Mysql
    {

        private $intIdUsuario;
        private $strCorreo;
        private $strPassword;
        private $strToken;

        public function __construct()
        {
            parent:: __construct();
        }

        public function loginUser(string $correo, string $password)
        {
            $sql = "SELECT*FROM usuario WHERE User_Email ='$correo' AND User_Clave='$password'";
            $request = $this->select_withNumber($sql); 
            return $request;
        }

    }

?>