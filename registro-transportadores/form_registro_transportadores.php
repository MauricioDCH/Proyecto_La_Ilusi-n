<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro transportadores</title>
	<link rel="stylesheet" type="text/css" href="css/form-pro.css">
</head>
<body>
    <!--Título de la pagina de registro-->
	<div class="title">
		<p class="font_title"> Registro transportadores </p>
	</div>

    <!-- Formulario para capturar datos de transportadores-->
	<div class="form">
		<form action="consultaBD_transportadores.php" method="post">
			<table>
				<tr>
					<td class="text_form">Nombre del transportador: </td>
					<td class="imput_form"> <input type="text" name="nombre_tra" id="nombre_tra"> </td>
				</tr>
				<tr>
					<td class="text_form">Apellido del transportador: </td>
					<td class="imput_form"> <input type="text" name="apellido_tra" id="apellido_tra"> </td>
				</tr>
				<tr>
					<td class="text_form">Número de teléfono: </td>
					<td class="imput_form"> <input type="text" name="telefono" id="telefono"> </td>
				</tr>
				<tr>
					<td class="text_form">Tipo de vehículo: </td>
					<td class="imput_form"> <input type="text" name="tipo_vehiculo" id="tipo_vehiculo"> </td>
				</tr>
				<tr>
					<td class="text_form">Color del vehículo: </td>
					<td class="imput_form"> <input type="text" name="color_vehiculo" id="color_vehiculo"> </td>
				</tr>
				<tr>
					<td class="text_form">Placa del vehículo: </td>
					<td class="imput_form"> <input type="text" name="placa" id="placa"> </td>
				</tr>
				<tr>
					<td class="text_form">Capacidad del vehículo: </td>
					<td class="imput_form"> <input type="text" name="capacidad" id="capacidad"> </td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>