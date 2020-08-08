<!DOCTYPE html> 
<html lang="es">
<head>
	<title>landing Brayan Segura</title>
	
	<!--para bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!--para el css propio-->
	<link rel="stylesheet" href="landing.css">

	<!--roboto medium-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

	<!--responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--caracteres en español-->
	<meta charset="utf-8">
</head>
<body>
	
<div class="container">
	<!--logo-->
	<div class="row logoRow">
		<div class="col-12 d-flex justify-content-center logoCol">
			<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" alt="logoSigma" id="miLogo">
		</div>
	</div>
	<!--info-->	
	<div class="row infoRow">
		<div class="col-12 d-flex justify-content-center colTitulo">
			<h1>Prueba de desarrollo Sigma</h1>
		</div>
		<div class="col-12 d-flex justify-content-center colLorem">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
	</div>

	<!--form-->
	<div class="row formRow">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center formImg">
			<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" alt="imagenBienvenida" class="imgFormulario">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 formFormulario">
			<form action="">
				<input type="hidden" id="id">
				<label for="state">Departamento*</label>
				<br>
				<input type="text" id="state" placeholder="Antioquia">
				<br>
				<label for="city">Ciudad*</label>
				<br>
				<input type="text" id="city" placeholder="Medellín">
				<br>
				<label for="name">Nombre*</label>
				<br>
				<input type="text" id="name" placeholder="Pepito de Jesús">
				<br>
				<label for="email">Correo*</label>
				<br>
				<input type="email" id="email" placeholder="Pepitodejesus@gmail.com">
				<br>
				<button>ENVIAR</button>
			</form>
		</div>
	</div>

</div>

<!--para bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>