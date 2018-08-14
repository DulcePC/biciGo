<?php
    require 'funciones.php';
    $conexion = conexion ('bicigo', 'root','');
    if(!$conexion){
        die();
    }
    //paginacion para nuestro adm
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $postPorPagina = 6; //cuanto post queremos mostrar por pagina
    // para saber desde donde vamos a traer los articulos, $inicio va a atraer desde el post numero 5, 5 articulos
    $inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
    //que nos traiga todos los articulos de la tabla con un limite porque si no estariamos trayendo todos, 
    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM bicicleta ORDER BY id DESC LIMIT $inicio, $postPorPagina");
    $articulos->execute();
    $articulos = $articulos->fetchAll();
    $totalArticulos = $conexion->query("select FOUND_ROWS() as total");
    $totalArticulos = $totalArticulos->fetch()['total'];
    //echo $totalArticulos; //(nos traera el total de articylos que tenemos en la base de datos)
    $numeroPaginas = ceil($totalArticulos / $postPorPagina);// se le pone ceil para redondear hacia arriba si es que hay decimales  el numero de paginas es igual a todos los articulos de la base de das ppor los porst que queremos mostrar en la pagna
    //echo $numeroPaginas; //(para saber el numero de paginas que tenemos (osea dependiendo los articulos))
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>biciGo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/usuario.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>
<body> 
    <div class="submenu">
       <div class="container">
           <ul class="col l12">
               <li class="col s3"><a class="modal-trigger" href="login.php"><i class="material-icons tiny">lock_open</i>Entra</a></li>
               <li class="col s3"><a class="modal-trigger" href="registrate.php"><i class="material-icons  tiny">lock_open</i>Registrate<a></li>
               <li class="col s3"><a><i class="material-icons tiny">mail</i>bicigo@gmail.com</a></li>
           </ul>
       </div>
    </div>
    <nav class="navprincipal"> 
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><span id="b">B</span>iciGo</a>
            <a href="buscar.php"><i class="material-icons right show-on-small">search</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="categoria.php">Categorias</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#noticias">Noticias</a></li>
                <li><a href="#eventos">Eventos</a></li>
            </ul>
        </div>
    </nav>
    <section id="wrapper" class="skewed">
        <div class="layer bottom">
            <div class="content-wrap">
                <div class="content-body col l12">
                    <h1>Piezas</h1>
                    <p>Encuentra las piezas faltantes para mejorar tu bicicletas! </p>
                    <a href="categoria.php" class="btn btn-small orange col s3">Categorias</a>
                </div>
                <img src="img/bici2.jpg">
            </div>
        </div>
        <div class="layer top">
            <div class="content-wrap">
                <div class="content-body ">
                    <h1>BiciGo</h1>
                    <p>Subscribete para que puedas publicar tu bicicleta hoy mismo!</p>
                    <a href="registrate.php" class="btn btn-small green col s3">Subscribete</a>
                </div>
                <img src="img/bici1.jpeg">
            </div>
        </div>
        <div class="handle"></div>
    </section>
    <div class="ventas" id="ventas">
        <div class="container titulo">
            <h3>Ventas</h3>
            <h6>Encuentra tu bicicleta ahora</h6>
        </div>
        <div class="row">
            <div class="col l6 right">
                <div class="right" id="buscar">
                    <a href="buscar_bicicleta.php"><i class="right material-icons show-on-small">search</i></a>
                </div>
            </div>
        </div>
        <div class="ventas resp-container" id="ventas">
            <iframe class="resp-iframe" src="ventas.php"></iframe>
        </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici8.jpg"></div>
    </div>
    <section class="nosotros" id="nosotros">
        <div class="container">
            <div class="titulo">
                <h3>Nosotros</h3>
                <h6>Deseas saber un poco mas sobre nosotros?</h6>
            </div>
        </div>
       <div class="row">
           <div class="container">
                <div class="col l12 m12 s12">
                    <div class="contenedor">
                        <div class="texto">
                            <h3>BiciGo</h3>
                            <p>Bicigo es una pagina inspirada en el mundo del ciclismo, tratando de estar actualizados de la forma mas activa de lo que pasa en esta area en Republica Dominicana.</p>
                            <p>Tambien podras encontrar de forma rapida y sencilla todos los productos y artefactos relacionados al area, de forma segura para nuestros clientes vivimos cada dia mejorando el proceso de compras.</p>
                        </div>
                        <a href="registrate.php" class="green btn btn-small right" id="suscribete">Suscribete</a>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici10.jpg"></div>
    </div>
    <section class="actividades ">
        <div class="noticias" id="noticias">
            <div class="titulo">
                <h4>Noticias</h4>
            </div>
            <div class="container contenedorEventos">
                <div class="row">
                    <?php foreach($posts as $post): ?>
                        <div class="col l6 m6 s12">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator img_noticias" src="<?php echo RUTA; ?>/fotos/<?php echo $post['thumb'];  ?>">
                                    </div>
                                    <div class="card-content thumb">
                                        <span class="card-title activator grey-text text-darken-4 titulo_noticia"><?php echo $post['titulo'];?><i class="material-icons right">more_vert</i></span>
                                        <p class="continuar"><a href="single.php?id=<?php echo $post['id']; ?>">Ver mas</a></p>
                                    </div>
                                    <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php echo $post['titulo'];  ?><i class="material-icons right">close</i></span>
                                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                                    <p class="extracto"><?php echo $post['extracto'];  ?></p>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="center">  
                        <?php require 'paginacion.php'?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="eventos" id="eventos">
            <div class="titulo">
                <h4>Eventos</h4>
            </div>
            <div class="container contenedorEventos">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/bici11.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Corre por la vida<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Ver mas</a></p>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/bici11.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Corre por dinero<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Ver mas</a></p>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici8.jpg"></div>
    </div>
    <div class="equipo">
        <div class="titulo">
            <h4>Nuestro equipo</h4>
            <div class="container">
                <div class="row row2">
                    <div class="col l6 s6 m6">
                        <div class="dulce z-depth-5">
                            <img src="img/dulceImg.jpg" class="dulceImg">
                            <div class="overlay">
                                <div class="contacto">
                                    <h5>Dulce Perez</h5>
                                    <h6>Web Designer</h6>
                                    <div class="col l6 s6 m6 social-nav model-3d-0 ">
                                        <a href="https://www.facebook.com/alicia.perez.79219" class="facebook">
                                            <div class="front">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col l6 s6 m6 social-nav model-3d-0 ">
                                        <a href="https://www.linkedin.com/in/dulceperezsoft/" class="linkedin">
                                            <div class="front">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 s6 m6">
                        <div class="dulce z-depth-5">
                            <img src="img/oliver1.jpg" class="dulceImg">
                            <div class="overlay">
                                <div class="contacto">
                                    <h5>Oliver Reyes</h5>
                                    <h6>Web Designer</h6>
                                    <div class="col l6 s6 m6 social-nav model-3d-0 ">
                                        <a href="https://www.facebook.com/Oliver.Reyes96" class="facebook">
                                            <div class="front">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col l6 s6 m6 social-nav model-3d-0 ">
                                        <a href="#!" class="linkedin">
                                            <div class="front">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici10.jpg"></div>
    </div>
    <div class="carousel carousel-slider center" data-indicators="true">
            <div class="caroussoel-fixed-item center middle-indicator">
            </div>
            <div class="carousel-item carousel-color" href="#one!">
                <div class="container">
                    <div class="descrip_testimonial white whites z-depth-5">
                        <h2>Prof. Juan Martinez</h2>
                        <p>Comprar bicicletas para mis hijos en esta pagina fue totalmente sencillo.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-color" href="#two!">
                <div class="container">
                    <div class="descrip_testimonial black blacks z-depth-5">
                        <h2>Franklyn O. Perez</h2>
                        <p>Puedo vender todas mis piezas de bicicletas por esta pagina facilmente!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-color" href="#three!">
                <div class="container">
                    <div class="descrip_testimonial grey lighten-4 whites z-depth-5">
                        <h2>Hasebe Yo</h2>
                        <p>Actualizada para encontrar todos los eventos relacionados al ciclismo!</p>
                    </div>
                </div>
            </div>
    </div>
    <footer class="page-footer col s12 l12 m12 black">
        <div class="container">
        <div class="row">
            <div class="col l16 m6 12">
                <div class="titulo">
                    <h6>Grupo</h6>
                    <p>El real grupo hizo esto klk tu dice, Conformado por Dulce Perez y Oliver reyes</p>
                </div>
            </div>
            <div class="col l6 m6 s12">
                <div class="titulo">
                    <h6>Herramientas</h6>
                    <ul class="center">
                        <li><a class="white-text" href="#!">Materialize</a></li>
                        <li><a class="white-text" href="#!">PHP</a></li>
                        <li><a class="white-text" href="#!">HTML5</a></li>
                        <li><a class="white-text" href="#!">CSS3</a></li>
                        <li><a class="white-text" href="#!">Javascript</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col l12 m12 s12 center">
                <a href="https://www.facebook.com/alicia.perez.79219"><img src="img/facebook.png" onmouseover="this.src='img/facebook2.png';" onmouseout="this.src='img/facebook.png';" /></a>
                <a href="https://www.instagram.com/dulcep.c/?hl=en"><img src="img/instagram.png" onmouseover="this.src='img/instagram3.png';" onmouseout="this.src='img/instagram.png';" /></a>
                <a href="https://www.linkedin.com/in/dulceperezsoft/"><img src="img/linkedin.png" onmouseover="this.src='img/linkedin2.png';" onmouseout="this.src='img/linkedin.png';" /></a>
            </div>  
        </div>
        <div class="row nomargin">
            <div class="col l12 m12 s12 center creditos">
                <p>Powered by Dulce and Oliver, with Materialize</p>
            </div>
        </div> 
    </div>  
</footer>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
<script type="text/javascript" charset="utf-8" async defer/> 
</script>
</html>