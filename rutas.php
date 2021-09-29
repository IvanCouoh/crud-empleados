<?php


    include_once("controllers/".$controller."_control.php");
    $objController = ucfirst($controller)."Control";

    $controller = new $objController;
    $controller->$action();

?>