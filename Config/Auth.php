<?php namespace Config;

	class Auth
	{
		static function start()
		{
			@session_start();
		}

		static function get_session($sesion="sesion")
		{
			return $_SESSION[$sesion];
		}

		static function exist($sesion="sesion")
		{
			if (isset($_SESSION[$sesion]))
				return true;
			return false;
		}	

		static function set_session($obj,$ses="sesion")
		{
			$_SESSION[$ses]=$obj;
		}


		static function getuser($cargo,$ses="sesion")
		{
			if ($_SESSION[$ses]["nombre_cargo"]==$cargo)
				return true;
			return false;
		}

		static function getareaId($ses="sesion")
		{
			return $_SESSION[$ses]["id_area"];
		}

		static function getdato($dato,$ses="sesion")
		{
			return $_SESSION[$ses][$dato];
		}

		static function destroy()
		{
			@session_destroy();
		}
	}

?>

