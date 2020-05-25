<?php
	//https://web.whatsapp.com/send?phone=+542302368067&text=Holi+chau
	//https://api.whatsapp.com/send?phone=+542302368067&text=Holi+chau
    include "../logica/tipoDispositivo.php";
    if($_SESSION['tipo']=="PC"){
    	$url="https://web.whatsapp.com/";
    }else{
		$url="https://api.whatsapp.com/";
    }
	$mensaje=str_replace("\r\n","%0A",$_POST['mensaje']); 				//str_replace("a","b","ac") --> "bc"
	
	$url=$url."send?phone=+542302544765&text=".$mensaje;
	print("<script>window.location='".$url."';</script>");
?>