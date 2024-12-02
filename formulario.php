<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
<article class="container">
            <?php include 'header.php'  ?>
                <main>
                <section class="main-module">
                        <section class="line">
                            <h1>brindanos tú opinion</h1>
                        </section>
                        <section class="form-module">
                            <form action="#" method="POST">
                            <label for="nombre">Nombre del Alumno:</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                            <label for="opinion">Tú Opinión:</label>
                            <textarea id="opinion" name="opinion" rows="5" placeholder="Escribe tu opinión aquí..."></textarea>
                            <button type="submit">Enviar Opinión</button>
                        </section>
                </main>
            </section>
            <?php include 'footer.php'  ?>
        </article>
</body>
</html>