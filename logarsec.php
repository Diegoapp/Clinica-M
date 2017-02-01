<?PHP
$numero = 0;

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = "clinica"; 

 
//Conexão mysql
$conexao = mysql_connect($hostname, $username, $password) or die ("Erro na conexão do banco de dados.");
 
//Seleciona o banco de dados
$selecionabd = mysql_select_db($database,$conexao) or die ("Banco de dados inexistente.");
 
//Comando SQL de verificação de autenticação
$sql = "SELECT * FROM secretaria WHERE nome_secretaria = '$login' AND senha_secretaria = '$senha'";
 
$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
 
//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
	
	header('location:iniciosec.php');
	$numero++;
}
 
//Caso contrário redireciona para a página de autenticação
else {
	
	
	
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    //Redireciona para a página de autenticação
    header('location:/index.php');
     
}
?>
