<?php
foreach ($vehiculo as $dato)
{
echo "Id Vehiculo: ".$dato["VIN"];
echo "<br>";
echo "Marca: ".$dato["Marca"];	
echo "<br>";
echo "Modelo: ".$dato["Modelo"];	
echo "<br>";
echo "Color: ".$dato["Color"];	
echo "<br>";
echo "Caracteristicas: ".$dato["Caracteristicas"];
echo "<br>";
echo "Kilometraje: ".$dato["Kilometraje"];	
echo "<br>";
echo "Combustible: ".$dato["Combustible"];
echo "<br>";
echo "Golpes: ".$dato["Golpes"];
echo "<br>";
echo "Ubicacion: ".$dato["Ubicacion"];
echo "<br>";
echo "<br>";
}
?>
