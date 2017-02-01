<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$cursos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$busca= "SELECT clientes.convenio, clientes.id, clientes.nome, convenios.id_convenios, convenios.nome_convenio FROM clientes INNER JOIN convenios on clientes.convenio = convenios.id_convenios WHERE clientes.nome LIKE '%$cursos%'";
	
	$cursos = "SELECT * FROM clientes WHERE nome LIKE '%$cursos%' ";
	$resultado_cursos = mysqli_query($conn, $busca);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum Cliente encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){

	echo '<tr>';
	echo "<td>".$rows['id']."</td>";
    echo "<td>".$rows['nome']."</td>";
    echo "<td>".$rows['nome_convenio']."</td>";
    echo '<td class="center">';
	echo ' <a class="btn btn-info" onclick="funcaoview('.$rows["id"].')" href="#">';
	echo ' <i class="glyphicon glyphicon-zoom-in icon-white"></i>';
	echo ' View'; 
	echo ' </a>'; 
	echo ' <a class="btn btn-info" onclick="funcaoedita('.$rows["id"].')" href="#">';
    echo ' <i class="glyphicon glyphicon-edit icon-white"></i>';
    echo ' Edit'; 
    echo ' </a>';
	echo ' <a class="btn btn-info" onclick="funcaodeleta('.$rows["id"].')" href="#">';
    echo ' <i class="glyphicon glyphicon-trash icon-white"></i>';
    echo ' Delete';
    echo ' </a>';	
	echo ' <a class="btn btn-danger" onClick="funcaoatendimento('.$rows["id"].')" href="#">';
echo '<i class="glyphicon glyphicon-edit icon-white"></i>';
echo 'Atendimento';
echo '</a> <a href="" target="_blank"></a>'; 
	
	echo '<tr>';
    echo "</td>";
	
	
	
		}
	}
?>




