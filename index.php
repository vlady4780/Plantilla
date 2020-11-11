<?php
    require_once("Config/config.php");
    require_once("Helpers/Helpers.php");

    $url = !empty($_GET['url']) ?  $_GET['url'] : 'Login/login';
    $arrurl = explode('/',$url);
    $controller = $arrurl[0];
    $method = $arrurl[0];
    $params = "";

    if(!empty($arrurl[1]))
    {
        if($arrurl[1] != "")
        {
            $method = $arrurl[1];
        }
    }
    if(!empty($arrurl[2]))
    {
        if($arrurl[2] != "")
        {
            for ($i=2; $i < count($arrurl); $i++) { 
                $params .= $arrurl[$i].',';
            }
            $params = trim($params,',');
            
        }
    }

    require_once("Libraries/Core/Autoload.php");
    //Load
   require_once("Libraries/Core/Load.php");
?>