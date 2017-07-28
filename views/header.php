<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Vistas: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Vistas</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>
        
        <h1>Ventas</h1>

        <div class="container">

            <div id="top">
                <div>
                    
                </div>
                <?php // if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="prod.php">Producto</a></li>
                        <li><a href="cliente.php">Cliente</a></li>
                        <li><a href="venta.php">Ventas</a></li>
                        <li><a href="deta.php">Detalle</a></li>
                    </ul>
                <?php //endif ?>
            </div>

            <div id="middle">
