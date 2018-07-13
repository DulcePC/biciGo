<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>biciGo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/index.css" />

</head>
<body>
    <!-- creo que eliminaremos esto porque no se vuelve responsive, o lo escondemos para para movil o lo hacemos con flexbox ( a trabajar)-->
    <div class="submenu">
       <div class="container">
           <ul class="col l12">
               <li class="col s3"><a><i class="material-icons tiny">lock_open</i>Entra</a></li>
               <li class="col s3"><a><i class="material-icons tiny">lock_open</i>Registrate<a></li>
               <li class="col s3"><a><i class="material-icons tiny">mail</i>bicigo@gmail.com</a></li>
           </ul>
       </div>
    </div>
    <nav class="navprincipal"> 
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><span>B</span>iciGo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Categorias</a></li>
                <li><a href="collapsible.html">Nosotros</a></li>
                <li><a href="collapsible.html">Noticias</a></li>
                <li><a href="collapsible.html">Eventos</a></li>
            </ul>
        </div>
    </nav>
    <section id="wrapper" class="skewed">
        <div class="layer bottom">
            <div class="content-wrap">
                <div class="content-body col l12">
                    <h1>Piezas</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <a class="btn btn-small orange col s3">Categorias</a>
                </div>
                <img src="img/bici2.jpg">
            </div>
        </div>
        <div class="layer top">
            <div class="content-wrap">
                <div class="content-body ">
                    <h1>BiciGo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <a class="btn btn-small green">Subscribete</a>
                </div>
                <img src="img/bici1.jpeg">
            </div>
        </div>
        <div class="handle"></div>
    </section>
    <div class="ventas">
        <div class="container titulo">
            <h3>Ventas</h3>
            <h6>Encuentra tu bicicleta ahora</h6>
        </div>
        <div class="container">
            <div class="row">
                <div class="col l4  m4 s12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/bici2.jpg">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                </div>
                <div class="col l4  m4 s12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/bici3.jpg">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                </div>
                <div class="col l4  m4 s12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/logo.jpg">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                </div>            
            </div>
            <div class="row">
                <div class="col l4  m4 s12">
                        <div class="card">
                            <div class="card-image">
                            <img src="img/bici2.jpg">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                </div>
                <div class="col l4  m4 s12">
                        <div class="card ">
                            <div class="card-image">
                            <img src="img/bici3.jpg">
                            <span class="card-title">what</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                </div>
                <div class="col l4 m4 s12">
                    <div class="card">
                            <div class="card-image">
                            <img src="img/logo.jpg">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                    </div>
                </div>            
            </div>
            <div class="row">
                    <ul class="pagination right">
                        <li class="disabled izquierda"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect derecha"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici8.jpg"></div>
    </div>
    <section class="nosotros">
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, beatae at quibusdam nihil ad libero nemo dolore dolorum mollitia, quidem, temporibus eligendi et corporis magni voluptatem! Amet ea voluptatibus suscipit aperiam quod nihil harum repellendus? Quasi earum labore adipisci nobis voluptatem provident dignissimos. Nesciunt ad, aperiam temporibus suscipit facilis maiores.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, beatae at quibusdam nihil ad libero nemo dolore dolorum mollitia, quidem, temporibus eligendi et corporis magni voluptatem! Amet ea voluptatibus suscipit aperiam quod nihil harum repellendus? Quasi earum labore adipisci nobis voluptatem provident dignissimos. Nesciunt ad, aperiam temporibus suscipit facilis maiores.</p>
                        </div>
                        <a class="green btn btn-small right" id="suscribete">Suscribete</a>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici10.jpg"></div>
    </div>
    <section class="actividades ">
        <div class="noticias">
            <div class="titulo">
                <h4>Noticias</h4>
            </div>
            <div class="container contenedorEventos">
                <div class="row">
                    <div class="col l6 m6 s6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/bici11.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Compentencia de EEUU ride<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Ver mas</a></p>
                            </div>
                            <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m6 s6">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/bici11.jpg">
                            </div>
                            <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Resultados de biciclismo mundial<i class="material-icons right">more_vert</i></span>
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
        <div class="eventos">
            <div class="titulo">
                <h4>Eventos</h4>
            </div>
            <div class="container contenedorEventos">
                <div class="row">
                    <div class="col l6 m6 s6">
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
                    <div class="col l6 m6 s6">
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
    <footer class="page-footer col s12 l12 m12 black">
        <div class="container">
        <div class="row">
            <div class="col l16 m6 12">
                <div class="titulo">
                    <h6>Grupo</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nesciunt autem excepturi vitae aliquid sit exercitationem velit enim animi labore.</p>
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
                <p>Powered by Dulce, with Materialize</p>
            </div>
        </div> 
    </div>  
</footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/index.js"></script>    
</body>
</html>