<?php
	header("Content-Type: text/html; charset=utf-8");
	
	$estado = $_GET['estado'];
	$cidades = "{'cidades':[";
	
	if($estado === "pr"){
		$cidades .= "{'cdg':'1', 'nm':'Tupãssi'},
					 {'cdg':'2', 'nm':'Toledo'},
					 {'cdg':'3', 'nm':'Cascavel'},
					 {'cdg':'4', 'nm':'Pato Branco'}]}";					 
	}		
	
	if($estado === "sp"){
		$cidades .= "{'cdg':'5', 'nm':'Mogi'},
					 {'cdg':'6', 'nm':'Palmeiras'},					 
					 {'cdg':'7', 'nm':'Santos'}]}";					 
	}		
	
	echo $cidades;
?>