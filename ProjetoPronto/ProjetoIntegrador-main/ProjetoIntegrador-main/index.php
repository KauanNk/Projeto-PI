<!DOCTYPE html>
<html>
<head>
	<title>AGENDAMENTO PET</title>
	<meta charset="UTF-8">
  
   <link rel="icon" href=""> 

   <link rel="stylesheet" href="css/">
</head>
<body>
	
   <?php include "nav.php"; ?>

	<div id="container">
		<div id="rgba">
            <?php
               	if(isset($_SESSION['logado'])==false){          
					echo '<button onclick="popLogin()" class="bk-azul-escuro principal"></button>';
				}
				else if (isset($_SESSION['logado'])==true AND $_SESSION['logado']>0){
					echo '<a href="agendamento2.php" > ';
				}
			?>

			</div>
		</div>
	</div>

   
</body>


</html>