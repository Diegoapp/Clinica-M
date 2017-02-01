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
 <link href="css/guias.css" rel="stylesheet">
 <script src="bower_components/jquery/jquery.min.js"></script>
<title>Guia SADT</title>
</head>


                                                        
<div class="bg">  
 

<img src="img/00001.jpg"/>

</div>
 
 <div class="convenioimg"><img src="<?php echo $imagem; ?>" width="70%" height="70%" /><div> 

<div class="ans" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $ans; ?></b><div> 

<div class="cliente" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nomecliente ?></b><div>

<div class="contratado" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if ($contratador == 1 ){ echo $nome_medico; } else { echo $empresa; } ?></b><div>  




<div class="solicitante" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nome_medico; ?></b><div> 


<div class="conselho" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $conselho; ?></b><div> 
<div class="numconselho" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $crm; ?></b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $uf; ?></b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $cbo;?></b><div>
<div class="indicacaoclinica" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $codigocid.'-'.$descricaocid; ?></b><div>  

<div class="procedimento" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_tabela; ?></b><div> 
<div class="codigo_procedimento" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_codigo; ?></b><div>
<div class="descricao_procedimento" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $procedimento_nome ?></b><div>
  
<div class="procedimento2" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 2) and ($unicas == 1)) { echo $procedimento_tabela2;} ?></b><div> 
<div class="codigo_procedimento2" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 2) and ($unicas == 1)) { echo $procedimento_codigo2;} ?></b><div>
<div class="descricao_procedimento2" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 2) and ($unicas == 1)) {echo $procedimento_nome2; }?></b><div>

<div class="procedimento3" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 3) and ($unicas == 1)){echo $procedimento_tabela3; } ?></b><div> 
<div class="codigo_procedimento3" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 3) and ($unicas == 1)){ echo $procedimento_codigo3;} ?></b><div>
<div class="descricao_procedimento3" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 3) and ($unicas == 1) ) {echo $procedimento_nome3;}?></b><div>
 
<div class="procedimento4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 4) and ($unicas == 1)){echo $procedimento_tabela4;} ?></b><div> 
<div class="codigo_procedimento4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 4) and ($unicas == 1)){ echo $procedimento_codigo4;} ?></b><div>
<div class="descricao_procedimento4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 4) and ($unicas == 1)){ echo $procedimento_nome4;}?></b><div>

<div class="procedimento5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if (($continha >= 5) and ($unicas == 1)){echo $procedimento_tabela5; } ?></b><div> 
<div class="codigo_procedimento5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 5) and ($unicas == 1)){ echo $procedimento_codigo5;} ?></b><div>
<div class="descricao_procedimento5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if(($continha >= 5) and ($unicas == 1)){echo $procedimento_nome5;}  ?></b><div>

<div class="numeroaleatorio" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $numeroaleatorio; ?></b></div>





<?php
switch ($continha) {
    case 2:
        if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
     		}
        break;
    case 3:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 4:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 5:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 6:
     echo "";
        break;
    case 7:
        echo "";
        break;
    case 8:
        echo "";
        break;
    case 9:
        echo "";
        break;
    case 10:
        echo "";
        break;
    case 11:
        echo "";
        break;
   
}
?>






<div class="bg1">   

<img src="img/00001.jpg"/>
</div>
 
<div class="convenioimg1"><img src="<?php echo $imagem ; ?>" width="70%" height="70%" /><div> 
 

<div class="ans1" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $ans; ?></b><div> 

<div class="cliente1" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nomecliente ?></b><div>

<div class="contratado1" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if ($contratador == 1 ){ echo $nome_medico; } else { echo $empresa; } ?></b><div>  


<div class="solicitante1" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nome_medico; ?></b><div> 


<div class="conselho1" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $conselho; ?></b><div> 
<div class="numconselho1" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $crm; ?></b><div>  
<div class="uf1" style="letter-spacing:5px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $uf; ?></b><div>  
<div class="cbo1" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $cbo;?></b><div>
<div class="indicacaoclinica1" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $codigocid.'-'.$descricaocid; ?></b><div>  


