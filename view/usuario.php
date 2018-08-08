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
        <ul id="slide-out" class="sidenav collapsible">
        <li>
            <div class="user-view">
                <div class="background">
                    <!-- <img src="images/office.jpg"> -->
                </div>
                <a href="#user"><img class="circle" src="img/bici10.jpg"></a>
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
        <li class="cerrarmargin"><a class="waves-effect" href="cerrar.php">Cerrar seccion</a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger buttom-menu"><i class="material-icons icono_menu">menu</i></a>
    </div>
    <section id="agregar_contenido col l12 s12 m12">
            <div class="container">
                <div class="row">
                    <div class="col l4 s4 m4">
                        <div class="public_icon">
                        <a class="lento" onclick="funcionBici()">
                            <i class="fas fa-plus-circle icon"></i>
                            <br>
                            <p class="flow-text">Publica una bicicleta</p>
                        </a>
                        </div> 
                    </div>
                    <div class="col l4 s4 m4">
                        <div class="public_icon">
                            <a onclick="funcionPieza()">
                                <i class="fas fa-plus-circle icon"></i>
                                <br>
                                <p class="flow-text">Publica una pieza</p>
                            </a>
                        </div>
                    </div>
                    <div class="col l4 s4 m4">
                        <div class="public_icon">
                            <a onclick="funcionAccesorio()">
                                <i class="fas fa-plus-circle icon"></i>
                                <br>
                                <p class="flow-text">Publica un accesorio</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bicicleta" style="display:none;">
                <?php require('view/FormBicicleta.php'); ?>
            </div> 
            <div id="pieza" style="display:none;">
                <?php require('view/FormPiezas.php'); ?>
            </div>
            <div id="accesorio" style="display:none;">
                <?php require('view/FormAccesorio.php'); ?>
            </div>
    </section>
    <section id="publicaciones">
        <h1 class="flow-text">Mis publicaciones</h1> 
        <div class="container">
            <table class="striped responsive-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                </tr>
                </thead>

                <tbody>
                <tr>

                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td><a class="btn yellow btn-small">Editar</a></td>
                    <td><a class="btn red btn-small">Eliminar</a></td>
                    <td><a class="btn green btn-small">Ver</a></td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                    <td><a class="btn yellow btn-small">Editar</a></td>
                    <td><a class="btn red btn-small">Eliminar</a></td>
                    <td><a class="btn green btn-small">Ver</a></td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
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