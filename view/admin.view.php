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
</head>
<body>
<div class="contenedor">
    <h2>Panel de Control</h2>
    <div class="row">
        <div class="col l6 s6 m6">
	        <a href="nuevo.php" class="btn btn-small green">Nuevo Post</a>
        </div>
        <div class="col l6 s6 m6">
            <a href="cerrar.php" class="btn btn-small red right">Cerrar Sesion</a>
        </div>
    </div>
	<?php foreach($posts as $post): ?>
		<div class="post">
			<article>
				<h2 class="titulo"><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h2>
				<a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
				<a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
				<a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
			</article>
		</div>
	<?php endforeach; ?>


	<?php require '../paginacion.php'; ?>
</div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer/> 
</html>