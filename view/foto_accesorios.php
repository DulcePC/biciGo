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
    <link rel="stylesheet" href="css/foto.css"/>
</head>
<body>
    <div class="container" id="contenedor_universal">
        <div class="foto">
            <div class="container" id="contenedor">
                <div class="row">
                        <div class="col l12 m12 s12">
                            <img src="fotos/<?php echo $foto['imagen']; ?>" class="img">
                        </div>
                        <div class="col l12 s12 m12">
                            <div class="descrip">
                                <h3 class="titulo_descrip"><?php echo $foto['titulo']; ?></h3>
                                <ul>
                                    <li>Marca: <?php echo $foto['marca']?></li>
                                    <li>Precio: <?php echo $foto['precio']?></li>
                                    <li>Estado: <?php echo $foto['estado']?></li>
                                    <li>Telefono: <?php echo $foto['telefono']?></li>
                                    <li>Provincia: <?php echo $foto['provincia']?></li>
                                </ul>
                                <p>Descripcion:<?php echo $foto['descripcion']?></p>
                            </div>
                        </div>
                    <!-- <div class="footer">
                        <a href="index.php" class="waves-effect waves-green btn-small red btn-salir right">Salir</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <br>

    <br>

    <br>

    <br>

    <br>


</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
<script type="text/javascript" charset="utf-8" async defer/> 
</script>
</html>