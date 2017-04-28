<?php 
ini_set('display_errors', 0 );
error_reporting(0);


include 'buscaconfig.php'; 
$valor1 = 1;
$valor2= 2;
$valor3=3;
$valor4=4;
$valor5=5;
$numeroaleatorio=rand(200, 100000000000);
	  
                  $contratador = $_REQUEST['contratador'];
                  $id_medico= $_REQUEST['medico'];
				  
				  $nomecliente = $_REQUEST['nome'];
				  
                  $cid= $_REQUEST['cid'];	   
                  $username = "root";
                  $password="";
				  
				  $unicas= $_REQUEST["unica"];
				  
				  $procedimento1 = $_REQUEST["procedimento1"];  
	              $procedimento2 = $_REQUEST["procedimento2"];  			 
				 
				  $continha= count($procedimento1);
				  $continha2=count($procedimento2);
				  
				  if($continha == 1){
					  
					  $multiplo =1;
					  }
				  
				  
				  elseif($continha == 2){
					  
					  $multiplo = 2;
					  
					  }
				elseif($continha == 3){
					 $multiplo = 3;
					
					}	  
				elseif($continha == 4){
					$multiplo = 4;
					
					}
				elseif ($continha == 5){
					$multiplo = 5;
					} 
				elseif ($continha == 6){
					$multiplo = 6;
					}  
				elseif($continha == 7){
					$multiplo = 7;
					}    
                elseif($continha == 8 ){
					$multiplo = 8;
					}  
			   elseif($continha == 9 ){
				   $multiplo = 9;
				   }
			   elseif($continha == 10){
				   $multiplo = 10;
				   }
			   elseif($continha == 11){
				   $multiplo = 11;
				   }	   	   
			   elseif($continha == 12){
				   $multiplo = 12;
				   }
			   elseif($continha == 13){
				   $multiplo =13;
				   }	   	   
               elseif($continha == 14){
				   $multiplo = 14 ;
				   }
			   else{
                    $multiplo = 15;
				   }	   
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

                 $sqlconven = "SELECT clientes.convenio, clientes.atendimento, clientes.id, clientes.nome, convenios.id_convenios, convenios.logo_convenio, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.convenio = convenios.id_convenios where clientes.nome = '$nomecliente'";
                 $result = $conn->query($sqlconven);
                   while($busc = $result ->fetch()) {
				   
				 $imagem =  $busc["logo_convenio"];
              
	           }
			   
			   
			   if ($continha == 1) {
			   
	    //busca os valores do procedimento de acordo com id do select
		$sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	
			   }elseif($continha == 2){
				 
				 
				  $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode($ruimm["descricao_procedimento"]);
				   }	
				   
				   
				   } elseif($continha == 3){ 
				   
				    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode($ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	   			   
				   }elseif($continha == 4 ){
					    
						  $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode($ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }}elseif($continha == 5){
					   
					    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);					   
					   }
			   
				   }elseif($continha == 6){
					   
					   	    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
	   
					   }
				   
				   }elseif($continha == 7){ 
				   
				      	    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
				   
				   
				   }	   
				   }elseif($continha == 8){ 
				         	    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   }
				   
				   }elseif($continha == 9){ 
				   
				   
				   $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   
				   
				   }
				   
				   }elseif($continha == 10){ 
				   
				    $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
				   }}elseif($continha == 11){
					   $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
					   
					   
					   
				   }$sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
					 
					 }
					   
					   
					    }elseif($continha == 12){ 
							
							  $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);}
					 $sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
				    
				   
				   }$sqlprocedimento12= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[11]'";
               $velho12 = $conn->query($sqlprocedimento12);
                   while($ruimmmmmmmmmmmm = $velho12->fetch()) {
	           
			         $procedimento_tabela12 = $ruimmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo12 = $ruimmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome12 = utf8_encode( $ruimmmmmmmmmmmm["descricao_procedimento"]);}}
					 elseif($continha == 13){
					   $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
					   
					   
					   
				   }$sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
					 
					 }$sqlprocedimento12= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[11]'";
               $velho12 = $conn->query($sqlprocedimento12);
                   while($ruimmmmmmmmmmmm = $velho12->fetch()) {
	           
			         $procedimento_tabela12 = $ruimmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo12 = $ruimmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome12 = utf8_encode( $ruimmmmmmmmmmmm["descricao_procedimento"]);
							
							
							
							}
							$sqlprocedimento13= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[12]'";
               $velho13 = $conn->query($sqlprocedimento13);
                   while($ruimmmmmmmmmmmmm = $velho13->fetch()) {
	           
			         $procedimento_tabela13 = $ruimmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo13 = $ruimmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome13 = utf8_encode( $ruimmmmmmmmmmmmm["descricao_procedimento"]);
					 
					 }}elseif($continha == 13){
						 $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
					   
					   
					   
				   }$sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
					 
					 }$sqlprocedimento12= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[11]'";
               $velho12 = $conn->query($sqlprocedimento12);
                   while($ruimmmmmmmmmmmm = $velho12->fetch()) {
	           
			         $procedimento_tabela12 = $ruimmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo12 = $ruimmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome12 = utf8_encode( $ruimmmmmmmmmmmm["descricao_procedimento"]);
							
							
							
							}
							$sqlprocedimento13= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[12]'";
               $velho13 = $conn->query($sqlprocedimento13);
                   while($ruimmmmmmmmmmmmm = $velho13->fetch()) {
	           
			         $procedimento_tabela13 = $ruimmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo13 = $ruimmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome13 = utf8_encode( $ruimmmmmmmmmmmmm["descricao_procedimento"]);
					 
						 
				   }}
						 elseif($continha == 14){
							 $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
					   
					   
					   
				   }$sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
					 
					 }$sqlprocedimento12= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[11]'";
               $velho12 = $conn->query($sqlprocedimento12);
                   while($ruimmmmmmmmmmmm = $velho12->fetch()) {
	           
			         $procedimento_tabela12 = $ruimmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo12 = $ruimmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome12 = utf8_encode( $ruimmmmmmmmmmmm["descricao_procedimento"]);
							
							
							
							}
							$sqlprocedimento13= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[12]'";
               $velho13 = $conn->query($sqlprocedimento13);
                   while($ruimmmmmmmmmmmmm = $velho13->fetch()) {
	           
			         $procedimento_tabela13 = $ruimmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo13 = $ruimmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome13 = utf8_encode( $ruimmmmmmmmmmmmm["descricao_procedimento"]);	 
		
				   }
						
						$sqlprocedimento14= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[13]'";
               $velho14 = $conn->query($sqlprocedimento14);
                   while($ruimmmmmmmmmmmmmm = $velho14->fetch()) {
	           
			         $procedimento_tabela14 = $ruimmmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo14 = $ruimmmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome14 = utf8_encode( $ruimmmmmmmmmmmmmm["descricao_procedimento"]);
					 
					 }
					 
					 } elseif($continha == 15){
							 $sqlprocedimento= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[0]'";
               $velho = $conn->query($sqlprocedimento);
                   while($ruim = $velho->fetch()) {
	           
			         $procedimento_tabela = $ruim["tabel_procedimento"];
					 $procedimento_codigo = $ruim["codigo_procedimento"];
					 $procedimento_nome = utf8_encode($ruim["descricao_procedimento"]);
				   }	 
				   
				   $sqlprocedimento2= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[1]'";
               $velho2 = $conn->query($sqlprocedimento2);
                   while($ruimm = $velho2->fetch()) {
	           
			         $procedimento_tabela2 = $ruimm["tabel_procedimento"];
					 $procedimento_codigo2 = $ruimm["codigo_procedimento"];
					 $procedimento_nome2 = utf8_encode( $ruimm["descricao_procedimento"]);
				   }
				    $sqlprocedimento3= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[2]'";
               $velho3 = $conn->query($sqlprocedimento3);
                   while($ruimmm = $velho3->fetch()) {
	           
			         $procedimento_tabela3 = $ruimmm["tabel_procedimento"];
					 $procedimento_codigo3 = $ruimmm["codigo_procedimento"];
					 $procedimento_nome3 = utf8_encode($ruimmm["descricao_procedimento"]);
				   }	  

					   
			   
			      $sqlprocedimento4= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[3]'";
               $velho4 = $conn->query($sqlprocedimento4);
                   while($ruimmmm = $velho4->fetch()) {
	           
			         $procedimento_tabela4 = $ruimmmm["tabel_procedimento"];
					 $procedimento_codigo4 = $ruimmmm["codigo_procedimento"];
					 $procedimento_nome4 = utf8_encode($ruimmmm["descricao_procedimento"]);
			   
				   }
				   $sqlprocedimento5= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[4]'";
               $velho5 = $conn->query($sqlprocedimento5);
                   while($ruimmmmm = $velho5->fetch()) {
	           
			         $procedimento_tabela5 = $ruimmmmm["tabel_procedimento"];
					 $procedimento_codigo5 = $ruimmmmm["codigo_procedimento"];
					 $procedimento_nome5 = utf8_encode( $ruimmmmm["descricao_procedimento"]);
				   
				   }
					   
				  $sqlprocedimento6= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[5]'";
               $velho6 = $conn->query($sqlprocedimento6);
                   while($ruimmmmmm = $velho6->fetch()) {
	           
			         $procedimento_tabela6 = $ruimmmmmm["tabel_procedimento"];
					 $procedimento_codigo6 = $ruimmmmmm["codigo_procedimento"];
					 $procedimento_nome6 = utf8_encode( $ruimmmmmm["descricao_procedimento"]);	   
					   
					   
				   } $sqlprocedimento7= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[6]'";
               $velho7 = $conn->query($sqlprocedimento7);
                   while($ruimmmmmmm = $velho7->fetch()) {
	           
			         $procedimento_tabela7 = $ruimmmmmmm["tabel_procedimento"];
					 $procedimento_codigo7 = $ruimmmmmmm["codigo_procedimento"];
					 $procedimento_nome7 = utf8_encode( $ruimmmmmmm["descricao_procedimento"]);	   
					   
					   
					   
					   
				   }$sqlprocedimento8= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[7]'";
               $velho8 = $conn->query($sqlprocedimento8);
                   while($ruimmmmmmmm = $velho8->fetch()) {
	           
			         $procedimento_tabela8 = $ruimmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo8 = $ruimmmmmmmm["codigo_procedimento"];
					 $procedimento_nome8 = utf8_encode( $ruimmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   }$sqlprocedimento9= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[8]'";
               $velho9 = $conn->query($sqlprocedimento9);
                   while($ruimmmmmmmmm = $velho9->fetch()) {
	           
			         $procedimento_tabela9 = $ruimmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo9 = $ruimmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome9 = utf8_encode( $ruimmmmmmmmm["descricao_procedimento"]);	   
					   
					   
				   
				   
				   
				   }$sqlprocedimento10= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[9]'";
               $velho10 = $conn->query($sqlprocedimento10);
                   while($ruimmmmmmmmmm = $velho10->fetch()) {
	           
			         $procedimento_tabela10 = $ruimmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo10 = $ruimmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome10 = utf8_encode( $ruimmmmmmmmmm["descricao_procedimento"]);
				    
				   
					   
					   
					   
				   }$sqlprocedimento11= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[10]'";
               $velho11 = $conn->query($sqlprocedimento11);
                   while($ruimmmmmmmmmmm = $velho11->fetch()) {
	           
			         $procedimento_tabela11 = $ruimmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo11 = $ruimmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome11 = utf8_encode( $ruimmmmmmmmmmm["descricao_procedimento"]);
					 
					 }$sqlprocedimento12= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[11]'";
               $velho12 = $conn->query($sqlprocedimento12);
                   while($ruimmmmmmmmmmmm = $velho12->fetch()) {
	           
			         $procedimento_tabela12 = $ruimmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo12 = $ruimmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome12 = utf8_encode( $ruimmmmmmmmmmmm["descricao_procedimento"]);
							
							
							
							}
							$sqlprocedimento13= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[12]'";
               $velho13 = $conn->query($sqlprocedimento13);
                   while($ruimmmmmmmmmmmmm = $velho13->fetch()) {
	           
			         $procedimento_tabela13 = $ruimmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo13 = $ruimmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome13 = utf8_encode( $ruimmmmmmmmmmmmm["descricao_procedimento"]);	 
		
				   }
						
						$sqlprocedimento14= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[13]'";
               $velho14 = $conn->query($sqlprocedimento14);
                   while($ruimmmmmmmmmmmmmm = $velho14->fetch()) {
	           
			         $procedimento_tabela14 = $ruimmmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo14 = $ruimmmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome14 = utf8_encode( $ruimmmmmmmmmmmmmm["descricao_procedimento"]);
					 
					 }	$sqlprocedimento15= "SELECT * FROM procedimento WHERE id_procedimento ='$procedimento1[14]'";
               $velho15 = $conn->query($sqlprocedimento15);
                   while($ruimmmmmmmmmmmmmmm = $velho15->fetch()) {
	           
			         $procedimento_tabela15 = $ruimmmmmmmmmmmmmmm["tabel_procedimento"];
					 $procedimento_codigo15 = $ruimmmmmmmmmmmmmmm["codigo_procedimento"];
					 $procedimento_nome15 = utf8_encode( $ruimmmmmmmmmmmmmmm["descricao_procedimento"]);
					 
					 }
					 
					 }
					 
							 
							
						 
						 
						 
						 
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
 
<div class="convenioimg"><img src="<?php echo $imagem; ?>" width="50%" height="50%" /><div> 
 

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
<div class="procedimento" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_tabela; ?></b><div> 
<div class="codigo_procedimento" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_codigo; ?></b><div>
<div class="descricao_procedimento" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_nome ?></b><div>
 <!-- segunda fileira de procedimento --> 
<div class="procedimento2" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor2) and ($unicas == 1)) { echo $procedimento_tabela2;} ?></b><div> 
<div class="codigo_procedimento2" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor2) and ($unicas == 1)) { echo $procedimento_codigo2;} ?></b><div>
<div class="descricao_procedimento2" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor2) and ($unicas == 1)) {echo $procedimento_nome2; }?></b><div>
<!-- terceira fileira de procedimento --> 
<div class="procedimento3" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> <?php if(($continha =$valor3) and ($unicas == 1)){echo $procedimento_tabela3; } ?> </b><div> 
<div class="codigo_procedimento3" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha =$valor3) and ($unicas == 1)){ echo $procedimento_codigo3;} ?></b><div>
<div class="descricao_procedimento3" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha =$valor3) and ($unicas == 1) ) {echo $procedimento_nome3;}?></b><div>
<!-- quarta fileira de procedimento --> 
<div class="procedimento4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor4) and ($unicas == 1)){echo $procedimento_tabela4;} ?></b><div> 
<div class="codigo_procedimento4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor4) and ($unicas == 1)){ echo $procedimento_codigo4;} ?></b><div>
<div class="descricao_procedimento4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor4) and ($unicas == 1)){ echo $procedimento_nome4;}?></b><div>
<!-- quinta fileira de procedimento --> 
<div class="procedimento5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if (($continha = $valor5) and ($unicas == 1)){echo $procedimento_tabela5; } ?></b><div> 
<div class="codigo_procedimento5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha= $valor5) and ($unicas == 1)){ echo $procedimento_codigo5;} ?></b><div>
<div class="descricao_procedimento5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha = $valor5) and ($unicas == 1)){echo $procedimento_nome5;}  ?></b><div>

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
			 var descricaocid="<?php echo $descricaocid; ?>";
			 var unicos ="<?php echo $unicas; ?>";
		
			 
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
			 
			 
            window.open('/GuiaSadt2direto.php?nome_medico='+nome_medico+'&imagem='+imagem+'&nomecliente='+nomecliente+'&contratador='+contratador+'&empresa='+empresa+'&conselho='+conselho+'&crm='+crm+'&uf='+uf+'&cbo='+cbo+'&codigocid='+codigocid+'&descricaocid='+descricaocid+'&procedimento_tabela6='+procedimento_tabela6+'&procedimento_codigo6='+procedimento_codigo6+'&procedimento_nome6='+procedimento_nome6+'&procedimento_tabela7='+procedimento_tabela7+'&procedimento_codigo7='+procedimento_codigo7+'&procedimento_nome7='+procedimento_nome7+'&procedimento_tabela8='+procedimento_tabela8+'&procedimento_codigo8='+procedimento_codigo8+'&procedimento_nome8='+procedimento_nome8+'&procedimento_tabela9='+procedimento_tabela9+'&procedimento_codigo9='+procedimento_codigo9+'&procedimento_nome9='+procedimento_nome9+'&procedimento_tabela10='+procedimento_tabela10+'&procedimento_codigo10='+procedimento_codigo10+'&procedimento_nome10='+procedimento_nome10+'&procedimento_tabela11='+procedimento_tabela11+'&procedimento_codigo11='+procedimento_codigo11+'&procedimento_nome11='+procedimento_nome11+'&multiplo='+multiplo+'&procedimento_tabela12='+procedimento_tabela12+'&procedimento_codigo12='+procedimento_codigo12+'&procedimento_nome12='+procedimento_nome12+'&procedimento_tabela13='+procedimento_tabela13+'&procedimento_codigo13='+procedimento_codigo13+'&procedimento_nome13='+procedimento_nome13+'&procedimento_tabela14='+procedimento_tabela14+'&procedimento_codigo14='+procedimento_codigo14+'&procedimento_nome14='+procedimento_nome14+'&procedimento_tabela15='+procedimento_tabela15+'&procedimento_codigo15='+procedimento_codigo15+'&procedimento_nome15='+procedimento_nome15+'&procedimento_tabela2='+procedimento_tabela2+'&procedimento_codigo2='+procedimento_codigo2+'&procedimento_nome2='+procedimento_nome2+'&procedimento_tabela3='+procedimento_tabela3+'&procedimento_codigo3='+procedimento_codigo3+'&procedimento_nome3='+procedimento_nome3+'&procedimento_tabela4='+procedimento_tabela4+'&procedimento_codigo4='+procedimento_codigo4+'&procedimento_nome4='+procedimento_nome4+'&procedimento_tabela5='+procedimento_tabela5+'&procedimento_codigo5='+procedimento_codigo5+'&procedimento_nome5='+procedimento_nome5+'&unicos='+unicos+'', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=650, HEIGHT=400'
  ); 
             

}

</script>



<?php 
if ($unicas == 0){
	if($multiplo > 1){
	echo '<script>  window.print(); </script>';
	echo '<script> setTimeout(function(){ msg(); }, 2000); </script>';
	
	}else{
		echo '<script>  window.print();  </script>';
		echo '<script> setTimeout("window.close(); ",100); </script>';
		}
	
	}else{
		
		if($unicas == 1){
			if($multiplo > 5){
				echo '<script> window.print(); </script>';
				echo '<script>setTimeout(function(){ msg(); }, 1000); </script>';
				}else{
				echo '<script> window.print(); </script>';
	           	echo '<script> setTimeout("window.close(); ",100); </script>';	
					
					}
			
			
			}
				
		}
		

?>

<button type="submit" class="impri" onClick="javascript:window.print();" class="btn btn-default">Imprimir</button>
</body>
</html>
