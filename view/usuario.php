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
    <div class="col l12 s12 m12 nav">
        <div class="right white"><a href="index.php">Volver a la principal</a></div>
        <ul id="slide-out" class="sidenav collapsible">
        <li>
            <div class="user-view">
                <div class="background">
                    <!-- <img src="images/office.jpg"> -->
                </div>
                <a href="#user"><img class="circle" src="img/bici10.jpg"></a>
                <a href="#name"><span class="white-text name">Bienvenido!, <?php echo $_SESSION['usuario'];?></span></a>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="fas fa-plus-circle"></i>Publicar</div>
            <div class="collapsible-body">
                <div class="publicar">
                    <span>Publica una bicicleta</span><a href="formularioB.php" class="btn btn-small publicar_boton right">ahora</a>
                </div>
                <div class="publicar">
                    <span>Publica un accesorio</span><a href="formularioA.php" class="btn btn-small publicar_boton right">ahora</a>
                </div>
                <div class="publicar">
                    <span>Publica una pieza</span><a  href="formularioP.php" class="btn btn-small publicar_boton right">ahora</a>
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
        <li class="cerrarmargin"><a class="waves-effect" href="cerrar.php">Cerrar seccion</a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger buttom-menu"><i class="material-icons icono_menu">menu</i></a>
    </div>
    <section id="agregar_contenido col l12 s12 m12">
            <div class="container">
                <div class="row">
                    <div class="col l4 s4 m4">
                        <div class="public_icon z-depth-5">
                        <a  href="formularioB.php">
                            <i class="fas fa-plus-circle icon "></i>
                            <br>
                            <p class="flow-text">Bicicleta</p>
                        </a>
                        </div> 
                    </div>
                    <div class="col l4 s4 m4">
                        <div class="public_icon z-depth-5">
                            <a href="formularioP.php">
                                <i class="fas fa-plus-circle icon"></i>
                                <br>
                                <p class="flow-text">Pieza</p>
                            </a>
                        </div>
                    </div>
                    <div class="col l4 s4 m4">
                        <div class="public_icon z-depth-5">
                            <a href="formularioA.php">
                                <i class="fas fa-plus-circle icon"></i>
                                <br>
                                <p class="flow-text">Accesorio</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          
    </section>
    <section id="publicaciones">
        <h1 class="flow-text">Mis publicaciones</h1> 
        <div class="container">
            <table class="striped responsive-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>foto</th>
                    <th>Texto</th>
                </tr>
                </thead>

                <tbody>
                <tr>

                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td><a class="btn yellow btn-small">Editar</a></td>
                    <td><a class="btn red btn-small">Eliminar</a></td>
                    <td><a class="btn green btn-small">Ver</a></td>
                </tr>
                </tbody>
            </table>
        </div>
       <!-- traer todas las publicaciones del usuario
       -todo esto lo vamos a traer en una table.(editar, vea(modal));-->
    </section>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
<script type="text/javascript" charset="utf-8" async defer> 

</html>