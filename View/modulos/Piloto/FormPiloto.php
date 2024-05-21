<?php
include_once 'Util/HelperUtil.php';
?>  
<div class="container">
<form action="/piloto/form/save" method="POST">
    <div class="form-group">
        <input type="hidden" value="<?=  $piloto->id ?>" name="id" />
        <label for="nome">Nome do Piloto:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($piloto->nome)? $piloto->nome: Helper::getForm('nome') ?>">
        <label for="sobrenome">Sobrenome do Piloto:</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?= isset($piloto->sobrenome)? $piloto->sobrenome: Helper::getForm('sobrenome') ?>">
        <label for="equipe">Equipe:</label>
        <input type="text" class="form-control" name="equipe" id="equipe" value="<?= isset($piloto->equipe)? $piloto->equipe:Helper::getForm('equipe') ?>">
        <input type="submit" name="cadastrarPais" class="btn btn-primary" value="Salvar"></input>
    </div>
</form>
</div>
<div bg bg-color-danger>
    <?php
        Helper::limpaForm();
        echo Helper::getMessagem();
    ?>
</div>
<?php
//$pagina = 'View/modulos/Piloto/FormPiloto.php';/
//include('View/layout/topo.php');
?>

