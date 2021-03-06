<?php session_start();
if(isset($_SESSION['usuario'])){
    header('location:usuario.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    
   $errores = '';
   if(empty($nombre) or empty($usuario) or empty($pass)){
       $errores .='<li>Por favor rellena todos los datos correctamente</li>';
   }else{
       try{
            $conexion = new PDO('mysql:host=localhost;dbname=bicigo','root','');
       }catch (PDOException $e){
           echo "Error: " .$e->getMessage();
       }
       $statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario lIMIT 1 ');
       $statement->execute(array(':usuario' => $usuario));
       $resultado = $statement->fetch();
       if($resultado != false){
           $errores .= '<li>El nombre de usuario ya existe</li>';
       }
       $pass = hash('sha512', $pass);


    }
    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO usuario (id,nombre,usuario,clave)VALUES (null, :nombre, :usuario, :pass)');
        $statement->execute(array(
        ':nombre'  => $nombre, 
        ':usuario' => $usuario, 
        ':pass'    => $pass));
        header('location:login.php');
    }
}

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
    <link rel="stylesheet" href="css/registrateV.css" />

</head>
<body>
    <div class="container registro">
        <div class="row">
            <h4>Registrate</h4>
            <div class="l7 m12 s12">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="col l7 s12" name="login">
                    <div class="input-field col l12 s12 m12">
                        <input placeholder="Nombre" id="name" type="text" name = "nombre" class="validate">
                    </div>
                    <div class="input-field col l12 s12 m12">
                        <input placeholder="Usuario" id="nick" type="text" name = "usuario" class="validate" >
                    </div>
                    <div class="input-field col l12 s12 m12">
                        <input placeholder="Clave" id="pass"  type="text" name = "pass" class="validate" >
                    </div>
                </form>
            </div>
            <div class="col l5 m5 black hide-on-med-and-down">
                <img src="img/bici5.jpg" class="imgEntra">
            </div>
            <div class="right col l6 m6 s12">
                <a class="btn entra-btn btn-small l2" onclick="login.submit()">Registrarte</a>
            </div>
            <?php if(!empty($errores)): ?>
                    <div class"error">
                        <ul class="errorsito">
                            <?php echo $errores; ?>
                        </ul>
                    </div>
            <?php endif; ?>
            <div class="row">
                        <div class="col l6 m6 s6 social-nav model-3d-0 ">
                            <div class="col l4 s4 m4">
                                <a href="#!" class="facebook">
                                    <div class="front">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col l4 s4 m4">
                                <a href="#!" class="twitter">
                                    <div class="front">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col l4 s4 m4">
                                <a href="#!" class="instagram">
                                    <div class="front">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="back">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="col l12">Al darle click a registrarte estas aceptando nuestros terminos</p>
                </div>
            <div class="footer">
                <a href="index.php" class="modal-close waves-effect waves-green btn-small red btn-salir right">Salir</a>
            </div>
        </div>
    </div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer/> 
</html>