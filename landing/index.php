<?php
// Redireccionar
require 'direccion.php';

require_once('model/conection.php');
require_once('controller/controller_index.php');

$controlador_index = new controlador_index();

$uriSplit = explode('/', $_SERVER['REQUEST_URI']);

if (isset($uriSplit[1]) && isset($uriSplit[2])) {

    #Metodo
    $metodo = $uriSplit[2];

    #Controlador
    $controlador = $uriSplit[1];
    $uriSplit = explode('/', $_SERVER['REQUEST_URI']);

    switch ($controlador) {
        case "calendar":
            if (method_exists($controlador_login, $metodo)) {
                $controlador_login->$metodo();
            } else {
                $controlador_index->index();
            }
            break;

        default:
            $controlador_index->index();
            break;
    }
} else {
    $controlador_index->index();
}
