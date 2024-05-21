<?php

?>  
<div class="container">
<form action="/piloto/form/save" method="POST">
    <div class="form-group">
        <input type="hidden" value="<?= $piloto->id ?>" name="id" />
        <label for="nome">Nome do Piloto:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?= $piloto->nome ?>">
        <label for="sobrenome">Sobrenome do Piloto:</label>
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?= $piloto->sobrenome ?>">
        <label for="equipe">Equipe:</label>
        <input type="text" class="form-control" name="equipe" id="equipe" value="<?= $piloto->equipe ?>">
        <input type="submit" name="cadastrarPais" class="btn btn-primary" value="Salvar"></input>
    </div>
</form>
</div>
<div bg bg-color-danger>
    <?php
    include_once 'Util/HelperUtil.php';
        echo Helper::getMessagem();
    ?>
</div>
<?php
//$pagina = 'View/modulos/Piloto/FormPiloto.php';/
//include('View/layout/topo.php');
?>