<div class="procedimento1" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0) {echo $procedimento_tabela2; }else {echo $procedimento_tabela6;}?></b><div> 
<div class="codigo_procedimento1" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0) {echo $procedimento_codigo2;}else {echo $procedimento_codigo6;} ?></b><div>
<div class="descricao_procedimento1" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos==0){ echo $procedimento_nome2;}else { echo $procedimento_nome6;} ?></b><div>
 
 
<div class="procedimento12" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0) {}else{echo $procedimento_tabela7;} ?></b></b><div> 
<div class="codigo_procedimento12" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else {echo $procedimento_codigo7;} ?></b><div>
<div class="descricao_procedimento12" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else {echo $procedimento_nome7;} ?></b><div>
 
<div class="procedimento13" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> <?php if($unicos == 0){}else{ echo $procedimento_tabela8; }?> </b><div> 
<div class="codigo_procedimento13" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo8;} ?></b><div>
<div class="descricao_procedimento13" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{echo $procedimento_nome8;} ?></b><div>

<div class="procedimento14" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{echo $procedimento_tabela9; }?></b><div> 
<div class="codigo_procedimento14" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo9;} ?></b><div>
<div class="descricao_procedimento14" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome9;}?></b><div>

<div class="procedimento15" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela10; } ?></b><div> 
<div class="codigo_procedimento15" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo10;} ?></b><div>
<div class="descricao_procedimento15" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome10; } ?></b><div>

<div class="numeroaleatorio11" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $numeroaleatorio; ?></b></div>





<?php
switch ($continha) {
    case 3:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 4:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 5:
       if ($unicas == 0){
			echo "";
			}else {
				echo "<!--";
				}
        break;
    case 6:
     echo "";
        break;
    case 7:
        echo "";
        break;
    case 8:
        echo "";
        break;
    case 9:
        echo "";
        break;
    case 10:
        echo "";
        break;
    case 11:
        echo "";
        break;
   
}
?>








<div class="bg2">   

<img src="img/00001.jpg"/>

</div>
 
 <div class="convenioimg10"><img src="<?php echo $imagem ; ?>" width="70%" height="70%" /><div>
 

<div class="ans10" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $ans; ?></b><div> 

<div class="cliente10" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nomecliente ?></b><div>

<div class="contratado10" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if ($contratador == 1 ){ echo $nome_medico; } else { echo $empresa; } ?></b><div>  




<div class="solicitante10" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $nome_medico; ?></b><div> 


<div class="conselho10" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $conselho; ?></b><div> 
<div class="numconselho10" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $crm; ?></b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $uf; ?></b><div>  
<div class="cbo10" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $cbo;?></b><div>
<div class="indicacaoclinica10" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $codigocid.'-'.$descricaocid; ?></b><div>  

<div class="procedimento10" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){ echo $procedimento_tabela3;} else { echo $procedimento_tabela11;} ?></b><div> 
<div class="codigo_procedimento10" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){ echo $procedimento_codigo3; }else {echo $procedimento_codigo11;}?></b><div>
<div class="descricao_procedimento10" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0) { echo $procedimento_nome3; } else {echo $procedimento_nome11;}?></b><div>

<div class="procedimento111" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela12;} ?></b><div> 
<div class="codigo_procedimento111" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> <?php if($unicos == 0){}else{ echo $procedimento_codigo12; }?></b><div>
<div class="descricao_procedimento111" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome12; }?></b><div>

<div class="procedimento122" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ $procedimento_tabela13; }?></b><div> 
<div class="codigo_procedimento122" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo13; }?></b><div>
<div class="descricao_procedimento122" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome13; }?></b><div>


<div class="procedimento133" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela14; }?></b><div> 
<div class="codigo_procedimento133" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo14; }?></b><div>
<div class="descricao_procedimento133" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome14; }?></b><div>
 
<div class="procedimento144" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_tabela15;  }?></b><div> 
<div class="codigo_procedimento144" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_codigo15;} ?> </b><div>
<div class="descricao_procedimento144" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php if($unicos == 0){}else{ echo $procedimento_nome15;} ?></b><div>

<div class="numeroaleatorio10" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b><?php echo $numeroaleatorio; ?></b></div> 






