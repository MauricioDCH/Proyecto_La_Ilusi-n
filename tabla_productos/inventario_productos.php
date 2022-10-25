<!DOCTYPE html>
<html>
<head>
	<title>tabla de inventario</title>
	<link rel="stylesheet" type="text/css" href="css/tabla_inventario.css">
</head>
<body>
	<div class="title">
		<p class="font_title">Tabla de inventario</p>
	</div>
	<div>
		<table class="table table-striped" style="font-size: 15px; ">
    		<thead>
				<tr>
					<th class="title_table"> Id referencia</th>
					<th class="title_table"> Tipo producto</th>
					<th class="title_table"> Nombre prducto</th>
				    <th class="title_table"> Precio producto </th>
				    <th class="title_table"> Largo </th>
				    <th class="title_table"> Ancho </th>
				    <th class="title_table"> Alto </th>
				    <th class="title_table"> Color </th>
				    <th class="title_table"> Peso </th>
				    <th class="title_table"> Disponibilidad </th>
				    <th class="title_table"> Descripcion </th>
				    <th class="title_table"> Eliminar</th>
				    <?php
				  		include("../conexion_BD/conexion.php");
				  		$consultodo="SELECT * FROM tbl_productos"; 
						$resultadotodo=mysqli_query($mysqli,$consultodo); 
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row=$resultadotodo->fetch_assoc()) {?>
 				<tr class="resaltar">
 
					  <td class="text_table"> <?php 
					  			echo $row['id_referencia'];
					        ?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['tipo_producto'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['nombre_prducto'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['precio_producto'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['largo_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['ancho_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['alto_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['color_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['peso_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['disponibilidad_p'];
					  		?>
					  </td>
					  <td class="text_table"> <?php 
					  			echo $row['descripcion_p'];
					  		?>
					  </td>

					  <td> <button type="button">Eliminar</a></button> </td>
				</tr>
						<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>