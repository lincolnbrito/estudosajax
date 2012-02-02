<?php
	header("Content-Type: text/html; charset=utf-8");
	
	$estado = $_GET["estado"];
	$cidades = "";
	
	if($estado == "pr"){
		$cidades .= "<option value=\"1\">Tupãssi</option>";
		$cidades .= "<option value=\"2\">Toledo</option>";
		$cidades .= "<option value=\"3\">Cascavel</option>";
		$cidades .= "<option value=\"4\">Pato Branco</option>";	
	}
	
	if($estado == "sp"){
		$cidades .= "<option value=\"5\">Mogi</option>";
		$cidades .= "<option value=\"6\">Palmeiras</option>";
		$cidades .= "<option value=\"7\">Santos</option>";
	}

	echo $cidades;
?>