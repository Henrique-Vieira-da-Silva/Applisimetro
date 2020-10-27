<?php
$title = 'Menu';
require './layouts/menu/header.php';
?>
<div class="row div1">
    <div class="col-12">
        <button href="dadostr.php" class=" btnmenu bg-blue navbar-light col-md-12" style="height:200px; width:100%">
            <b>Dados em tempo Real</b>
        </button>
    </div>
</div>

<div class="row div2">
    <div class="col-6">
        <button href="config_rede.php" class="btnmenu bg-blue navbar-light" style="height: 100px">
            <b>Configuração de rede</b>
        </button>
    </div>
    <div class="col-6">
        <button href="config_parametro.php" class="btnmenu bg-blue navbar-light col-md-6" style="height: 100px">
            <b>Configuração de parâmetro</b>
        </button>
    </div>
</div>

<div class="row div2">
    <div class="col-12">
        <button href="dadostr.php" class="btnmenu bg-blue navbar-light col-md-12" style="height:200px; width:100%">
            <b>Graficos</b>
        </button>
    </div>
</div>
<?php
require './layouts/menu/footer.php';
?>
