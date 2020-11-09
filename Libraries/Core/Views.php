<?php 

    class Views
    {

        function getView($controller, $view,$data="", $request="")
        {
            $controller = get_class($controller);
            if ($controller == "Login") 
            {
                $view = "Views".'/'.$view.".php";
            }else
            {
                $view = "Views".'/'.$controller.'/'.$view.".php";
            }      
            require_once($view);
        }

    }

?>