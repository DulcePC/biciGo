<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>biciGo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/materialize.css" />
    <link rel="stylesheet" href="../css/usuario.css" />
    <link rel="stylesheet" href="../css/index.css" />

</head>
<body>
<ul id="slide-out" class="sidenav collapsible">
    <li>
        <div class="user-view">
            <div class="background">
                <!-- <img src="images/office.jpg"> -->
            </div>
            <a href="#user"><img class="circle" src="../img/bici10.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="fas fa-plus-circle"></i>Publicar</div>
        <div class="collapsible-body">
            <div class="publicar">
                <span>Publica una bicicleta</span><a class="btn btn-small publicar_boton right">ahora</a>
            </div>
            <div class="publicar">
                <span>Publica un accesorio</span><a class="btn btn-small publicar_boton right">ahora</a>
            </div>
            <div class="publicar">
                <span>Publica una pieza</span><a class="btn btn-small publicar_boton right">ahora</a>
            </div>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="fas fa-user-circle"></i>Cuenta</div>
        <div class="collapsible-body">
            <div class="publicar">
                <a href="#!"><span>Cambiar Nombre</span></a>
            </div>
        </div>
    </li>
  <li class="cerrarmargin"><a class="waves-effect" href="#!">Cerrar seccion</a></li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>








<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="../js/usuario.js"></script>   
</body>
</html>