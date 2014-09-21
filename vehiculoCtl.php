<?php
	class VehiculoCtl
	{
		public $modelo;
		public $VIN;
		public $KM;
		public $Combustible;
		public $Golpes;
		public $Ubicacion;
		
		
		public function __construct()
		{
			//Incluye el modelo
			include('modelo/vehiculoMdl.php');
			//Creo el objeto del modelo
			$this->modelo = new VehiculoMdl();
		}
		
		
		
		public function ejecutar()
		{	
			
			$regex = "/^\d+$/";
			$vehiculo = array();
			
			switch($_GET['accion'])
			{
							
				case 'altavehiculo':
							if(empty($_POST))
							{
								require("Vistas/AltaVehiculos.php");
							}
							
							else
							{
							//Se obtienen las variables para alta y se limpian
							
							
							if(isset($_POST["VIN"]))
							{

									$VIN	= $_POST["VIN"];		
							
							}
							else
							{
							$VIN = "";
							}
							if(isset($_POST["Marca"]))
							{
							$Marca 	= $_POST["Marca"];
							}
							else
							{
							$Marca = "";
							}
							if(isset($_POST["Modelo"]))
							{
							$Modelo = $_POST["Modelo"];
							}
							else
							{
							$Modelo = "";
							}
							if(isset($_POST["Color"]))
							{
							$Color 	= $_POST["Color"];
							}
							else
							{
							$Color = "";
							}
							if(isset($_POST["Caracteristicas"]))
							{
							$Caracteristicas = $_POST["Caracteristicas"];
							}
							else
							{
							$Caracteristicas = "";
							}
							if(isset($_POST["Kilometraje"]))
							{
							$Kilometraje = $_POST["Kilometraje"];
							}
							else
							{
							$Kilometraje = "";
							}
							if(isset($_POST["Combustible"]))
							{
							$Combustible = $_POST["Combustible"];
							}
							else
							{
							$Combustible = "";
							}
                                                        if(isset($_POST["Golpes"]))
							{
							$Golpes = $_POST["Golpes"];
							}
							else
							{
							$Golpes = "";
							}
                                                        if(isset($_POST["Ubicacion"]))
							{
							$Ubicacion = $_POST["Ubicacion"];
							}
							else
							{
							$Ubicacion = "";
							}
							
							
					
							$vehiculo = $this->modelo->alta($VIN,$Marca,$Modelo,$Color,$Caracteristicas,$Kilometraje,$Combustible,$Golpes,$Ubicacion,$vehiculo);
							
							
							if($vehiculo!=null)
							{
								require("Vistas/ListadoVehiculos.php");
								
							}
							else
							{
								require("Vistas/error.html");
							}
							}
							break;
				
				case 'modificarubicacion':
							echo "Lugar modificado";
							break;
							
				case 'darbaja':
							echo "El vehiculo salio del taller";
							break;
			}
		}
	}
?>
