<?php
 
 $id = $_GET['id'];

/*session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['crm']) and !isset($_SESSION['password']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
}*/
?>
<?php


  // Faz conexão com banco de daddos



$link = mysql_connect('localhost','root','');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('clinica',$link); 

if($conexao){




$cancelar = $_POST['cancelar'];


$query = "UPDATE clientes SET atendimento = '".$cancelar."' WHERE (id = ".$id.")";

$atualiza = mysql_query($query);

if($atualiza){ 
  echo "<script> alert('Atendimento Concluido;') </script>"; 
  echo '<script> window.close(); </script>';
}else {
 echo '<script>alert("0.0! Erro ao auterar o cliente "). mysql_error(); </script>'; 
  echo '<script> window.close(); </script>';	
	
}

}

