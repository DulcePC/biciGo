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
               <li class="col s3"><a><i class="material-icons tiny">phone</i>Llamanos: 123456789</a></li>
               <li class="col s3"><a><i class="material-icons tiny">mail</i>bicigo@gmail.com</a></li>
           </ul>
       </div>
    </div>
    <nav class="navprincipal"> 
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">BiciGo</a>
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
    <div class="red">
        <br>
        <br>
        <br>
        <br>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/index.js"></script>    
</body>
</html>