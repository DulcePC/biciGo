
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/formBicicleta.css"/>
</head>
<body>
<h2>Publicacion</h2>
        <div class="container contenedor z-depth-5">
            <div class="row">
                <div class=" col l12 s12 m12">
                    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Titulo de la accesorio" type="text" name="titulo"/>
                        </div>
                        <div class="input-field col s12 m5 l5">
                            <input placeholder="Marca" id="marca" type="text" data-length="10" name="marca"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Precio" id="precio" name="precio" type="text" data-length="10"/>
                        </div>
                        <div class="col s12 m12 l12 right">
                            <input placeholder="Estado" id="estado" name="estado" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Telefono" id="telefono" name="telefono" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input placeholder="Provincia" id="provincia" name="provincia" type="text" data-length="10"/>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix textarea">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="descripcion"></textarea>
                            <label for="icon_prefix2" class="label">Descripcion</label>
                        </div>
                        <div class="col l12 s12 m12">
                            <div class="file-field input-field col l12 s12 m12">
                                <div class="btn">
                                    <span>Foto</span>
                                    <input type="file" name="foto">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="center col l12 s12 m12">
                            <?php if(isset($error)): ?>
                                <p class="error"><?php echo $error; ?></p>
                            <?php endif ?>
                        </div>
                        <input class="btn green btn-small right submit" type="submit" value="Subir publicacion" name="submit" >
                        <a href="usuario.php" class="red btn-small btn left">Salir</a>
                    </form>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
</html>