<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<head>
    <title>Pagina Web</title>    
    <link href="css/icons/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header class="header-container">
            <section class="logo-module">
                <a><i class="fa-solid fa-seedling"></i></a>
            </section>
            <section class="title-module">
                <p>cuidemos el medio ambiente</p>
            </section>
            <section class="nav-module">
                <nav class="nav-module">
                    <a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Inicio</a>
                    <a href="problematica.php" class="<?= ($current_page == 'problematica.php') ? 'active' : '' ?>">Problematica</a>
                    <a href="soluciones.php" class="<?= ($current_page == 'soluciones.php') ? 'active' : '' ?>">Soluciones</a>
                    <a href="formulario.php" class="<?= ($current_page == 'formulario.php') ? 'active' : '' ?>">Formulario</a>
                </nav>
            </section>
    </header>
</body>