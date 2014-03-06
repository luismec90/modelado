<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Modelado</title>

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
                <div id="label-topicos">Tópicos</div>
                <ul class="nav nav-list">
                    <li>
                        <label class="tree-toggler nav-header">1. Funciones y Modelos</label>
                        <ul class="nav nav-list tree ">
                            <li class="active"><a href="#">1.1. Definición de función, dominio, rango, gráfica de una función, prueba de la recta vertical</a></li>
                            <li><a href="#">1.2. Funciones definidas a tramos, valor absoluto, simetría, función par, impar, funciones crecientes, decrecientes. Catálogo de funciones básicas: función lineal.</a></li>
                            <li><a href="#">1.3. Catálogo de funciones básicas: polinomios (grado, raíces, función cuadrática, función cúbica), funciones de potencia, funciones racionales, funciones algebraicas y funciones trigonométricas.</a></li>
                            <li><a href="#">1.4. Transformaciones de funciones: desplazamientos verticales y horizontales, alargamientos verticales y horizontales.</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li>
                        <label class="tree-toggler nav-header">2. Límites y Derivadas</label>
                        <ul class="nav nav-list tree ocultar">
                            <li><a href="#">2.1. Límite de una función: definición intuitiva, ejemplos gráficos, ejemplos con tablas de valores límites laterales, ejemplos gráficos.</a></li>
                            <li><a href="#">2.2. Cálculo de límites: reglas básicas para el cálculo de límites, límites de funciones definidas por tramos, teorema de compresión.</a></li>
                        </ul>
                    </li>
                    <li>
                        <label class="tree-toggler nav-header">3. Reglas de Derivación</label>
                        <ul class="nav nav-list tree ocultar">
                            <li><a href="#">3.1. Derivadas de polinomios y de funciones exponenciales. Las reglas del producto y del cociente.</a></li>
                            <li><a href="#">3.2. Derivación de funciones trigonométricas. La regla de la cadena.</a></li>
                        </ul>
                    </li>
                    <li>
                        <label class="tree-toggler nav-header">4. Aplicaciones de la derivación</label>
                        <ul class="nav nav-list tree ocultar">
                            <li><a href="#">4.1. Razones de cambio de variables relacionadas</a></li>
                            <li><a href="#">2.2. Cálculo de límites: reglas básicas para el cálculo de límites, límites de funciones definidas por tramos, teorema de compresión.</a></li>
                        </ul>
                    </li>
                </ul>
            </div>