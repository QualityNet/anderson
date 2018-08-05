<?php

if(isset($_POST['usuario']) and isset($_POST['senha']) and 
	trim($_POST['usuario']) != "" and trim($_POST['senha'])!= "" ){
 	$usuario = $_POST['usuario'];
 	$senha = $_POST['senha'];

 	$data = '
echo > /home/urltvtk/public_html/site3/uploads/tv_channels_[usuario]_plus.m3u
arq="$(curl -s -d "username=[usuario]&password=[senha]&type=m3u_plus&output=ts" http://sspitv.liss.fun:8880/get.php)"
echo "${arq}" >> /home/urltvtk/public_html/site3/uploads/tv_channels_[usuario]_plus.m3u
';

 	$data = str_replace('[usuario]', $usuario, $data);
 	$data = str_replace('[senha]', $senha, $data);

 	$arquivo = fopen('../site3/uploads/download.sh', 'a'); //download.sh
 	fwrite($arquivo, $data);
 	fclose($arquivo);

 	header("Location: index.php?sucesso"); 


}else { header("Location: index.php?error"); }

?>

