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
    <?php include('partials/menu.php');?>
    
</header>
<!-- cuerpo cental de la pagina web -->
<section>
    <h1>Nuestra Empresa</h1>
   <article class="derecho">
            <img src="img/portada_mia.jpg" alt="Imagen empresa" style="width:96%; margin-right:4%" >
   </article>

   <article class="izquierdo">
            <div class="texto">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque sint illo est, facere odit excepturi aut necessitatibus numquam quas saepe accusamus deleniti incidunt. Repellat nihil debitis ullam maxime eveniet quisquam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima molestias fugit est maiores ut pariatur quos ratione asperiores animi? Nostrum quis, facilis officia ea accusamus error consequuntur perspiciatis similique laudantium!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas minima fugiat odio harum. Modi provident blanditiis, labore hic soluta temporibus ex commodi tempore similique accusantium incidunt sint debitis. Odio, sit.</p>
            </div>
            
            <div class="video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/tgUurjkdlSo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
   </article>
    
</section>

<!-- pie de pagina -->
<footer>
    <?php include('partials/footer.php');?>
</footer>

</body>
</html>