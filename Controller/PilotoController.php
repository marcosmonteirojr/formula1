<?php
include_once 'Util/ValidacaoUtil.php';
include_once 'Util/HelperUtil.php';

class PilotoController
{
    public static function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        include 'Model/PilotoModel.php';

        $piloto = new PilotoModel();
        $piloto->getAllRows();
        //print_r($piloto);
        //die(); 
        $title="Lista de Pilotos";
        $page = 'View/modulos/Piloto/ListaPiloto.php';
        include 'View/layout/topo.php';
        // include 'View/modulos/Piloto/ListaPiloto.php'; // Include da View, propriedade $rows da Model pode ser acessada na View

    }
    public static function form()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        include 'Model/PilotoModel.php';
        $piloto = new PilotoModel();

        if (isset($_GET['id']))
            $piloto = $piloto->getById((int) $_GET['id']);
        //include 'View/modulos/Piloto/FormPiloto.php'; 
        $title = 'Cadastro';
        $page = 'View/modulos/Piloto/FormPiloto.php';
        include 'View/layout/topo.php';
    }
    
    public static function save()
    {
        include 'Model/PilotoModel.php'; // inclusão do arquivo model.

        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $piloto = new PilotoModel();
        $piloto->id =  $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $equipe = $_POST['equipe'];
        $erro = 0;


        if (Validacao::validarTexto($nome, 3, 50)) {
            $piloto->nome = $nome;
            print_r("erro");
        } else {
            Helper::setMessagem("danger","Nome inválido");
            $erro = 1;
        }
        if (Validacao::validarTexto($sobrenome, 3, 50)) {
            $piloto->sobrenome = $sobrenome;
        } else {
            Helper::setMessagem("danger","Sobreome inválido");
            $erro = 1;
        }
        if (Validacao::validarTexto($equipe, 3, 50)) {
            $piloto->equipe = $equipe;
        } else {
            Helper::setMessagem("danger","Nome da equipe está inválido");
            $erro = 1;
        }
        /*
       $piloto->id =  $_POST['id'];
       $piloto->nome = $_POST['nome'];
       $piloto->sobrenome = $_POST['sobrenome'];
       $piloto->equipe = $_POST['equipe'];
       $piloto->save(); 
       */
        if ($erro == 0) {
            $piloto->save();
            header("Location: /piloto");
        } else {
            header("Location: /piloto/form");
        }
    }

    public static function delete()
    {
        include 'Model/PilotoModel.php';

        $model = new PilotoModel();

        $model->delete((int) $_GET['id']);
        header("Location: /piloto");
    }
}
