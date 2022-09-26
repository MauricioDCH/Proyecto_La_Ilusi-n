<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro productos</title>
	<link rel="stylesheet" type="text/css" href="css/form-pro.css">
</head>
<body>

	<div class="title">
		<p class="font_title"> Registro productos </p>
	</div>

	<div class="form">
		<form action="consultaBD_pruductos.php" method="post">
			<table>
				<tr>
					<td class="text_form">Id referencia: </td>
					<td class="imput_form"> <input type="text" name="id_referencia" id="id_referencia"> </td>
				</tr>
				<tr>
					<td class="text_form">Nombre producto: </td>
					<td class="imput_form"> <input type="text" name="nombre_p" id="nombre_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Tipo de producto: </td>
					<td class="imput_form"> <input type="text" name="tipo_pro" id="tipo_pro"> </td>
				</tr>
				<tr>
					<td class="text_form">Precio: </td>
					<td class="imput_form"> <input type="text" name="precio_p" id="precio_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Largo: </td>
					<td class="imput_form"> <input type="text" name="largo_p" id="largo_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Ancho: </td>
					<td class="imput_form"> <input type="text" name="ancho_p" id="ancho_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Alto: </td>
					<td class="imput_form"> <input type="text" name="alto_p" id="alto_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Color: </td>
					<td class="imput_form"> <input type="text" name="color_p" id="color_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Peso: </td>
					<td class="imput_form"> <input type="text" name="peso_p" id="peso_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Disponibilidad: </td>
					<td class="imput_form"> <input type="text" name="disponibles_p" id="disponibles_p"> </td>
				</tr>
				<tr>
					<td class="text_form">Descripcion: </td>
					<td class="imput_form"> <input type="text" name="descripcion_p" id="descripcion_p"> </td>
				</tr>
				<tr>
					<td></td>
					<td class='btn_registro'> <input class="style_btn" type='submit' name='registrar' value='Registrar' /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>