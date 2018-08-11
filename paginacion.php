<div class="paginacion">
<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conectar); ?>
	<ul class="pagination container">
		<?php if (pagina_actual() === 1): ?>
			<li class="disabled izquierda"><i class="material-icons">chevron_left</i></li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() - 1 ?>"><i class="material-icons">chevron_left</i></a></li>
		<?php endif; ?>
        <?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if (pagina_actual() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>

		<?php endfor; ?>
		

		<?php if(pagina_actual() == $numero_paginas): ?>
			<li class="disabled derecha"><i class="material-icons">chevron_right</i></li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo pagina_actual() + 1; ?>"><i class="material-icons">chevron_right</i></a></li>
		<?php endif; ?>
	</ul>
</div>
