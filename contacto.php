<!DOCTYPE html>
<html lang="es">
  <head>
    	<meta charset="utf-8">
		<title> Mobel Art</title>
	
		
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />		
	    <meta name="viewport" content="width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

  </head>
  <body >
		<header class="headerpagina">
		<?php include 'menu.php';?>
		</header>
		<nav class="direccion" >
			<ul>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="dondeestamos.php">Dónde estamos</a></li>
			</ul>
		</nav>
		<section class="container">
			
			<div id="divform">
				<h2>CONTACTO</h2>
				<?php
					if (!isset($_POST['email'])) {
					?>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
						<label><b>Nombre:</b></label>
						
						<input name="nombre" placeholder="Nombre" type="text" required/>
						
						<label><b>Apellido:</b></label>
						
						<input name="apellido" placeholder="Apellido" type="text" required/>
						
						<label> <b>Teléfono(opcional):</b></label>
						
						<input name="telefono" placeholder="Telefono"type="text"/>
						
						<label><b>Email:</b></label>
						
						<input name="email" placeholder="user@servidor.com" type="text" required/>
						
						<label><b>Consulta</b></label>
						
						<textarea name="mensaje" rows="6" cols="50"></textarea>
						
						<input type="submit" value="Enviar" />
					</form>
					<?php
					}else{
					$mensaje="Mensaje del formulario de contacto de mobelart";
					$mensaje.= "\nNombre: ". $_POST['nombre'];
					$mensaje.= "\nApellido:". $_POST['apellido'];
					$mensaje.= "\nEmail: ".$_POST['email'];
					$mensaje.= "\nTelefono: ". $_POST['telefono'];
					$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
					$destino= "b4ei.msarzal@gmail.com";
					$remitente = $_POST['email'];
					$asunto = "Mensaje enviado por: ".$_POST['nombre'];
					mail($destino,$asunto,$mensaje,"FROM: $remitente");
					?>
					<p><strong>Mensaje enviado.</strong></p>
					<?php
					}
				?>
			</div>
		</section>	
   </body>
</html>
     
	 
    
	 
	 
	  
	
	
  

