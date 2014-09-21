<?php
 $cantidad = 9;
	echo "<form id=\"formulario_registro\" action=\"vehiculos.php?controlador=vehiculos&accion=altavehiculo\" method=\"POST\">";
							for ($i=1; $i <= 1; $i++) 
			{
							echo "Id Vehiculo$i: ";
							echo "<input type=\"text\" name=\"VIN$i\" value=\"\"]><br>";
							echo "Marca: ";
							echo "<input type=\"text\" name=\"Marca$i\" value=\"\"]><br>";
							echo "Modelo: ";
							echo "<input type=\"text\" name=\"Modelo$i\" value=\"\"]><br>";
							echo "Color: ";
							echo "<input type=\"text\" name=\"Color$i\" value=\"\"]><br>";
							echo "Caracteristicas: ";
							echo "<input type=\"text\" name=\"Caracteristicas$i\" value=\"\"]><br>";
							echo "Kilometraje: ";
							echo "<input type=\"text\" name=\"Kilometraje$i\" value=\"\"]><br>";
							echo "Cantidad de combustible: ";
							echo "<select id=\"Combustible\" name=\"Combustible$i\">
									<option value=\"0\" disabled selected>Selecciona Cantidad</option>
									<option selected>-</option>
									<option value =\"1/4\">1.5</option>
									<option value =\"1/2\">2.4</option>
									<option value =\"3/4\">6.5</option>
									<option value =\"full\">20.0</option>
								</select><br>";
							echo "Estado del vehiculo: ";
							echo "	<select id=\"Golpes\" name=\"Golpes$i\">
									<option value=\"0\" disabled selected>\"Selecciona Estado\"</option>
									<option selected>-</option>
									<option value =\"Sin daños\">\"Sin daños\"</option>
									<option value =\"Defensa golpeada\">\"Defensa golpeada\"</option>
									<option value =\"Cofre golpeado\">\"Cofre golpeado\"</option>
									<option value =\"Vidrio roto\">\"Vidrio roto\"</option>
									<option value =\"Rayado\">\"Rayado\"</option>
									<option value =\"Abolladura\">\"Abolladura\"</option>
									<option value =\"PDD\">\"Puerta delantera derecha golpeada\"</option>
									<option value =\"PDI\">\"Puerta delantera izquierda golpeada\"</option>
									<option value =\"PTD\">\"Puerta tracera derecha golpeada\"</option>
									<option value =\"PTI\">\"Puerta tracera izquierda golpeada\"</option>
									</select><br>";
							echo "Ubicacion del vehiculo: ";
							echo "<select id=\"Ubicacion\" name=\"Ubicacion$i\">
									<option value=\"0\" disabled selected>Selecciona Ubicacion</option>
									<option selected>-</option>
									<option value =\"A1\">A1</option>
									<option value =\"A2\">A2</option>
									<option value =\"A3\">A3</option>
									<option value =\"B1\">B1</option>
									<option value =\"B2\">B2</option>
									<option value =\"B3\">B3</option>
									<option value =\"C1\">C1</option>
									<option value =\"C2\">C2</option>
									<option value =\"C3\">C3</option>
								</select><br><br>";
							}
							echo "<input type=\"submit\" name=\"submit\" value=\"Dar alta\">";
							echo "</form>";
?>
