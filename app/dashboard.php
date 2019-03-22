<?php include 'layouts/header.inc.php' ?>

<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["storage"]["user"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["storage"]["category"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
				<p>
					<a href="../die.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<?php include 'layouts/footer.inc.php' ?>
