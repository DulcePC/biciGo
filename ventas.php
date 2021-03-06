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
    <link rel="stylesheet" href="css/index.css" />
</head>
<body> 
        <div class="container">
            <div class="row">
                        <!-- articulos es el nombre con lo que sacamos la paginacion -->
                <?php foreach($articulos as $foto): ?>
                    <div class="col l4 m4 s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                                    <span class="card-title"><?php echo $foto['titulo'] ?></span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light card-butttoms" href="foto.php?id=<?php echo $foto['id']; ?>"><i class="material-icons">add</i></a>
                                    </div>
                            </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
            <br>
            <div class="row">
                    <ul class="pagination center">
                        <?php if($pagina == 1): ?><!--esto es para deshabilitar el boton si tenemos una sola pagina-->
                            <li class='disabled izquierda'><a href="#ventas"><i class='material-icons'>chevron_left</i></a></li>
                        <?php else: ?>
                            <li class="izquierda"><a href="?pagina=<?php echo $pagina -1 ?>"><i class="material-icons">chevron_left</i></a></li>
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
                            <li class='disabled derecha'><a href="?ventas"><i class='material-icons'>chevron_right</i></a></li>
                        <?php else: ?>
                            <li class="derecha"><a href="?pagina=<?php echo $pagina + 1 ?>"><i class="material-icons">chevron_right</i></a></li>
                        <?php endif; ?>
                    </ul>
            </div>
        </div>
       </body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
<script type="text/javascript" charset="utf-8" async defer/> 
</script>
</html>