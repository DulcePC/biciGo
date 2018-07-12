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
                    <a class="btn orange col s3">Categorias</a>
                </div>
                <img src="img/bici2.jpg">
            </div>
        </div>
        <div class="layer top">
            <div class="content-wrap">
                <div class="content-body ">
                    <h1>BiciGo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <a class="btn green">Subscribete</a>
                </div>
                <img src="img/bici1.jpeg">
            </div>
        </div>
        <div class="handle"></div>
    </section>
    <div class="ventas">
        <div class="container">
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
        </div>
        <div class="paginacion">
            <ul class="pagination container">
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
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici2.jpg"></div>
    </div>
    <section class="nosotros">
        <div class="container">
            <div class="titulo">
                <h3>Nosotros</h3>
                <h6>Deseas saber un poco mas sobre nosotros?</h6>
            </div>
        </div>
       <div class="row">
           <div class="col l6 m6 s12 pink">
               <div class="contenedor">
                   <div class="texto">
                       <h3>Nosotros</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, beatae at quibusdam nihil ad libero nemo dolore dolorum mollitia, quidem, temporibus eligendi et corporis magni voluptatem! Amet ea voluptatibus suscipit aperiam quod nihil harum repellendus? Quasi earum labore adipisci nobis voluptatem provident dignissimos. Nesciunt ad, aperiam temporibus suscipit facilis maiores.</p>
                   </div>
               </div>
           </div>
           <div class="col l6 m6 s12 blue">
           <div class="contenedor">
                   <div class="texto">
                       <h3>IMGAGEN</h3>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, beatae at quibusdam nihil ad libero nemo dolore dolorum mollitia, quidem, temporibus eligendi et corporis magni voluptatem! Amet ea voluptatibus suscipit aperiam quod nihil harum repellendus? Quasi earum labore adipisci nobis voluptatem provident dignissimos. Nesciunt ad, aperiam temporibus suscipit facilis maiores.</p>
                   </div>
               </div>
           </div>
       </div>
    </section>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici2.jpg"></div>
    </div>
    <section class="actividades">
        <div class="noticias">
            <div class="actividadesTitulo">
                <h4>Noticias</h4>
            </div>
        </div>
        <div class="eventos">
            <div class="actividadesTitulo">
                <h4>Eventos</h4>
            </div>
        </div>
    </section>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bici3.jpg"></div>
    </div>
    <footer>


    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/index.js"></script>    
</body>
</html>