<?php
	date_default_timezone_set('America/El_Salvador');

	function fecha(){
		$mes = array("","Enero",
					  "Febrero",
					  "Marzo",
					  "Abril",
					  "Mayo",
					  "Junio",
					  "Julio",
					  "Agosto",
					  "Septiembre",
					  "Octubre",
					  "Noviembre",
					  "Diciembre");
		return date('d')." de ". $mes[date('n')] . " del " . date('Y');
	}

	function hora(){
		return date('h:i:s A');
	}
?>


