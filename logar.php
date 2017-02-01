<?PHP
$css = 0;

$numero = 0;
$valor1 = 1; 
$valor2 = 2;
$valor3 = 3;

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['crm'];
$senha = $_POST['password'];
$funcao =$_POST['funcao'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = "clinica";  
//Conexão mysql
$conexao = mysql_connect($hostname, $username, $password) or die ("Erro na conexão do banco de dados.");
 
//Seleciona o banco de dados
$selecionabd = mysql_select_db($database,$conexao) or die ("Banco de dados inexistente.");
 
//Comando SQL de verificação de autenticação

 
if ($funcao == $valor1 ) {
	
	$sql = "SELECT * FROM usuarios WHERE crm = '$login' AND password = '$senha'";
	$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
 
//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['crm'] = $login;
    $_SESSION['password'] = $senha;
	
	header('location:inicio.php');
	$numero++;
}
 
//Caso contrário redireciona para a página de autenticação
else {
	
	echo "<script> css();</script>";
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['crm']);
    unset ($_SESSION['password']);
 
    //Redireciona para a página de autenticação
    header('location:/index.php');
     
} }if ($funcao == $valor2) {
	
	
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
	
	$css + 1;
	
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    //Redireciona para a página de autenticação
    header('location:/index.php');
     
	


	
	
	}
	
		
	} if($funcao == $valor3){
		
		$sql = "SELECT * FROM medicos WHERE crm_medico = '$login' AND senha_medico = '$senha'";
	    $resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
 
//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['medico_crm'] = $login;
    $_SESSION['medico_senha'] = $senha;
	
	header('location:medico_atendimentoview.php');
	$numero++;
}
 
//Caso contrário redireciona para a página de autenticação
else {
	
	
	
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['medico_crm']);
    unset ($_SESSION['medico_senha']);
 
    //Redireciona para a página de autenticação
    header('location:/index.php');
	
}}
 


?>
