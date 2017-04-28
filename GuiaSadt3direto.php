<?php

include 'buscaconfig.php';
 
$numeroaleatorio=rand(200, 100000000000); 

ini_set('display_errors', 0 );
error_reporting(0);

$nome_medico = $_GET["nome_medico"];
$imagem = $_GET["imagem"];

$nomecliente = $_GET["nomecliente"];
$contratador = $_GET["contratador"];
$empresa = $_GET["empresa"];
$conselho= $_GET["conselho"];
$crm = $_GET["crm"];
$uf = $_GET["uf"];
$cbo = $_GET["cbo"];
$codigocid = $_GET["codigocid"];
$descricaocid = $_GET["descricaocid"];

$procedimento_tabela3= $_GET["procedimento_tabela3"];
$procedimento_codigo3= $_GET["procedimento_codigo3"];
$procedimento_nome3=$_GET["procedimento_nome3"];

$procedimento_tabela4= $_GET["procedimento_tabela4"];
$procedimento_codigo4= $_GET["procedimento_codigo4"];
$procedimento_nome4=$_GET["procedimento_nome4"];

$procedimento_tabela5= $_GET["procedimento_tabela5"];
$procedimento_codigo5= $_GET["procedimento_codigo5"];
$procedimento_nome5=$_GET["procedimento_nome5"];

$procedimento_tabela6= $_GET["procedimento_tabela6"];
$procedimento_codigo6= $_GET["procedimento_codigo6"];
$procedimento_nome6=$_GET["procedimento_nome6"];

$procedimento_tabela7= $_GET["procedimento_tabela7"];
$procedimento_codigo7= $_GET["procedimento_codigo7"];
$procedimento_nome7=$_GET["procedimento_nome7"];

$procedimento_tabela8= $_GET["procedimento_tabela8"];
$procedimento_codigo8= $_GET["procedimento_codigo8"];
$procedimento_nome8=$_GET["procedimento_nome8"];

$procedimento_tabela9= $_GET["procedimento_tabela9"];
$procedimento_codigo9= $_GET["procedimento_codigo9"];
$procedimento_nome9=$_GET["procedimento_nome9"];

$procedimento_tabela10= $_GET["procedimento_tabela10"];
$procedimento_codigo10= $_GET["procedimento_codigo10"];
$procedimento_nome10=$_GET["procedimento_nome10"];


$procedimento_tabela11= $_GET["procedimento_tabela11"];
$procedimento_codigo11= $_GET["procedimento_codigo11"];
$procedimento_nome11=$_GET["procedimento_nome11"];

$procedimento_tabela12= $_GET["procedimento_tabela12"];
$procedimento_codigo12= $_GET["procedimento_codigo12"];
$procedimento_nome12=$_GET["procedimento_nome12"];

$procedimento_tabela13= $_GET["procedimento_tabela13"];
$procedimento_codigo13= $_GET["procedimento_codigo13"];
$procedimento_nome13=$_GET["procedimento_nome13"];

$procedimento_tabela14= $_GET["procedimento_tabela14"];
$procedimento_codigo14= $_GET["procedimento_codigo14"];
$procedimento_nome14=$_GET["procedimento_nome14"];

$procedimento_tabela15= $_GET["procedimento_tabela15"];
$procedimento_codigo15= $_GET["procedimento_codigo15"];
$procedimento_nome15=$_GET["procedimento_nome15"];
$unicos =$_GET["unicos"];

$multiplo=$_GET["multiplo"];

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- jQuery -->
 <script src="bower_components/jquery/jquery.min.js"></script>
<title>Guia SADT</title>
</head>

<div id="bg">   

<img src="img/00001.jpg"/>
</div>
 
<div class="convenioimg"><img src="<?php echo $imagem ; ?>" width="50%" height="50%" /><div> 

<div class="ans" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $ans; ?></b><div> 

<div class="cliente" style="letter-spacing:0px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nomecliente ?></b><div>

<div class="contratado" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if ($contratador == 1 ){ echo $nome_medico; } else { echo $empresa; } ?></b><div>  










<div class="solicitante" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nome_medico; ?></b><div> 


