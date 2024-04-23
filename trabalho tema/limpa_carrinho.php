

<?php
// Configurações do banco de dados
$dsn = 'mysql:host=localhost:3307;dbname=laisa';
$username = 'laisa';
$password = 'laisa';

 // Cria uma nova conexão PDO
 $pdo = new PDO($dsn, $username, $password);

 // Define o modo de erro do PDO para exceção
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 // Query SQL
 $sql = "TRUNCATE TABLE laisa.carrinho";


 // Prepara a consulta
 $stmt = $pdo->prepare($sql);

 // Executa a consulta
 $stmt->execute();

 header("Location: carrinho.php");
 die();

 
 ?>