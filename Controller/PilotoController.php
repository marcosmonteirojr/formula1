<?php

class PilotoController{
    public static function index(){
        
        include 'Model/PilotoModel.php'; 
        
        $piloto = new PilotoModel(); 
        $piloto->getAllRows();
        //print_r($piloto);
        //die(); 
        $page = 'View/modulos/Piloto/ListaPiloto.php';
        include 'View/layout/topo.php';
       // include 'View/modulos/Piloto/ListaPiloto.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    
    }
    public static function form()
    {
        include 'Model/PilotoModel.php';
        $piloto = new PilotoModel();

        if(isset($_GET['id'])) 
            $piloto = $piloto->getById( (int) $_GET['id']); 
        //include 'View/modulos/Piloto/FormPiloto.php'; 
        $page = 'View/modulos/Piloto/FormPiloto.php';
        include 'View/layout/topo.php';

    }
    public static function save()
    {
       include 'Model/PilotoModel.php'; // inclusão do arquivo model.

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $piloto = new PilotoModel();

       $piloto->id =  $_POST['id'];
       $piloto->nome = $_POST['nome'];
       $piloto->sobrenome = $_POST['sobrenome'];
       $piloto->equipe = $_POST['equipe'];
        
       $piloto->save(); 
       header("Location: /piloto"); 
    }
    
    public static function delete()
    {
        include 'Model/PilotoModel.php'; 

        $model = new PilotoModel();

        $model->delete( (int) $_GET['id'] ); 
        header("Location: /piloto"); 
    }

}