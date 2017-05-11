<!DOCTYPE html>
<html>
	<head>
		<title>
			Precios
		</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat|Allerta" rel="stylesheet">
	</head>
	<body>
		<header id="header" class="header background"> <!-- header -->
			<div class="contenedor">
				
				<figure class="logotipo"> <!-- Logotipo -->
				<img src="images/invie.png" width="186" height="60" alt="Invie logotipo">
			</figure>
			<nav class="menu"><!-- menu -->
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="index.php#guitarras">Guitarras</a>
					</li>
					<li>
						<a href="precios.php">Precios</a>
					</li>
				</ul>
			</nav>
			</div>
			
		</header>
		<section class="tabla">
		<div class="contenedor">
			<table>
				<thead>
					<tr>
						<th>Modelo</th>
						<th>Precio</th>
						<th>Descripcion</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Invie Classic</td>
						<td>$1000.00</td>
						<td>Una guitarra muy pro</td>
					</tr>
					<tr>
						<td>Invie Classic</td>
						<td>$1000.00</td>
						<td>Una guitarra muy pro</td>
					</tr>
					<tr>
						<td>Invie Classic</td>
						<td>$1000.00</td>
						<td>Una guitarra muy pro</td>
					</tr>
				</tbody>
			</table>
			</div>
		</section>


		<footer class="footer">
	<div class="contenedor">
		<div class="contacto">
			<img src="images/invie-white.png" alt="logotipo blanco"/>
			<a href="tel:+573024456789"><strong>Telefono</strong><span>3024456789</span></a>
			<a href="mailto:invie@mail.com"><strong>E-mail</strong><span>invie@mail.com</span></a>
		</div>
		<form class="formulario">
		<div class="col1">
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" required/>
			<label for="email">E-mail</label>
			<input type="email" id="email" required/>
			<div class="sexo">
				<label for="mujer">
				<input type="radio" id="mujer" checked name="sexo" value="mujer"> Mujer
			</label>
			<label for="hombre">
				<input type="radio" id="hombre" name="sexo" value="hombre"> Hombre
			</label>
			</div>
			<div class="intereses">
				<label for="cotizacion">
					<input type="checkbox" checked id="cotizacion" name="intereses" value="cotizacion" />Cotización
				</label>
				<label for="reclamos">
					<input type="checkbox" id="reclamos" name="intereses" value="intereses" />Reclamos
				</label>
				<label for="comentarios">
					<input type="checkbox" id="comentarios" name="intereses" value="comentarios" />Comentarios
				</label>
				<label for="otros">
					<input type="checkbox" id="otros" name="intereses" value="otros" />Otros
				</label>
				
			</div>
		</div>
		<div class="col2">
			
			<div class="comentarios">
				<label for="comentarios">Comentarios</label>
				<textarea name="comentarios" id="comentarios" cols="30" rows="10"></textarea>
				<input type="submit" value="Enviar" class="button">
			</div>
		</div>
			
			
		</form>
	</div>
		
	</footer>
	</body>
</html>