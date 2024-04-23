

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
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <body class="bg-color"></body>
    <nav class="fundomenu navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MELU</a>
          <button class="button navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categoria
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="maquiagem.php">Maquiagem</a></li>
                  <li><a class="dropdown-item" href="skin.php">Skincare</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" role="procurar">
              <input class="form-control me-2" type="procurar" placeholder="procurar" aria-label="procurar">
              <button class="button btn btn-outline-success" type="submit">ir</button>
          
            </form>
          </div>
        </div>
      </nav>


      <br><Br><bR>
      <center>
      <h1>Compra Finalizada com sucesso!</h1>
    </center>
      <br><Br><bR>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
  </html>