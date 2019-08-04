<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>


<?php

	if(isset($_POST["enviando"])){

		$nombre=$_POST["nombre_usuario"];
		$contra=$_POST["contra"];
		

		switch($nombre){

			case "Israel":
				echo "Usuario autorizado. Hola $nombre";

				break;

			case "Ernesto":
				echo "Usuario autorizado. hola $nombre";
				break;

			case "Jimena":
				echo "Usuario autorizado. hola $nombre";
				break;

			default:
				echo "Usuario noautorizado";
		}
	}
?>