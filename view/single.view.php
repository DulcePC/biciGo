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
    <link rel="stylesheet" href="css/single.css" />
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
                <a href="index.php" class="brand-logo"><span id="b">B</span>iciGo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicio</a></li>
                </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col l12 s12 m12">
                <div class="post">
                    <h2 class="titulo_noticia"><?php echo $post['titulo']; ?></h2>
                        <img src="<?php echo RUTA; ?>/fotos/<?php echo $post['thumb'];  ?>" class="imgpost">
                    <p class="fecha right"><?php echo fecha($post['fecha']); ?></p>
                </div>
            </div>
            <div class="col l12 m12 s12">
            <p class="extracto descrip_post"><?php echo $post['texto'];  ?></p>
            </div>
        </div>
    </div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
<script type="text/javascript" charset="utf-8" async defer/> 
</html>