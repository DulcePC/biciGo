<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-bicigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/materialize.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/admin_bicigo.css" />
</head>
<body>
    <br>
    <br>
<h3>Panel de Control</h3>
<div class="container">
    <br>
    <h6>Publica nuevas noticias en el mundo del ciclismo</h6>
    <br>
    <div class="row">
        <div class="col l6 s6 m6 center">
	        <a href="nuevo.php" class="btn btn-small green"><i class="material-icons left">add</i>Nuevo Post</a>
        </div>
        <div class="col l6 s6 m6 center">
            <a href="cerrar.php" class="btn btn-small red "><i class="material-icons left">close</i>Cerrar Sesion</a>
        </div>
    </div>
	<?php foreach($posts as $post): ?>
		<div class="post">
			<article>
                <h6><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h6>
                <div class="center">
                    <a class="btn btn-medium yellow" id="editar" href="editar.php?id=<?php echo $post['id']; ?>"><i class="material-icons left">mode_edit</i>Editar</a>
				    <a class="btn btn-medium green" href="../single.php?id=<?php echo $post['id']; ?>"><i class="material-icons left">visibility</i>Ver</a>
				    <a class="btn btn-medium red" href="borrar.php?id=<?php echo $post['id']; ?>"><i class="material-icons left">close</i>Borrar</a>
                </div>
			</article>
		</div>
	<?php endforeach; ?>
</div>
<br>
<br>
<div class="center">
	    <?php require '../paginacion.php'; ?>
</div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer/> 
</html>