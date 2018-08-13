<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-bicigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/materialize.css" />
</head>
<body>
<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Articulo</h2>
			<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="titulo" placeholder="Titulo del Articulo">
				<input type="text" name="extracto" placeholder="Extracto del Articulo">
				<textarea name="texto" placeholder="Texto del Articulo"></textarea>
				<input type="file" name="thumb">

				<input type="submit" value="Crear Articulo">
			</form>
		</article>
	</div>
</div>
</body>
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script>CKEDITOR.replace( 'texto');</script>
</html>