<!-- estructura DOM (Document Objet Model) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<!-- aqui se ve todo el contenido que ve el usuario -->
<!-- cabecera del sitio y menu de navegación-->
<header>
    <h1>Cabecera</h1>
    <!-- llamada menu php -->
 <?php include('partials/menu.php');?>
    </nav>
</header>
<!-- cuerpo cental de la pagina web -->
<section>
    <h1>Titulo de mi primera pagina</h1>
    <h4>Este es un subtitulo</h4>
    contenido principal
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi possimus id, cumque iusto molestiae doloribus. Qui perferendis corporis ea dolorem repellendus reprehenderit, aspernatur atque possimus ullam, facilis quos sit tempore.</p>
    <a href="a">Ver mas</a>
</section>

<!-- pie de pagina -->
<footer>
    <?php include('partials/footer.php');?>

</footer>

</body>
</html>