<?php
	include "php/conexao.php";
	SESSION_START(); 
// acentuação
  mysqli_query($conexao,"SET NAMES 'utf8'");  
  mysqli_query($conexao,'SET character_set_connection=utf8');
  mysqli_query($conexao,'SET character_set_client=utf8');  
  mysqli_query($conexao,'SET character_set_results=utf8');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cabeçalho</title>
	<meta charset="UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="ajax.js"></script>
    <script defer src="font-awesome/fontawesome-all.js"></script>

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Css -->
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="gui.css">
</head>
<body>


	
	<div id="pop-logcad">
	    <div class="loginecadastro" id="div-login">
	    	<span class="fechar" onclick="fecharLog()">X</span><br><br>
	    	<form method="post" id="form_login" action="">
	      	<label style="margin-bottom: 6px; margin-top: 13px;">Insira seu Email: </label><br>
	      		<input type="text" name="email_log" required=""><br>
	      	<label style="margin-bottom: 6px; margin-top: 13px;">Insira sua Senha:</label><br>
	      		<input type="password" name="senha_log" required=""><br>
				  
	      	<a type="submit" href="#" name="btn-login-entrar" id="btn-login-entrar"> <button id="entrar"><span>Entrar</span></button></a><br>
	      	<p id="resp_login" ></p>
	      </form>
	    </div>  




	    <div class="loginecadastro" id="div-cadastro">
	    	<span class="fechar" onclick="fecharCad()">X</span><br><br>
	    	<form method="post" action="" id="form_cadastro">
	    	<label style="margin-bottom: 6px; margin-top: 13px;">Qual o seu nome completo?</label><br>
	      		<input type="text" name="nome_cad" required><br>
	      	<label style="margin-bottom: 6px; margin-top: 13px;"> Coloque o seu melhor e-mail:</label><br>
	      		<input type="text" name="email_cad" required><br>
	      	<label style="margin-bottom: 6px; margin-top: 13px;"> Digite uma senha:</label><br>
	      		<input type="password" name="senha_cad" required><br>
	      	<label style="margin-bottom: 6px; margin-top: 13px;"> Digite novamente a senha:</label><br>
	      		<input type="password" name="clone_senha_cad" required><br>

	      	<a  type="submit" name="btn-cadastrar" id="btn-cadastrar"> <button id="cadastrar"><span>Cadastrar</span></button></a><br>
	      	<p id="resp_cadastro" > </p>
	      	</form>
	    </div>	
	</div>
		
	<!--<div class="pop-informacao">
		<div class="loginecadastro" id="div-informacao">
	    	<span class="fechar" onclick="fecharInformacao()">X</span><br><br>
	    		<h1>Pet Web</h1>

				<p>Ao que tudo indica “pet” surgiu, por volta do fim do século 14, na Escócia e norte da Inglaterra com o sentido de “animal domado”. 
					No entanto, há registros de que em 1530 ela já era usada no sentido de “animal favorito” (animal de estimação). Ninguém afirma 
					com certeza, porém acredita-se que “pet” tem sua origem ligada à palavra ‘petty‘, que era usada em 1393 com o sentido de ‘small‘ (pequeno).
					De forma geral, o “pet web” diferente do “pet shop” surgiu como um meio rápido e eficaz na distribuição marketing no mundo pet, 
					além da possibilidade de compras em lojas virtuais especializadas em animais.</p>
	      
	    </div>  

	</div>-->



	<nav class="color-white bk-azul"> 
		<div id="div-cabecalho-1">
			<a href="agendamento2.php" class="link-nav">
				<p id="logo">AGENDAMENTO PET <span></span><span></span><span></span><span></span> </p>
			</a>
		</div>

		<div id="div-cabecalho-2">
			<a href="#" class="color-white" onclick="fecharmobile()"><p id="fecharM">fechar</p></a>
			<?php 
			if(isset($_SESSION['logado'])==false){
				
				echo '				
				<div class="container">
				<div class="containerGui">
					<p style="background-color: #255784; color:#255784">.</p>
				</div>
				<span class="text1"> Bem-Vindo ao</span>
				<span class="text2">Agendamento Pet</span>
				<div class="containerGui">
					<p style="background-color: #255784; color:#255784">.</p>
				</div>
				<br>
				<!--<div class="">
				<a id = "btnlogin" href="#" class="link-nav color-white" onclick="popSaibaMais()"> <span></span><span></span><span></span><span></span>
				Clique Aqui!
				</a>
				</div>-->
				
				</div>';

				echo '<a id = "btnlogin" href="#" class="link-nav color-white" onclick="popLogin()"> <span></span><span></span><span></span><span></span>
						Login
						</a> 

					  <p class="separador"> | </p>';

				echo '<a id ="btncadastro" href="#" class="link-nav color-white" onclick="popCadastrar()"> <span></span><span></span><span></span><span></span>
						Cadastrar-se
					 </a>
				
					  <p class="separador"> </p>';

				
			}
			else {
				if ($_SESSION['logado']>0){
				$email_user=$_SESSION['email_user'];
				$cod_dados=$_SESSION['id_login'];
					echo '<a href="agendamento.php" class="link-nav color-white"> <span id="agendamentos-nav" title="'.$email_user.'">
						<i class="far fa-calendar-alt icons2"></i>Meus Agendamentos
					  </span></a> 

					  <span class="separador"> | </span>';
					  
					echo '<form action="php/sair.php" style="display: inline;">
							<button type="submit" id="button_nav" class="color-white">
							<span id="sair-nav" title="'.$email_user.'"> <i class="fas fa-sign-out-alt icons2"></i>Sair</span>
							</button>
						  </form>
						
					  <span class="separador"> | </span>';

					
				}
			}
			?>
		</div><!-- div-cabecalho-2 -->
		
	</nav>
</body>


<script type="text/javascript">

		var informacao=document.getElementById("pop-informacao");
		var popinformacao=document.getElementById("div-informacao");
   		var logcad=document.getElementById("pop-logcad");
   		var poplogin=document.getElementById("div-login");
   		var popcadastro=document.getElementById("div-cadastro");
   		var mobile=document.getElementById("div-cabecalho-2");

    function popLogin(){
   		logcad.style.display="block";
   		poplogin.style.display="block";
    }

	function popSaibaMais(){
   		informacao.style.display="block";
		popinformacao.style.display="block";
    }

    function popCadastrar(){
   		logcad.style.display="block";
   		popcadastro.style.display="block";
    }

    function fecharLog(){
    	logcad.style.display="none";
   		poplogin.style.display="none";
    }
	
	function fecharInformacao(){
    	informacao.style.display="none";
   		popinformacao.style.display="none";
    }

    function fecharCad(){
   		logcad.style.display="none";
   		popcadastro.style.display="none";
    }

    function menuM(){
    	mobile.style.display="block";
    }

    function fecharmobile(){
   		mobile.style.display="none";
   	}
</script>

</html>