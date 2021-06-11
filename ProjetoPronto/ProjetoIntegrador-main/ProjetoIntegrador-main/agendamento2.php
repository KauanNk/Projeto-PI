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
	<title>Agendamento</title>
  <meta charset="UTF-8">
   <!-- Icon -->
   <link rel="icon" href="imagens/icon.jpg"> 
	 <!-- Font Awesome -->
   <script defer src="font-awesome/fontawesome-all.js"></script> 
   <!-- Css --> 
   <link rel="stylesheet" href="css/agendamento.css">
   <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>


  <script type="text/javascript">
    function dataEhora(){
      var data_consulta=document.getElementById("data_consulta").value;
      var local_consulta=document.getElementById("local_consulta").value;
      var resp_consulta=document.getElementById("resp_consulta").value;
      
      if (data_consulta && local_consulta && resp_consulta !="") {
        document.getElementById("dt_a").value=data_consulta;
        document.getElementById("hr_a").value=resp_consulta;
        document.getElementById("loc_a").value=local_consulta;
      }
    }

    function recarregar(){
      document.location.reload(true);
    }
  </script>
</head>

<body>
	
   <?php include "nav.php";
    ?>

	<div id="container-agen">
		<div id="rgba">


      <?php
        if(isset($_SESSION['logado'])==true AND $_SESSION['logado']>0){
          $busca=mysqli_query($conexao,"SELECT * FROM  tb_dadoscliente WHERE cod_dadosC=$cod_dados");
          $row_busca=mysqli_fetch_array($busca);
          $nome_dadosC=$row_busca['nome_dadosC'];
          $telefone_dadosC=$row_busca['telefone_dadosC'];
          $rg_dadosC=$row_busca['rg_dadosC'];
        }
      ?>



      <div id="container-a">
        <div class="">
            <h1 style="text-align:center; text-decoration: underline; color:white; ">Nossos Serviços</h1>
            <br>
        </div>
        <div id="div-ag" style="margin-left:25px;" class="bk-azul-escuro box-s">
          <p></p>
          <center><img src="imagens/shampoo.png" style="width:100px; margin-right:15px; border: 2px solid white; border-radius: 100px;" alt=""></center>
          <center><h2 style="color:white; margin-right:15px;">Banho e Tosa</h2></center>
          <br>
          <div class="caixa">
              <p style="color:white; text-align:center; margin-right:30px">Serviços disponíveis das 07:00h da manhã até as 22:00h da noite, de segunda ao sábado.</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Veterinária das 10:00h da manhã até as 19:00h da tarde</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Oferecemos também produtos pet </p>
              <br>
          </div>

        </div>

        <div id="div-ag" style="margin-left:15px;" class="bk-azul-escuro box-s">
          <p></p>
          <center><img src="imagens/Atendente.png" style="width:100px; margin-right:15px; border: 2px solid white; border-radius: 100px;" alt=""></center>
          <center><h2 style="color:white; margin-right:15px;">Serviços</h2></center>
          <br>
          <div class="caixa">
              <p style="color:white; text-align:center; margin-right:30px">Atendimento rápido e prático</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Nós buscamos e levamos seu pet em casa</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Pacotes de banho e tosa disponíveis</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Clínica veterinária</p>
          </div>

        </div>
        <div id="div-ag" style="margin-left:15px;" class="bk-azul-escuro box-s">
          <p></p>
          <center><img src="imagens/pagamento.png" style="width:100px; margin-right:15px; border: 2px solid white; border-radius: 100px;" alt=""></center>
          <center><h2 style="color:white; margin-right:15px;">Pagamentos</h2></center>
          <br>
          <br>
          <br>
          <div class="caixa">
              <p style="color:white; text-align:center; margin-right:30px">PicPay</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Cartão</p>
              <hr style="color:white; text-align:center; margin-right:30px">
              <p style="color:white; text-align:center; margin-right:30px">Dinheiro</p>
          </div>
          <br>
          <br>
          
        </div>
        </div>
    </div><!-- rgba -->
	</div><!-- container-agen -->

<!-- 
#008B00
#8B0000
#EE7600 
-->

  <?php include "rodape.php"; ?>
</body>
</html>