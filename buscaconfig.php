<?php
$link = mysql_connect('localhost','root','');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('clinica',$link); if($conexao){


$sql = "SELECT * FROM configuracoes ";

$consulta = mysql_query($sql);

// Armazena os dados da consulta em um array 



while( $registro = mysql_fetch_assoc($consulta)){
	
	
	 $ans =  $registro["ans"] ;
	 $empresa = utf8_encode($registro["nome"]);
	
}}


?>