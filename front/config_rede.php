<?php
$title = 'Menu';
require './layouts/configs/header.php';
?>

<form autocomplete="off" method="POST" class="form" action="controllers/cadastroController.php">
    <div class="form-group">
        <label class="label-control">Endereço Ip</label>
        <input type="text" name="enderecoIp" class="form-control" autocomplete="off"/>
    </div>
    <div class="form-group">
        <label class="label-control">Numero de série</label>
        <input type="text" name="numeroSerie" class="form-control" autocomplete="off"/>
    </div>
    <div class="form-group">
        <label class="label-control">Senha</label>
        <input type="text" name="senha" class="form-control" autocomplete="off"/>
    </div>
</form>

<?php
require './layouts/configs/footer.php';
?>
