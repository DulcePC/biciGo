<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>categorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/buscar.css" />

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
        <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar_bicicleta.php" method="get">
                <div class="input-field">
                    <input id="search" type="search" required="required" name="busqueda">
                    <label class="label-icon" for="search">
                        <button type="submit" class="green"><i class="material-icons">search</i></button>
                    </label>
                    <i class="material-icons">close</i>
                </div>
        </form>
    </div>
</nav>
<div class="container contenedorBusqueda">
    <h2><?php echo $titulo; ?></h2>
    <div class="row">
    <?php foreach($buscarA as $post): ?>
        <div class="col l4  m4 s12 z-depth-5">
            <div class="card">
                <div class="card-image">
                    <img src="fotos/<?php echo $post['imagen'] ?>" alt="">
                    <span class="card-title"><?php echo $post['titulo'] ?></span>
                    <a
                       class="btn-floating halfway-fab waves-effect waves-light card-butttoms"
                       href="foto_accesorio.php?id=<?php echo $post['id']; ?>">
                       <i class="material-icons">add</i>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
</html>