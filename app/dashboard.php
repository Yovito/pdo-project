<?php include 'layouts/header.inc.php' ?>
<?php include 'layouts/navbar.inc.php' ?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["storage"]["user"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["storage"]["category"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
				<br>
				<!-- <button type="button" class="btn btn-info">Info</button> -->
				<div class="container text-center">
						<a href="view/user/user.inc.php" class="btn btn-primary">usuarios</a>
						<a href="../die.php" class="btn btn-info">inventario</a>
						<a href="../die.php" class="btn btn-success">reporte</a>
				</div>


				<br>
				<p>
					<a href="../die.php" class="btn btn-secondary ">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<?php include 'layouts/footer.inc.php' ?>
