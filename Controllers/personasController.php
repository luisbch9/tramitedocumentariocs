<?php namespace Controllers;

	/**
	* PErsonas Controllers
	*/
	use Models\Persona as Persona;
	use Models\Empleado as Empleado;
	use Models\Js as Js;
	use Config\Auth as Auth;

	class personasController
	{
		function index(){
			$p = new Persona();
			Js::prints("Todas las personas ",false,"title");
			Js::prints($p->getAllPersonasDatos(),false);
			render("personas/todas");

		}

		function ver($id){
			echo $id;
			$t = new Persona;
			if ($t->obtenerDatosPersona($id)){
				$e = new Empleado;
				
				if ($e->obtenerDatosId($t->getID())){
					$editar = false;
				$ae = $e->getAllDatos();
				print_r($ae);
				$tramite = array(
				'id' => $t->getID(), 
				'nombres'=>$t->getNombres(),
				'apellidos'=>$t->getApellidos(),
				'dni'=>$t->getDni(),
				'empresa'=>$t->getNombreEmpresa(),
				'email' => $ae["correo"],
				'area' => $ae["nombre_area"],
				'cargo' => $ae["nombre_cargo"],
				'activo' => $ae["activo"]

				);

				}
				else{
					$editar = true;
					$tramite = array(
				'id' => $t->getID(), 
				'nombres'=>$t->getNombres(),
				'apellidos'=>$t->getApellidos(),
				'dni'=>$t->getDni(),
				'empresa'=>$t->getNombreEmpresa()

				);

				}

			/*$var = false;
			if (Auth::revisarArea("Mesa de Partes") or Auth::getuser("Gerente")){
				$var = true;
			}
			*/
			Js::prints($editar,true,"editar");
			Js::prints($tramite,true);
			render("perfil/barrita");
			}

			else{
				JS::prints("No existe una persona con id,".$id,"error",false);
			}
		}



	}	