<div class="conselho" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $conselho; ?></b><div> 
<div class="numconselho" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $crm; ?></b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $uf; ?></b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $cbo;?></b><div>
<div class="indicacaoclinica" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $codigocid.'-'.$descricaocid; ?></b><div>  
<!-- Primeira fileira de procedimento -->
<div class="procedimento" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){ echo $procedimento_tabela3;} else { echo $procedimento_tabela11;} ?></b><div> 
<div class="codigo_procedimento" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){ echo $procedimento_codigo3; }else {echo $procedimento_codigo11;}?></b><div>
<div class="descricao_procedimento" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0) { echo $procedimento_nome3; } else {echo $procedimento_nome11;}?></b><div>
 <!-- segunda fileira de procedimento --> 
<div class="procedimento2" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela12;} ?></b><div> 
<div class="codigo_procedimento2" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> <?php if($unicos == 0){}else{ echo $procedimento_codigo12; }?></b><div>
<div class="descricao_procedimento2" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome12; }?></b><div>
<!-- terceira fileira de procedimento --> 
<div class="procedimento3" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ $procedimento_tabela13; }?> </b><div> 
<div class="codigo_procedimento3" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo13; }?></b><div>
<div class="descricao_procedimento3" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome13; }?></b><div>
<!-- quarta fileira de procedimento --> 
<div class="procedimento4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela14; }?></b><div> 
<div class="codigo_procedimento4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo14; }?></b><div>
<div class="descricao_procedimento4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome14; }?></b><div>
<!-- quinta fileira de procedimento --> 
<div class="procedimento5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela15;  }?></b><div> 
<div class="codigo_procedimento5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo15;} ?></b><div>
<div class="descricao_procedimento5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome15;} ?></b><div>

<div class="numeroaleatorio" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $numeroaleatorio; ?></b><div>



<style> 
#bg img{width:1100px;
	margin-top:0;
	margin-left:0;
	height:730px;

	z-index: 0;
	
	
	
	}
.numeroaleatorio{
    position:absolute;
	top:-318px;
	left:730px;
	
	}	
.ans {
	position:absolute;
	top:54px;
	margin-left:8px;
}
.solicitante{
	position:absolute;
	left:-210px;
	top:33px;
	white-space:nowrap;
	
	}
.contratado{
	position:absolute;
	left:-220px;
	top:39px;
	white-space:nowrap;
	}	
.conselho{
	 position:absolute;
	 left:352px;
	 top:0px;
	
	
	}	
.numconselho{
	position:absolute;
	top:0px;
	left:54px;

	}	
.uf{
	position:absolute;
	top:0px;
	left:221px;

	}	
.cbo{
	position:absolute;
	top:0px;
	left:49px;

	}	
.indicacaoclinica{
	position:absolute;
	left:-470px;
	top:48px;
    white-space:nowrap;

	}	
.cliente{
	position:absolute;
	left:430px;
	top:68px;
    white-space:nowrap;
	
	}
	
.convenioimg{
     position:absolute;
	 top:4px;	
	 margin-left:2px;
	
	}
.procedimento {
	position:absolute;
	top:28px;
    left:-194px;
	
	}
.codigo_procedimento {
	position:absolute;
	top:0px;
	left:33px;
	
	}
.descricao_procedimento{
	position:absolute;
	top:0px;
	left:150px;

	}	
.procedimento2 {
	position:absolute;
	top:13px;
    left:-183px;
	
	}
.codigo_procedimento2 {
	position:absolute;
	top:0px;
	left:33px;
	
	}
.descricao_procedimento2{
	position:absolute;
	top:0px;
	left:150px;
}	
.procedimento3 {
	position:absolute;
	top:12px;
    left:-183px;
	
	}
.codigo_procedimento3 {
	position:absolute;
	top:0px;
	left:33px;
	
	}
.descricao_procedimento3{
	position:absolute;
	top:0px;
	left:150px;
}
.procedimento4 {
	position:absolute;
	top:12px;
    left:-183px;
	
	}
.codigo_procedimento4 {
	position:absolute;
	top:0px;
	left:33px;
	
	}
.descricao_procedimento4{
	position:absolute;
	top:0px;
	left:150px;
}
.procedimento5 {
	position:absolute;
	top:14px;
    left:-183px;
	
	}
.codigo_procedimento5 {
	position:absolute;
	top:0px;
	left:33px;
	
	}
.descricao_procedimento5{
	position:absolute;
	top:0px;
	left:150px;
}
.botao {
		position:absolute;
		top: 15px;
		left: 70px;
	}
		
			
