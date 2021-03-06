/**
* Exemplo de uso com AJAX
* Baseado em:
* http://battisti.files.wordpress.com/2007/05/apresentacao.pdf
* http://www.unioeste.br/servicos/arqvirtual/arquivos/001-2007-DVCO.pdf
*/
function ajaxInit(){
	
	var xmlhttp;
	
	try{
		// IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}catch(ee){
		try{
			// IE6, IE5
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try{				
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(E){
				xmlhttp = false;
			}
		}	
	}
	
	return xmlhttp;
}