<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Landing Page Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/bootstrap-3.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/font-awesome-4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/global.css">
        <?php if (isset($css)) foreach ($css as $row) { ?>
                <link rel="stylesheet" href="<?= base_url() ?>assets/<?= $row ?>.css">
            <?php } ?>

        <!-- Custom Google Web Font -->
        <!--        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

        <!-- Add custom CSS here -->
        <!--<link href="css/landing-page.css" rel="stylesheet">-->

    </head>

    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a href="#">Tópicos</a>
                    </li>
                    <li><a href="#">1.1.Definición de función, dominio, rango, gráfica de una función, prueba de la recta vertical.</a>
                    </li>
                    <li><a href="#">1.2.Funciones definidas a tramos, valor absoluto, simetría, función par, impar, funciones 
                            crecientes, decrecientes. Catálogo de funciones     básicas: función lineal.    </a>
                    </li>
                    
                </ul>
            </div>