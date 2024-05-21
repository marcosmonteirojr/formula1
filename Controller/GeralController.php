<?php
class GeralController{
    public static function index(){
        
        $title = "Home";
        $page = 'View/Formula1.php';
        include 'View/layout/topo.php';
        //include 'View/modulos/Piloto/ListaPiloto.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    
    }
}
?>