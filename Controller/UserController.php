<?php
include_once 'Util/ValidacaoUtil.php';
include_once 'Util/HelperUtil.php';

class UserController
{
    public static function index()
    {
        

    }

    public static function form()
    {
        include 'Model/UserModel.php';       
        
       

        $user = new UserModel();

        $title = 'Cadastro';
        $page = 'View/modulos/User/FormUser.php';
        include 'View/layout/topo.php';
    }

    public static function save()
    {
        include 'Model/UserModel.php'; // inclusão do arquivo model.

        // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
    

        $user = new UserModel();
        
        $user->email = $_POST['email'];
        $user->senha = $_POST['senha'];

        print_r($user->email);
        $user->save();
        $erro = 0;


        /*
       $piloto->id =  $_POST['id'];
       $piloto->nome = $_POST['nome'];
       $piloto->sobrenome = $_POST['sobrenome'];
       $piloto->equipe = $_POST['equipe'];
       $piloto->save(); 
       
        if ($erro == 0) {
           Helper::limpaForm();
            $user->save();
            
            header("Location: /user");
        } else {

            header("Location: /user/form");
        }
        */
    }

    public static function delete()
    {
        
    }
}