<?php
if(($continha <= 3) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>










<div class="bg3">   

<img src="img/00001.jpg"/>
</div>
 
 <div class="convenioimgg"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>

<div class="anss" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>20000</b><div> 

<div class="clientee" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>diego</b><div>

<div class="contratadoo" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>marcos</b><div>  




<div class="solicitantee" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>carlos</b><div> 


<div class="conselhoo" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>88</b><div> 
<div class="numconselhoo" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98754</b><div>  
<div class="uff" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b><div>  
<div class="cboo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>9884</b><div>
<div class="indicacaoclinicaa" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>cid 10</b><div>  

<div class="procedimentoo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>01</b><div> 
<div class="codigo_procedimentoo" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>9823</b><div>
<div class="descricao_procedimentoo" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame33</b><div>
 
<div class="procedimentoo2" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>00</b><div> 
<div class="codigo_procedimentoo2" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;">01234<b></b><div>
<div class="descricao_procedimentoo2" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame45</b><div>
 
<div class="procedimentoo3" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>02</b><div> 
<div class="codigo_procedimentoo3" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0987</b><div>
<div class="descricao_procedimentoo3" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame60</b><div>

<div class="procedimentoo4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>09</b><div> 
<div class="codigo_procedimentoo4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0987</b><div>
<div class="descricao_procedimentoo4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 99</b><div>

<div class="procedimentoo5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>22</b><div> 
<div class="codigo_procedimentoo5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0444</b><div>
<div class="descricao_procedimentoo5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame2424</b><div>

<div class="numeroaleatorioo" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>23233434</b> </div>




<?php
if(($continha <= 4) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>











<div class="bg4">   

<img src="img/00001.jpg"/>
</div>
 
<div class="convenioimgbg4"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>


<div class="ansbg4" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>99000</b><div> 

<div class="clientebg4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Carlos alberto</b><div>

<div class="contratadobg4" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Marcos pera</b><div>  




<div class="solicitantebg4" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>carlos alberto de nobrega</b><div> 


<div class="conselhobg4" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98</b><div> 
<div class="numconselhobg4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>544</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>PA</b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>09383</b><div>
<div class="indicacaoclinicabg4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>cid 10 que matou o caboblo</b><div>  

<div class="procedimentobg4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>11</b><div> 
<div class="codigo_procedimentobg4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>11111</b><div>
<div class="descricao_procedimentobg4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 11</b><div>
 
<div class="procedimentobg41" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>22</b><div> 
<div class="codigo_procedimentobg41" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>222222</b><div>
<div class="descricao_procedimentobg41" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 22</b><div>
 
<div class="procedimentobg42" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 33 </b><div> 
<div class="codigo_procedimentobg42" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>33333</b><div>
<div class="descricao_procedimentobg42" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 33</b><div>

<div class="procedimentobg43" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>44</b><div> 
<div class="codigo_procedimentobg43" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>4444</b><div>
<div class="descricao_procedimentobg43" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 44</b><div>

<div class="procedimentobg44" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>55</b><div> 
<div class="codigo_procedimentobg44" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>55555</b><div>
<div class="descricao_procedimentobg44" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 55</b><div>

<div class="numeroaleatoriobg4" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98989898777</b>






<?php
if(($continha <= 5) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>












<div class="bg5">   

<img src="img/00001.jpg"/>
</div>
 
 <div class="convenioimgbg5"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>
 

<div class="ansbg5" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>78000</b><div> 

<div class="clientebg5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Marcos pera</b><div>

<div class="contratadobg5" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Maria ferreira</b><div>  




<div class="solicitantebg5" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Marcos fecha</b><div> 


<div class="conselhobg5" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98</b><div> 
<div class="numconselhobg5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>333</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b></b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b></b>670444<div>
<div class="indicacaoclinicabg5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>cid 10 braba</b><div>  

<div class="procedimentobg5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>00</b><div> 
<div class="codigo_procedimentobg5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98731</b><div>
<div class="descricao_procedimentobg5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 80</b><div>
 
<div class="procedimentobg51" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>09</b><div> 
<div class="codigo_procedimentobg51" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12345</b><div>
<div class="descricao_procedimentobg51" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 99</b><div>
 
<div class="procedimentobg52" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 77 </b><div> 
<div class="codigo_procedimentobg52" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98731</b><div>
<div class="descricao_procedimentobg52" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 200</b><div>

<div class="procedimentobg53" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>44</b><div> 
<div class="codigo_procedimentobg53" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>87432</b><div>
<div class="descricao_procedimentobg53" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 99</b><div>

<div class="procedimentobg54" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>11</b><div> 
<div class="codigo_procedimentobg54" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>38212</b><div>
<div class="descricao_procedimentobg54" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 77</b><div>

<div class="numeroaleatoriobg5" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>20002222333</b> </div>







<?php
if(($continha <= 6) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>










<div class="bg6">   

<img src="img/00001.jpg"/>
</div>
 
 <div class="convenioimgbg6"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>

<div class="ansbg6" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0123</b><div> 

<div class="clientebg6" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>sabrina brito</b><div>

<div class="contratadobg6" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>camila linguinha</b><div>  



<div class="solicitantebg6" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Diego nunes </b><div> 


<div class="conselhobg6" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>69</b><div> 
<div class="numconselhobg6" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>696</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>696969</b><div>
<div class="indicacaoclinicabg6" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>cid 10</b><div>  

<div class="procedimentobg6" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>69</b><div> 
<div class="codigo_procedimentobg6" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>696969</b><div>
<div class="descricao_procedimentobg6" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 69</b><div>
 
<div class="procedimentobg61" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>69</b><div> 
<div class="codigo_procedimentobg61" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>6969</b><div>
<div class="descricao_procedimentobg61" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 6969</b><div>
 
<div class="procedimentobg62" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>22</b><div> 
<div class="codigo_procedimentobg62" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>2222</b><div>
<div class="descricao_procedimentobg62" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 2222</b><div>

<div class="procedimentobg63" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>33</b><div> 
<div class="codigo_procedimentobg63" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>3333</b><div>
<div class="descricao_procedimentobg63" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 3333</b><div>

<div class="procedimentobg64" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>55</b><div> 
<div class="codigo_procedimentobg64" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>55555</b><div>
<div class="descricao_procedimentobg64" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 5555</b><div>

<div class="numeroaleatoriobg6" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 6969696969 </b> </div>







<?php
if(($continha <= 7) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>





                                                              
<div class="bg7">  
 

<img src="img/00001.jpg"/>

</div>
 
 <div class="convenioimgbg7"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>

<div class="ansbg7" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>120</b><div> 

<div class="clientebg7" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>danilo gentile</b><div>

<div class="contratadobg7" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>pelanza</b><div>  




<div class="solicitantebg7" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>dani bolina</b><div> 


<div class="conselhobg7" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>99</b><div> 
<div class="numconselhobg7" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>32</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>012345</b><div>
<div class="indicacaoclinicabg7" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>CID 10</b><div>  

<div class="procedimentobg7" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12</b><div> 
<div class="codigo_procedimentobg7" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12344</b><div>
<div class="descricao_procedimentobg7" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME DIFERENTE</b><div>
  
<div class="procedimentobg71" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>11</b><div> 
<div class="codigo_procedimentobg71" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>999999</b><div>
<div class="descricao_procedimentobg71" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame diferente 21</b><div>

<div class="procedimentobg72" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>33</b><div> 
<div class="codigo_procedimentobg72" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>09234</b><div>
<div class="descricao_procedimentobg72" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame outro diferente</b><div>
 
<div class="procedimentobg73" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12</b><div> 
<div class="codigo_procedimentobg73" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12345</b><div>
<div class="descricao_procedimentobg73" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame mais diferente ainda</b><div>

<div class="procedimentobg74" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>14</b><div> 
<div class="codigo_procedimentobg74" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0913</b><div>
<div class="descricao_procedimentobg74" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame mais ainda diferente</b><div>

<div class="numeroaleatoriobg7" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12313423</b></div>


<?php
if(($continha <= 8) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>









<div class="bg8">   

<img src="img/00001.jpg"/>

</div>
 
<div class="convenioimgbg8"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div>

<div class="ansbg8" style="letter-spacing:7px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>123452</b><div> 

<div class="clientebg8" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>diego nunes </b><div>

<div class="contratadobg8" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>marcos</b><div>  




<div class="solicitantebg8" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>carlos</b><div> 


<div class="conselhobg8" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>98</b><div> 
<div class="numconselhobg8" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>123</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12345</b><div>
<div class="indicacaoclinicabg8" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>cid 10</b><div>  

<div class="procedimentobg8" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>01</b><div> 
<div class="codigo_procedimentobg8" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0923</b><div>
<div class="descricao_procedimentobg8" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame</b><div>

<div class="procedimentobg81" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>01</b><div> 
<div class="codigo_procedimentobg81" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0934</b><div>
<div class="descricao_procedimentobg81" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame</b><div>

<div class="procedimentobg82" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>99</b><div> 
<div class="codigo_procedimentobg82" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12345</b><div>
<div class="descricao_procedimentobg82" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame</b><div>


<div class="procedimentobg83" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>01</b><div> 
<div class="codigo_procedimentobg83" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>01234 </b><div>
<div class="descricao_procedimentobg83" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame</b><div>
 
<div class="procedimentobg84" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 12 </b><div> 
<div class="codigo_procedimentobg84" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 0923 </b><div>
<div class="descricao_procedimentobg4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> exame  </b><div>

<div class="numeroaleatoriobg8" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>123134123123</b></div> 




<?php
if(($continha <= 9) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>









 
<div class="bg9">   

<img src="img/00001.jpg"/>
</div>
 
 <div class="convenioimgbg9"><img src="img/unimed_ni.jpg" width="70%" height="70%" /><div

<div class="ansbg9" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>111</b><div> 

<div class="clientebg9" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>diego</b><div>

<div class="contratadobg9" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>carlos</b><div>  




<div class="solicitantebg9" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>sdsdsdsd</b><div> 


<div class="conselhobg9" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>66</b><div> 
<div class="numconselhobg9" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>4444</b><div>  
<div class="uf" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b><div>  
<div class="cbo" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1231244</b><div>
<div class="indicacaoclinicabg9" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 20</b><div>  

<div class="procedimentobg9" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b><div> 
<div class="codigo_procedimentobg9" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0234</b><div>
<div class="descricao_procedimentobg9" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 22</b><div>
 
<div class="procedimentobg91" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>09</b><div> 
<div class="codigo_procedimentobg91" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b><div>
<div class="descricao_procedimentobg91" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 44</b><div>
 
<div class="procedimentobg92" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b> 12 </b><div> 
<div class="codigo_procedimentobg92" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b><div>
<div class="descricao_procedimentobg92" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 1234</b><div>

<div class="procedimentobg93" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12</b><div> 
<div class="codigo_procedimentobg93" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>11231</b><div>
<div class="descricao_procedimentobg93" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 130</b><div>

<div class="procedimentobg94" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>21</b><div> 
<div class="codigo_procedimentobg94" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>0192</b><div>
<div class="descricao_procedimentobg94" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>EXAME 200</b><div>

<div class="numeroaleatoriobg9" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>100002000300 </b></div>


<?php
if(($continha <= 10) or ($unicas > 0 )){
	echo "<!--";
	
	}


?>






<div class="karlane">   

<img src="img/00001.jpg"/>
</div>

<div class="karlaneimg"><img src="img/unimed_ni.jpg" width="70%" height="70%" /></div>

<div class="anskarlane" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>111</b></div>

<div class="clientekarlane" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>diego nunes vieira</b></div>


<div class="contratadokarlane" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>carlos ferreira melo</b></div>

<div class="solicitantekarlane" style="letter-spacing:2px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>Marcia carla ferreira</b></div> 

<div class="conselhokarlane" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>66</b></div> 

<div class="numconselhokarlane" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>4444</b></div>

<div class="ufkarlane" style="letter-spacing:6px; font-size:13px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>RJ</b></div>  

<div class="cbokarlane" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>12312</b></div>

<div class="indicacaoclinicakarlane" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>CID 30</b></div>

<div class="procedimentokarlane" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b></div>

<div class="codigo_procedimentokarlane" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b></div>

<div class="descricao_procedimentokarlane" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 133</b></div>

<div class="procedimentokarlane2" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b></div>

<div class="codigo_procedimentokarlane2" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b></div>

<div class="descricao_procedimentokarlane2" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 133</b></div>

<div class="procedimentokarlane3" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b></div>

<div class="codigo_procedimentokarlane3" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b></div>

<div class="descricao_procedimentokarlane3" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 133</b></div>

<div class="procedimentokarlane4" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b></div>

<div class="codigo_procedimentokarlane4" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b></div>

<div class="descricao_procedimentokarlane4" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 133</b></div>

<div class="procedimentokarlane5" style="letter-spacing:6px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>03</b></div>

<div class="codigo_procedimentokarlane5" style="letter-spacing:7px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>1234</b></div>

<div class="descricao_procedimentokarlane5" style="letter-spacing:0px; font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#333;"><b>exame 133</b></div>




</body>

<p class="coment"> --> </p>

</html>
