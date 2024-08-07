<?php

include 'Controller/PilotoController.php';
include 'Controller/GeralController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/':
        GeralController::index();
    break;

    case '/piloto':
        
        PilotoController::index();
    break;

    case '/piloto/form':
        PilotoController::form();
    break;

    case '/piloto/form/save':
        PilotoController::save();
    break;

    case '/piloto/delete':
        PilotoController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}