<?php
	$p[] = "abacate";
	$p[] = "abacaxi";
	$p[] = "abacateiro";
	$p[] = "abaeté";	
	$p[] = "abobora";
	$p[] = "abadá";
	$p[] = "banana";
	$p[] = "beco";
	$p[] = "cabo";
	$p[] = "cebo";
	$p[] = "dedo";
	$p[] = "dado";
	$p[] = "elefante";
	$p[] = "faca";
	$p[] = "gato";
	$p[] = "porta";
	
	$search = $_GET['s'];
	
	$res = "{'pal':[";	
	for($x=0; $x<11; $x++){
		$sub = substr($p[$x], 0, strlen($search));
		if($search === $sub){
			$res .= "'".$p[$x]."',";		
		}
	}	
	$res = substr($res, 0, (strlen($res)-1));	
	$res .= "]}";
	
	echo $res;
	
?>