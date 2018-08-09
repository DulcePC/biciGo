
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/formBicicleta.css"/>
</head>
<body>
        <h2>Publicacion</h2>
        <div class="container contenedor">
            <div class="row">
                <div class=" col l12 s12 m12">
                    <form method="post" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="input-field col s12 m12 l12">
                            <input
                                placeholder="Titulo del accesorio"
                                id="titulo"
                                type="text"
                                name="titulo"
                                class="validate"/>
                        </div>
                        <div class="col s12 m5 l5 right">
                            <p>
                                <label class="col l6 m6 s6">
                                    <input name="group1" type="radio"/>
                                    <span>Nuevo</span>
                                </label>
                            </p>
                            <p>
                                <label class="col l6 l6 m6 s6">
                                    <input name="group1" type="radio"/>
                                    <span>Usado</span>
                                </label>
                            </p>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Precio" id="precio" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Telefono" id="telefono" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Provincia" id="precio" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix textarea">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2" class="label">Descripcion</label>
                        </div>
                    </form>
                </div>
                <div class="col l12 s12 m12">
                    <div class="file-field input-field col l12 s12 m12">
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="fileInput">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <input class="btn green btn-small right submit" type="submit" value="Subir publicacion" name="submit" >
                    <a href="usuario.php" class="red btn-small btn left">Salir</a>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
</html>