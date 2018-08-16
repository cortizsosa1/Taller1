<meta charset="utf-8"/>

<?php
include("conexion.php");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Contacto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link rel="stylesheet" href="Pro.css">
</head>

	<script type="text/javascript" src="Pro.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<style>
      body {
        font-family: 'Tangerine', serif;
        font-size: 48px;
      }
    </style>

<body>
	<section class="container">
		<div class="row">
		<center><div style="font-family: 'Bree Serif', serif;">Formulario de ingreso</div></center>
			<article class="col s6 offset-s3">
				<form method="POST" action="guardado.php">
					<div class="input-field">
						<label for="nombre">Nombres</label>
						<input id="nombre" type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<label for="apellido">Apellidos</label>
						<input id="apellido" type="text" name="apellido" required>
					</div>
					
					<div class="input-field">
						<label for="email">Correo</label>
						<input id="email" type="email" name="correo" required>
					</div>

					<div class="input-field">
						<label for="tarjeta"></label>
  						<select id="tar" name="tarjeta" class="browser-default">
    						<option value="" disabled selected>Tarjeta de Credito</option>
                  			<option value="bancolombia">Bancolombia</option>
                  			<option value="visa">Visa</option>
                  			<option value="mastercard">Mastercard</option>
                  			<option value="cajasocial">Caja Social</option>
                  			<option value="davivienda">Davivienda</option>
                  			<option value="colpatria">Colpatria</option>
  						</select>
  					</div>

  					<div class="input-field">
						<label for="titular">Titular de la Tarjeta</label>
						<input id="titular" type="text" name="titular" required>
					</div>
					
					<div class="input-field">
						<label for="numero">Numero de la Tarjeta</label>
						<input id="numero" type="text" name="numero" required>
					</div>

					<div class="input-field">
						<label for="cvv2">CVV2</label>
						<input id="cvv2" type="text" name="cvv" required>
					</div>

					<div class="input-field">
						<label for="Fecha"><P>Fecha de Expedicion</P></label>
						<input id="fecha" type="date" name="fe" required>
					</div>

					<div class="input-field">
						<label for="direccion">Direccion</label>
						<input id="direccion" type="text" name="direc" required>
					</div>

					<div class="input-field">
						<label for="ciudad">Ciudad</label>
						<input id="ciudad" type="text" name="ciu" required>
					</div>

					<div class="input-field">
						<label for="zipcode">ZIP Code</label>
						<input id="zipcode" type="text" name="zip" required>
					</div>

					<div class="input-field">
						<label for="pais"></label>
  						<select id="pais" name="pais" class="browser-default">
  							<option value="" disabled selected>Pais</option>
                  			<option value="agfanistan">Afganistan</option>
                  			<option value="alemania">Alemania</option>
                  			<option value="arabia">Arabia</option>
                 			<option value="argentina">Argentina</option>
                 			<option value="australia">Australia</option>
                  			<option value="belgica">Belgica</option>
                  			<option value="bolivia">Bolivia</option>
                  			<option value="brasil">Brasil</option>
                  			<option value="bulgaria">Bulgaria</option>
                  			<option value="camerun">Camerun</option>
                  			<option value="canada">Canada</option>
                  			<option value="chile">Chile</option>
                  			<option value="colombia">Colombia</option>
                  			<option value="costarica">Costa Rica</option>
                  			<option value="ecuador">Ecuador</option>
                  			<option value="espana">Espana</option>
                  			<option value="estadosunidos">Estados Unidos</option>
                  			<option value="francia">Francia</option>
                  			<option value="italia">Italia</option>
                  			<option value="mexico">Mexico</option>
                  			<option value="nicaragua">Nicaragua</option>
                  			<option value="suiza">Suiza</option>
                  			<option value="uruguay">Uruguay</option>
                  			<option value="venezuela">Venezuela</option>
  						</select>
  					</div>

  					<div class="input-field">
						<label for="tel">Telefono</label>
						<input id="tel" type="text" name="tel" required>
					</div>

  					<div class="input-field">
						<label for="code">Codigo de Seguridad</label>
						<input id="code" type="text" name="code" required>
					</div>

					<div class="input-field">
						<label for="pregunta"></label>
  						<select id="pregunta" name="pregu" class="browser-default">
    						<option value="" disabled selected>¿Eres mayor de 18 años?</option>
                  			<option value="si">SI</option>
                  			<option value="no">NO</option>
  						</select>
  					</div>

					<p class="center-align">
						<button type="submit" class="waves-effect waves-light btn" ><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>

</body>
</html>