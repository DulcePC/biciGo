<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login ADM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/login.adm.css" />

</head>
<body>
    <div class="container">
    <h2>Bicigo Admin</h2>
        <div class="row">
            <div class="col l12 m12 s12 formulario">
                <div class="contenedor_form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="input-field col l12 s12 m12">
                            <input placeholder="Administrador" id="nick" type="text" name = "usuario" class="validate" >
                        </div>
                        <div class="input-field col l5 s12 m12">
                            <input placeholder="Clave" id="pass"  type="password" name = "password" class="validate" >
                        </div>
                        <div class="col l12 m12 s12">
                           	<input type="submit" value="Iniciar Sesion" class="btn btn-small green btn-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/usuario.js"></script> 
<script src="js/index.js"></script> 
</html>