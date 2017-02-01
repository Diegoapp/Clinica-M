<?php
 
 $id = $_GET['id_cliente'];
 $medicogeral=$_GET['medicogeral'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
  
        Clinica inteligente v0.0.0

        Copyright 2012-2014 Diego vieira
        desenvolvimento em  Apache Licensa 5.5
 
    -->
    <meta charset="utf-8">
<title>Sistema de Clinica Inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

  

    <!-- icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <!-- topbar ends -->
<div class="ch-container">
  <div class="row">
        
        <!-- left menu starts -->
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">&nbsp;</h4>

                <p>&nbsp;</p>
            </div>
    </noscript>

      <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    
</div>

<form action="GuiaSadt.php" name="frm" method="post">

<div class=" row"></div>
<?php
 

$link = mysql_connect('localhost','root','');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('clinica',$link); if($conexao){

$sqlview = "SELECT clientes.convenio,clientes.id, clientes.nome, convenios.id_convenios, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.id = $id and convenios.id_convenios= clientes.convenio WHERE id ='$id'" ;

$sql = "SELECT * FROM clientes WHERE id=$id ";

$consulta = mysql_query($sqlview);

// Armazena os dados da consulta em um array 



while( $registro = mysql_fetch_assoc($consulta)){


echo '<div class="row">';
echo '<div class="col-lg-7 col-md-12">';
echo ' <p><b>Nome:</b></p>';
echo '<input type="text"  class="form-control" name="nome"  value="'.utf8_encode($registro["nome"]).'" id="inputSuccess1">';
echo '<p><b>Convênio:</b></p>';
echo '<input type="text"  class="form-control" name="convenio"  value="'.utf8_encode($registro["nome_convenio"]).'" id="inputSuccess1">';
echo ' </div>';


}
echo '<div class="box-content">';
echo '<div class="control-group">';
echo '<label class="control-label" for="selectError">Médico</label>';
echo '<div class="controls">'; 
echo ' <select id="selectError" name="medico" data-rel="chosen">';


                  $username = "root";
                  $password="";

                  $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);	
// Seleciona o Banco de dados através da conexão acima
                 $sql = "SELECT * FROM medicos WHERE crm_medico = $medicogeral";
                 $resultado = $conn->query($sql);
                   while($row = $resultado->fetch()) {
				   
				   echo '<option name = medico value='.$row["id_medico"].'>'.$row["nome_medico"].'</option>';
				   
                            
	           }


}

?>  

         
         <br>

  
  
    </div>           

    </select>
    
    <div class="control-group">
                    <label class="control-label" for="selectError1">Procedimentos</label>

                    <div class="controls">
                        <select id="selectError1" name="procedimento1[]"  multiple class="form-control" data-rel="chosen">
                        <?php
                  $username = "root";
                  $password="";

                  $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);	
// Seleciona o Banco de dados através da conexão acima
                 $sqll = "SELECT * FROM procedimento ORDER BY atalho ASC";
                 $resu = $conn->query($sqll);
                   while($ro = $resu->fetch()) {
                            
                            
                            
                            
                        
						echo   ' <option value="'.$ro["id_procedimento"].'" >'.$ro["atalho"].'-'.utf8_encode($ro["descricao_procedimento"]).' </option>';
				   }
				   
				   ?>
                            
                        </select>
                    </div>
                </div>
   
				  
                
    
           </div>  
           <p><b>Contratador:</b></p>
           <input type="radio" name="contratador" value="1">Médico<br>
           <input type="radio" name="contratador" value="0">Clínica<br>
           <p><b>multipla</b></p>
           <input type="radio" name="unica" value="0">Única<br>
           <input type="radio" name="unica" value="1">Multipla<br>
           
  <?php 
 
  echo '<div class="box-content">';
  echo '<div class="control-group">';
  echo '<label class="control-label" for="selectError">CID10</label>';
  echo '<div class="controls">'; 
   echo ' <select id="selectError" name="cid" data-rel="chosen">';


                  $username = "root";
                  $password="";

                  $conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);	
// Seleciona o Banco de dados através da conexão acima
                 $sql = "SELECT * FROM cid";
                 $resultado = $conn->query($sql);
                   while($row = $resultado->fetch()) {
				   
				   echo '<option name = cid value='.$row["codigo_cid"].'>'.$row["codigo_cid"].'-'.utf8_encode($row["descricao_cid"]).'</option>';
				   
                            
	           }
  
  
  
  
   ?>             
               </div>
</div>         

  

    
    <br>
    <input type="hidden" name="acao" value="">
 <button type="submit"  value="" nome="send" id="send" class="btn btn-default">Visualizar</button>
 <button type="submit"  value="" nome="send" id="send" onClick="imprimir()" class="btn btn-default">imprimir</button>
 
</form>                     
                      
                   
                   

                    
                    

                    
                   


<div class="row">
  <!--/span-->
  <!--/span-->
    <!--/span-->
</div><!--/row-->

<div class="row">
  <!--/span-->
  <!--/span-->
  <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
        
            <!--End mc_embed_signup-->
</div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3></h3>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
      <!--  <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="">Clinicas</a></p> -->
    </footer>

</div><!--/.fluid-container-->


<script languege=javascript>


function imprimir() {
	 var count = $("#selectError1 :selected").length;
  
	 document.frm.action = "GuiaSadtdireto.php";
	   //document.frm.action = "testeimpressora.php";
	  }
	 
</script>



<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
