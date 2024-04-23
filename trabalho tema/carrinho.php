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
 $sql = "SELECT * FROM carrinho";

 // Prepara a consulta
 $stmt = $pdo->prepare($sql);

 // Executa a consulta
 $stmt->execute();

 // Busca os resultados
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

 
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>site MELU</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <nav class="fundomenu navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://raichu-uploads.s3.amazonaws.com/logo_melu-by-ruby-rose_WVnniJ.png">MELU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
              <li class="nav-item">
                <button type="button" class="btn btn-danger" onclick="acessivel();"><i class="bi bi-universal-access-circle"></i></button>
              </li>

              
            </ul>
            <form class="d-flex" role="procurar">
              <input class="form-control me-2" type="procurar" placeholder="procurar" aria-label="procurar">
              <button class="button btn-outline-primary" type="submit">ir</button>
            </form>
          </div>
        </div>
      </nav>
      <body class="bg-color">

<div class="container">  
<div class="row">
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
   


<?php
// Exibe os resultados
foreach ($results as $itens_carrinho) {

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query SQL
    $sql2 = "SELECT * FROM produtos WHERE id=".$itens_carrinho['idproduto']."";
   
    // Prepara a consulta
    $stmt2 = $pdo->prepare($sql2);
   
    // Executa a consulta
    $stmt2->execute();
   
    // Busca os resultados
    $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);


   foreach ($results2 as $item) {
    echo '
    <tr>
    <th scope="row">'.$itens_carrinho['id'].'</th>
    <td><img src="'.$item['img'].'"  style="width: 50px !important;"></td>
    <td>'.$item['nome'].'</td>
    <td>'.$item['valor'].'</td>
    </tr>';


    

    @$total = $total+ str_replace('R$ ','',$item['valor']);
  }

}
?>

<tr>
<th></th>
<th></th>
<td>TOTAL</td>
<td>R$ <?php echo @$total; ?></td>
</tr>

<tr>
<th></th>
<th></th>
<td></td>
<td><a href="limpa_carrinho.php">Limpar Carrinho</a></td>
</tr>

    
  </tbody>
</table>

</div>
</div>

<div class="container">  
    <div class="row">
        <div class="col-12">
        <a href="finalizarCompra.php" class="btn btn-success w-100">Comprar</a>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


<script>
  function acessivel(){
    var classeAtual = $('body').attr('class');
  

    if(classeAtual == "bg-color"){
      $("body").removeClass("bg-color");
      $("body").addClass("bg-color-home-dark");
    }
    else{
      $("body").removeClass("bg-color-home-dark");
      $("body").addClass("bg-color");
    }
  }
</script>
</body>
  </body>
</html>
