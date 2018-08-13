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
    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM pieza ORDER BY id DESC LIMIT $inicio, $postPorPagina");
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
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/materialize.css"/>
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="css/categoriaAV.css"/>

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
                <i class="material-icons right show-on-small">search</i>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a class="btn btn-small green" href="formularioP.php">Publicar</a></li>
                </ul>
        </div>
    </nav>
    <div class="container contenedor">
        <div class="row">
                            <!-- articulos es el nombre con lo que sacamos la paginacion -->
            <?php foreach($articulos as $foto): ?>
                <div class="col l4  m4 s12 z-depth-5">
                    <div class="card">
                        <div class="card-image">
                            <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                            <span class="card-title"><?php echo $foto['titulo'] ?></span>
                            <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms" href="foto_pieza.php?id=<?php echo $foto['id']; ?>"><i class="material-icons">add</i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <ul class="pagination right">
                <?php if($pagina == 1): ?><!--esto es para deshabilitar el boton si tenemos una sola pagina-->
                                <li class='disabled'><a href="#ventas"><i class='material-icons'>chevron_left</i></a></li>
                            <?php else: ?>
                                <li><a href="?pagina=<?php echo $pagina -1 ?>"><i class="material-icons">chevron_left</i></a></li>
                            <?php endif; ?>
                            <?php
                                //ejecutamos el ciclo para mostra las paginas
                                for($i=1; $i <=$numeroPaginas; $i++){
                                    if($pagina == $i){
                                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                                    }else{
                                        echo "<li class='waves-effect'><a href='?pagina=$i'>$i</a></li>";
                                    }
                                } //creando una pagina por cada una de ellas
                ?>
                <?php 
                            //establecemos que nuestro boton de siguiente se habilite
                            if($pagina == $numeroPaginas): ?><!--esto es para deshabilitar el boton si tenemos una sola pagina-->
                                <li class='disabled'><a href="#ventas"><i class='material-icons'>chevron_right</i></a></li>
                            <?php else: ?>
                                <li><a href="?pagina=<?php echo $pagina + 1 ?>"><i class="material-icons">chevron_right</i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>








</body>
<script
        type="text/javascript"
        src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/usuario.js"></script>
    <script src="js/index.js"></script>
</html>