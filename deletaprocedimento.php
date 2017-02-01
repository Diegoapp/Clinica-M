<?php 
    $root = 'root';
	$senha ='';

    $id = $_GET['id']; 
	
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=clinica', $root, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('DELETE FROM procedimento WHERE id_procedimento = :id_procedimento');
  $stmt->bindParam(':id_procedimento', $id); 
  $stmt->execute();
  echo '<script>alert("Parabens! Procedimento excluido com sucesso!"); </script>'; 
  echo '<script> window.close(); </script>';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>