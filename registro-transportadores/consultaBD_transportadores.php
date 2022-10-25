<?php

require("..//conexion_BD/conexion.php");

if(isset($_POST["registrar"])){

    #Se asignan a las variables los valores capturados en el archivo form_registro_transportadores
	$nombre_tra=$_POST['nombre_tra'];
	$apellido_tra=$_POST['apellido_tra'];
	$telefono=$_POST['telefono'];
	$tipo_vehiculo=$_POST['tipo_vehiculo'];
	$color_vehiculo=$_POST['color_vehiculo'];
	$placa=$_POST['placa'];
	$capacidad=$_POST['capacidad'];

	$consulta = "SELECT placa FROM tbl_transportadores WHERE placa = '$placa'";
	$resultado = mysqli_query($mysqli, $consulta);

	if ($resultado == true) {
	#Los datos del registro se capturaron correctamente, el registro puede ejecutarse
		if (mysqli_num_rows($resultado)===1) {
        #Si ya hay un registro existente que coincide con el nuevo registro (por el atributo placa), no se guarda el nuevo registro. Se redirige a la página del formulario
			echo "<script>
			alert('El transportador ya fue registrado');
			window.location.href='form_registro_transportadores.php';

			</script>";
		} else {
        #Si no hay un registro existente que coincida, se guarda el registro en la base de datos
			$consulta1 = "INSERT INTO tbl_transportadores (nombre_tra,apellido_tra,telefono,tipo_vehiculo,color_vehiculo,placa,capacidad) VALUES ('$nombre_tra','$apellido_tra','$telefono','$tipo_vehiculo','$color_vehiculo','$placa','$capacidad')";
			
			$resultado1 = mysqli_query($mysqli, $consulta1);

			if ($resultado1 == true) {
				# Si el registro se insertó correctamente en la base de datos. Se redirige a la página del formulario
				echo "<script>
				alert('Se ha registrado el transportador');
				window.location.href='form_registro_transportadores.php';

				</script>";

			} else {
				#Si el registro no se insertó (guardó) correctamente en la base de datos. Se redirige a la página del formulario
				echo "<script>
				alert('Error al registrar el transportador');
				window.location.href='form_registro_transportadores.php';

				</script>";
			}
			
		}
	} else {
	#Si los datos no se capturaron correctamente y/o el registro no se insertó (guardó) correctamente en la base de datos. Se redirige a la página del formulario
		echo "<script>
		alert('Error al registrar el transportador');
		window.location.href='form_registro_transportadores.php';

		</script>";
	}

}

?>
