<?php

  if(isset($_POST['submit'])) // quando clica no botão de enviar, tem que criar a variável submit
  {

    include_once('config.php');

    $nome = $_POST['nome'];
    $masp = $_POST['masp'];
    $sorigem = $_POST['sorigem'];
    $sdestino = $_POST['sdestino'];
    $homologador = $_POST['homologador'];
    $data_inserc = $_POST['data_inserc'];
    $sei = $_POST['sei'];
    $abono = $_POST['abono'];

    $result = mysqli_query($conexao, "INSERT INTO trocas(nome, masp, sorigem, sdestino, homologador, data_inserc, sei, abono)
     VALUES ('$nome', '$masp', '$sorigem', '$sdestino', '$homologador', '$data_inserc', '$sei', '$abono')");

  }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Troca de Setor</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilotroca.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



  <div class="container">

    <div class="page-header">
      <h1>Troca de Setor</h1>
    </div>

    <div class="row">

      <div class="col-sm-8">
        <h3>Informações Necessárias</h3>

        <form action="trocadesetor.php" method="POST">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>

          <div class="form-group">
            <label for="masp">Masp</label>
            <input type="number" class="form-control" id="masp" name="masp">
          </div>

          <div class="form-group">
            <label for="sorigem">Setor de Origem</label>
            <input type="text" class="form-control" id="sorigem" name="sorigem">
          </div>

          <div class="form-group">
            <label for="sdestino">Setor de Destino</label>
            <input type="text" class="form-control" id="sdestino" name="sdestino">
          </div>

          <div class="form-group">
            <label for="homologador">Homologador</label>
            <input type="text" class="form-control" id="homologador" name="homologador">
          </div>

          <div class="form-group">
            <label for="data_inserc">Mês em que será homomogado pelo novo Coordenador</label>
            <input type="date" class="form-control" id="data_inserc" name="data_inserc">
          </div>

          <div class="form-group">
            <label for="sei">SEI</label>
            <input type="text" class="form-control" id="sei" name="sei">
          </div>

          <div class="form-group">
            <label for="abono">Incusão/Exclusão/Alteração de Abono de Emergência</label>
            <input type="text" class="form-control" id="abono" name="abono">
          </div>


          <button type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-default">Resetar</button>

        </form>

      </div>

    </div>
  </div>




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  </script>
</body>

</html>