<?php
//include 'ans.php'; 
                  $id_medico= $_REQUEST['medico'];
                  $cid= $_REQUEST['cid'];	   
                  $username = "root";
                  $password="";

                  $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);	
// Seleciona o Banco de dados através da conexão acima
                 $sql = "SELECT * FROM medicos 	WHERE id_medico = '$id_medico'";
                 $resultado = $conn->query($sql);
                   while($row = $resultado->fetch()) {
				   
				   
				   $nome_medico = utf8_encode($row["nome_medico"]);
				   $conselho =$row["conselho_medico"];
				   $crm = $row["crm_medico"];
				   $uf = $row["uf_crm_medico"];
				   $cbo = $row["cbo_medico"];
                            
	           }
			    
                $sqlcid = "SELECT * FROM cid WHERE codigo_cid ='$cid'";
                 $resulta = $conn->query($sqlcid);
                   while($busca = $resulta->fetch()) {
				   
				 $codigocid =  $busca["codigo_cid"];
				 $descricaocid = utf8_encode($busca["descricao_cid"]);
				   
                            
	           }



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title></title>
	<link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script>
 <link rel="stylesheet" type="text/css"  href="guia.css" />
</head>
<body>

<div class = "css">
<!--<img src="00001.jpg" height="793" width="1100"> -->
<br> <br> 

<div class="ans" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;>"><?php //echo $ans; ?> <div> 
<div class="solicitante" style="letter-spacing:2px; font-size:13px; font-family:arial, Helvetica, sans-serif;color:#333;"> <b><?php echo $nome_medico; ?></b></div> 
<div class="contratado" style="letter-spacing:5px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"><b> <?php echo $nome_medico; ?></b></div> 
<div class="conselho" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"><b> <?php echo $conselho; ?> </b></div> 
<div class="numconselho" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"><b> <?php echo $crm; ?> </b> </div> 
<div class="uf" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"> <b><?php echo $uf; ?></b></div> 
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"> <b><?php echo $cbo;?></b></div> 
<div class="indicacaoclinica" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif;color:#333;"><b><?php echo $descricaocid; ?></b></div> 


</body>




</body>
</html>
