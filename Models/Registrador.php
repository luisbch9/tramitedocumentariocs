<?php namespace Models;
	/**
	*
	*/

    use Models\Query as Query;
    include_once "Query.php";

	class Registrador
	{
		var $query;
		function __construct()
		{
			$this->query=new Query();
		}

		function registrarPersona($Nombres,$Apellidos,$Dni)
		{

			$request="INSERT INTO `personas`(`Dni`, `Nombres`, `Apellidos`) VALUES (".$Dni.",'".$Nombres."','".$Apellidos."')";
			$this->query->consulta($request);
			
		}

		function registrarArea($Nombre)
		{
			$request="INSERT INTO `area`(`Nom_Area`) VALUES ('".$nombre."')";
			$this->query->consulta($request);

		}

		function crearCargo($Nombre_Cargo,$Descripcion){
			$request="INSERT INTO `cargos`(`Nombre_Cargo`, `Descripcion`) VALUES ('".$Nombre_Cargo."','".$Descripcion."')";
			$this->query->consulta($request);
		}

		function registrarEmpleado($Nombres,$Apellidos,$Id_Area,$Activo,$Correo,$Dni_Empleado,$Password)
		{
			$request2="INSERT INTO `personas`(`Dni`, `Nombres`, `Apellidos`) VALUES (".$Dni_Empleado.",'".$Nombres."','".$Apellidos."')";
			$this->query->consulta($request2);
			$id=$this->query->get_id();
			$request="INSERT INTO `empleados`(`Id_Empleado`,`Id_Cargo`, `Id_Area`, `Activo`, `Correo`,`Dni_Empleado`, `Password`) VALUES (".$id.",4,".$Id_Area.",'".$Activo."','".$Correo."',".$Dni_Empleado.",'".$Password."')";
			$this->query->consulta($request);
		}

		function cambiarCargo($Id_Empleado,$Id_Cargo)
		{

			$request="UPDATE `empleados` SET `Id_Cargo`=".$Id_Cargo." WHERE Id_Empleado=".$Id_Empleado;
			$this->query->consulta($request);
		}
																			//Id_Tipo_tramite?
		function crearTramite($Folios,$Asunto,$Id_Persona,$Id_Area_Destino,$Tipo_Tramite,$Prioridad)
		{
			$request="INSERT INTO `tramites`(`Folios`, `Fecha_Ingreso`, `Asunto`, `Id_Persona`, `Id_Area_Destino`) VALUES (".$Folios.",'2016-07-15','".$Asunto."',".$Id_Persona.",".$Id_Area_Destino.")";
			$this->query->consulta($request);
			$tramite_id=$this->query->get_id();
			$request2="INSERT INTO `tipo_tramite`(`Id_Expediente`, `Tipo_Tramite`, `Prioridad`) VALUES (".$tramite_id.",'".$Tipo_Tramite."',".$Prioridad.")";
			$this->query->consulta($request2);
		}

	}
 ?>