</style>

<style media="print">
.botao {
display: none;
}
.impri{
display:none;	
	
	}
</style>

<body>
<button type="submit" class="impri" onClick="javascript:window.print();" class="btn btn-default">Imprimir</button>

<?php
if ($unicos == 0){
	if($multiplo > 3){
	echo '<button type="submit" class="botao" onClick="msg();" class="btn btn-default">Próxima Guia</button>';
	}
	
	}else{
		
		}

 ?>
<script>
function msg() {

             var nome_medico =  "<?php echo $nome_medico;?>"; 
			 var imagem=  "<?php echo $imagem; ?>";
			 var ans =  "<?php echo $ans; ?>"; 
			 var nomecliente=  "<?php echo $nomecliente; ?>";
			 var contratador = "<?php echo $contratador;?>"
			 var empresa ="<?php echo $empresa; ?>"
			 var conselho ="<?php echo $conselho; ?>";
			 var crm ="<?php echo $crm; ?>";
			 var uf ="<?php echo $uf; ?>";
			 var cbo="<?php echo $cbo; ?>";
			 var codigocid="<?php echo $codigocid; ?>";
			 var descricaocid="<?php echo $descricaocid; ?>"
			  var unicos ="<?php echo $unicos; ?>";
		
			 
			
			 var procedimento_tabela2="<?php echo $procedimento_tabela2; ?>"; 
			 var procedimento_codigo2="<?php echo $procedimento_codigo2; ?> ";
			 var procedimento_nome2="<?php echo $procedimento_nome2; ?>";
			 
			 var procedimento_tabela3="<?php echo $procedimento_tabela3; ?>"; 
			 var procedimento_codigo3="<?php echo $procedimento_codigo3; ?> ";
			 var procedimento_nome3="<?php echo $procedimento_nome3; ?>";
			 
			 var procedimento_tabela4="<?php echo $procedimento_tabela4; ?>"; 
			 var procedimento_codigo4="<?php echo $procedimento_codigo4; ?> ";
			 var procedimento_nome4="<?php echo $procedimento_nome4; ?>";
			 
			 var procedimento_tabela5="<?php echo $procedimento_tabela5; ?>"; 
			 var procedimento_codigo5="<?php echo $procedimento_codigo5; ?> ";
			 var procedimento_nome5="<?php echo $procedimento_nome5; ?>";
			 
 			 var procedimento_tabela6="<?php echo $procedimento_tabela6; ?>"; 
			 var procedimento_codigo6="<?php echo $procedimento_codigo6; ?> ";
			 var procedimento_nome6="<?php echo $procedimento_nome6; ?>";
		
			 var procedimento_tabela7="<?php echo $procedimento_tabela7; ?>";
			 var procedimento_codigo7="<?php echo $procedimento_codigo7; ?>";
			 var procedimento_nome7="  <?php echo $procedimento_nome7; ?>";
			
			 var procedimento_tabela8="<?php echo $procedimento_tabela8; ?>";
			 var procedimento_codigo8="<?php echo $procedimento_codigo8; ?>";
			 var procedimento_nome8="<?php echo $procedimento_nome8; ?>";
			 
			 var procedimento_tabela9 ="<?php echo $procedimento_tabela9; ?>";
			 var procedimento_codigo9 ="<?php echo $procedimento_codigo9; ?>";
			 var procedimento_nome9 ="<?php echo $procedimento_nome9; ?>";
			 
			 var procedimento_tabela10 ="<?php echo $procedimento_tabela10; ?>";
			 var procedimento_codigo10 ="<?php echo $procedimento_codigo10; ?>";
			 var procedimento_nome10 ="<?php echo $procedimento_nome10; ?>";
			 
			  var procedimento_tabela11="<?php echo $procedimento_tabela11; ?>"; 
			 var procedimento_codigo11="<?php echo $procedimento_codigo11; ?> ";
			 var procedimento_nome11="<?php echo $procedimento_nome11; ?>";
		
			 var procedimento_tabela12="<?php echo $procedimento_tabela12; ?>";
			 var procedimento_codigo12="<?php echo $procedimento_codigo12; ?>";
			 var procedimento_nome12="  <?php echo $procedimento_nome12; ?>";
			
			 var procedimento_tabela13="<?php echo $procedimento_tabela13; ?>";
			 var procedimento_codigo13="<?php echo $procedimento_codigo13; ?>";
			 var procedimento_nome13="<?php echo $procedimento_nome13; ?>";
			 
			 var procedimento_tabela14 ="<?php echo $procedimento_tabela14; ?>";
			 var procedimento_codigo14 ="<?php echo $procedimento_codigo14; ?>";
			 var procedimento_nome14 ="<?php echo $procedimento_nome14; ?>";
			 
			 var procedimento_tabela15 ="<?php echo $procedimento_tabela15; ?>";
			 var procedimento_codigo15 ="<?php echo $procedimento_codigo15; ?>";
			 var procedimento_nome15 ="<?php echo $procedimento_nome15; ?>";
			 
			 
			 var multiplo ="<?php echo $multiplo; ?>";
			 
			 
            window.open('/GuiaSadt4direto.php?nome_medico='+nome_medico+'&imagem='+imagem+'&nomecliente='+nomecliente+'&contratador='+contratador+'&empresa='+empresa+'&conselho='+conselho+'&crm='+crm+'&uf='+uf+'&cbo='+cbo+'&codigocid='+codigocid+'&descricaocid='+descricaocid+'&procedimento_tabela6='+procedimento_tabela6+'&procedimento_codigo6='+procedimento_codigo6+'&procedimento_nome6='+procedimento_nome6+'&procedimento_tabela7='+procedimento_tabela7+'&procedimento_codigo7='+procedimento_codigo7+'&procedimento_nome7='+procedimento_nome7+'&procedimento_tabela8='+procedimento_tabela8+'&procedimento_codigo8='+procedimento_codigo8+'&procedimento_nome8='+procedimento_nome8+'&procedimento_tabela9='+procedimento_tabela9+'&procedimento_codigo9='+procedimento_codigo9+'&procedimento_nome9='+procedimento_nome9+'&procedimento_tabela10='+procedimento_tabela10+'&procedimento_codigo10='+procedimento_codigo10+'&procedimento_nome10='+procedimento_nome10+'&procedimento_tabela11='+procedimento_tabela11+'&procedimento_codigo11='+procedimento_codigo11+'&procedimento_nome11='+procedimento_nome11+'&multiplo='+multiplo+'&procedimento_tabela12='+procedimento_tabela12+'&procedimento_codigo12='+procedimento_codigo12+'&procedimento_nome12='+procedimento_nome12+'&procedimento_tabela13='+procedimento_tabela13+'&procedimento_codigo13='+procedimento_codigo13+'&procedimento_nome13='+procedimento_nome13+'&procedimento_tabela14='+procedimento_tabela14+'&procedimento_codigo14='+procedimento_codigo14+'&procedimento_nome14='+procedimento_nome14+'&procedimento_tabela15='+procedimento_tabela15+'&procedimento_codigo15='+procedimento_codigo15+'&procedimento_nome15='+procedimento_nome15+'&procedimento_tabela2='+procedimento_tabela2+'&procedimento_codigo2='+procedimento_codigo2+'&procedimento_nome2='+procedimento_nome2+'&procedimento_tabela3='+procedimento_tabela3+'&procedimento_codigo3='+procedimento_codigo3+'&procedimento_nome3='+procedimento_nome3+'&procedimento_tabela4='+procedimento_tabela4+'&procedimento_codigo4='+procedimento_codigo4+'&procedimento_nome4='+procedimento_nome4+'&procedimento_tabela5='+procedimento_tabela5+'&procedimento_codigo5='+procedimento_codigo5+'&procedimento_nome5='+procedimento_nome5+'&unicos='+unicos+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 
             

           
}

</script>
<?php 
if ($unicos == 0){
	if($multiplo > 3){
	
	echo '<script> window.print(); </script>';
	echo '<script> setTimeout(function(){ msg(); }, 2000); </script>';
	
	}else{
		echo '<script> window.print(); </script>';
		echo '<script> setTimeout("window.close(); ",100); </script>';
		}
}else{
		
	if($unicos == 1){
			if($multiplo > 15){
			    echo '<script> window.print(); </script>';
				echo '<script> setTimeout("msg(); ",100);</script>';
				}else{
				echo '<script> window.print(); </script>';
	           	echo '<script> setTimeout("window.close(); ",100); </script>';
				
			    	}
			
			
		        }
				
	                }
?>


</html>