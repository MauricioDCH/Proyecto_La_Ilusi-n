<?php

require("..//conexion_BD/conexion.php");

if(isset($_POST["registrar"])){

	$id_referencia=$_POST['id_referencia'];
	$tipo_p=$_POST['tipo_pro'];
	$nombre_p=$_POST['nombre_p'];
	$precio_p=$_POST['precio_p'];
	$largo_p=$_POST['largo_p'];
	$ancho_p=$_POST['ancho_p'];
	$alto_p=$_POST['alto_p'];
	$color_p=$_POST['color_p'];
	$peso_p=$_POST['peso_p'];
	$descripcion_p=$_POST['descripcion_p'];
	$diponibilidad_p=$_POST['disponibles_p'];


	$consulta = "SELECT id_referencia FROM tbl_productos WHERE id_referencia = '$id_referencia'";
	$resultado = mysqli_query($mysqli, $consulta);

	if ($resultado == true) {
	# code...
		if (mysqli_num_rows($resultado)===1) {
	# code...
			echo "<script>
			alert('El producto ya fue registrado');
			window.location.href='form_registro.php';

			</script>";
		} else {
	# code...

			$consulta1 = "INSERT INTO tbl_productos (id_referencia,tipo_producto,nombre_prducto,precio_producto,largo_p,ancho_p,alto_p,color_p,peso_p,descripcion_p,disponibilidad_p) VALUES ('$id_referencia','$tipo_p','$nombre_p','$precio_p','$largo_p','$ancho_p','$alto_p','$color_p','$peso_p','$descripcion_p','$diponibilidad_p')";
			
			$resultado1 = mysqli_query($mysqli, $consulta1);

			if ($resultado1 == true) {
				# code...
				echo "<script>
				alert('Se ha registrado el producto');
				window.location.href='form_registro.php';

				</script>";

			} else {
				# code...
				echo "<script>
				alert('Error al registrar el producto');
				window.location.href='form_registro.php';

				</script>";
			}
			
		}
	} else {
	# code...
		echo "<script>
		alert('Error al registrar el producto');
		window.location.href='form_registro.php';

		</script>";
	}

}

?>
