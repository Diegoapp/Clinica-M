<?php

try{
  // Faz conexão com banco de daddos
  $pdo = new PDO("mysql:host=localhost;dbname=clinica;","root", "");
}catch(PDOException $e){
  // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
  echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
  die;
}
$nome="marcos ferreira";
$convenio=26;

$statement = $pdo->prepare('INSERT INTO clientes (nome, convenio) VALUES (:nome, :convenio)');



// Adiciona os dados acima para serem executados na sentença
$statement->bindParam(':nome',     $nome);
$statement->bindParam(':convenio', $convenio);


$valores = range( 1 , 60000);
for ( $i = 0, $total = count( $valores ); $i < $total; $i++ )
{
    $statement->execute();
}
?>