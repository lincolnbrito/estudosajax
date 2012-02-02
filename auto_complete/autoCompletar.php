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
	
	$item = '';
	
	$search = $_GET['s'];
	$res = "{'pal':[";	
	
	for($x=0; $x<count($p); $x++){
		$sub = substr($p[$x], 0, strlen($search));
		
		if($search === $sub){
			$item .= "'".$p[$x]."',";		
		}
	}
	
	$item = substr($item, 0, (strlen($item)-1));
	if(strlen($item)>0){
		$res .= $item."]}";		
	}else{
		$res = "{'pal':[]}";
	}	
	
	echo $res;
?>