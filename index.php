<!DOCTYPE html>
<html>
	<head>
		<title>
			Invie - Tus mejores guitarras!!
		</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<link href="https://fonts.googleapis.com/css?family=Montserrat|Allerta" rel="stylesheet">
	</head>
	<body>
		
		<section id="portada" class="portada background"> <!-- Portada -->
		<header id="header" class="header contenedor"> <!-- header -->
			
			<figure class="logotipo"> <!-- Logotipo -->
				<img src="images/invie.png" width="186" height="60" alt="Invie logotipo">
			</figure>
			<nav class="menu"><!-- menu -->
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="#guitarras">Guitarras</a>
					</li>
					<li>
						<a href="precios.php">Precios</a>
					</li>
				</ul>
			</nav>
		</header>
		 <div class="contenedor">
			<h1 class="titulo">Guitarras <span>invie</span>sibles</h1><!-- Titulo -->
			<h3 class="titulo-a">Sé la estrella de rock que siempre quisiste ser</h3><!-- resumen -->
			<a class="button" href="#guitarras">Conoce mas</a><!-- boton -->
		 </div>
		</section>
		<section id="guitarras" class="guitarras contenedor"> <!-- guitarras -->
			<h2>Nuestras guitarras</h2><!-- Titulo -->
			<article class="guitarra "><!-- Guitarras 1 -->
				<img class="derecha" src="images/invie-acustica.png" alt="Guitarra Invie Acustica" width="350">
				<div class="contenedor-guitarra-a">
					<h3 class="title-b">
					Invie Acustica.	
				</h3>
				<ol>
					<li>Estilo vintage</li>
          <li>Madera pura</li>
          <li>Incluye estuche invisible de aluminio</li>
				</ol>
				</div>
				

			</article>
			<article class="guitarra b"><!-- Guitarras 2 -->
				<img class="izquierda" src="images/invie-classic.png" alt="Guitarra Invie Classic" width="350">
				<div class="contenedor-guitarra-b">
					
					<h3 class="title-b">Invie Classic</h3>
        <ol>
          <li>Estilo vintage</li>
          <li>Liviana</li>
          <li>Inicia tu camino como Rockstar</li>
        </ol>
				</div>
				
			</article>
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