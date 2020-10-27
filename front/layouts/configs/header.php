<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
    <link rel="shortcut icon" href="./assets/img/unesp-logo-11.png">
    <link rel="stylesheet" href="./assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- js -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/jquery.mask.min.js"></script>
    <script src="./assets/js/angular.min.js"></script>

    <style>
        .div1{
            padding-top: 20px;
        }
        .div2{
            padding-top: 20px;
            padding-left: 15px;
            padding-right: 15px;
        }
        .btnmenu{
            box-shadow: 10px 5px 5px grey;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
        <a class="navbar-brand" href="menu.php">
            <img src="./assets/img/unesp-logo-8.png" class="logo-mini" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Dados em tempo Real</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customizacao.php">Configuração de rede</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configuração de parâmetro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="outros_produtos.php">Graficos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id="wrap">
    <div id="main" class="container-fluid clear-top">
