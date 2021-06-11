<?php

	include "php/conexao.php";
 	// acentuação
	mysqli_query($conexao,"SET NAMES 'utf8'");  
	mysqli_query($conexao,'SET character_set_connection=utf8');
	mysqli_query($conexao,'SET character_set_client=utf8');  
	mysqli_query($conexao,'SET character_set_results=utf8');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rodapé</title>
	<meta charset="UTF-8">
    <script defer src="font-awesome/fontawesome-all.js"></script> 
 
	<link rel="stylesheet" href="css/footer.css"> 
</head>


<body>
	
<footer class="">
		<div id="div-contato">
			<div style="margin-right:150px;">
				<h2 style="color:white;">Navegação</h2>
				<p style="color:white;">Inicio</p>
				<p style="color:white;">Produtos</p>
				<p style="color:white;">Quem Somos</p>
			</div>
		</div>
		<div style="margin-right:150px;">
				<h2 style="color:white;">Redes Sociais</h2>
				<img src="imagens/instagram.png" style="width:40px; margin-right:20px; margin-left:10px;" alt="">
				<img src="imagens/face.png" style="width: 38px;" alt="">
			</div>
			<div style="margin-right:5px;">
				<h2 style="color:white;">Contato</h2>
				<p style="color:white;">(17)99426-0709</p>
				<p style="color:white;">Agendas_pet@gmail.com</p>
				<p style="color:white;">São Paulo</p>
			</div>
	   </div>

	   
</footer>


</body>
</html>