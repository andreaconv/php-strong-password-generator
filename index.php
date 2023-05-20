<?php 

$isSend = true;

$lunghezzaPSW = $_GET['length'] ?? null ;


/*
1. ricevo un numero dall'utente,
2. la funzione deve prendere una lettera, una lettera maiuscola, un numero e un sinbolo e li salva in una PSW fino a quando la lunghezza della PSW non raggiunge il numero dell'utente,
3. 
*/


function generaPSW($lunghezzaPSW){
  
  $lettere = 'abcdefghijklmnopqrstuvwxyz';
  $simboli = '!?&%$<>^+-*/()[]{}@#_=';
  $password = '';

  while (strlen($password) < $lunghezzaPSW) {

    $password .= $lettere[rand(0, strlen($lettere) - 1)];
    $password .= strtoupper($lettere[rand(0, strlen($lettere) - 1)]);
    $password .= $simboli[rand(0, strlen($simboli) - 1)];
    $password .= rand(0, 9);

  }

  return substr($password,0, $lunghezzaPSW);
}

if(isset($_GET['length'])){
  $password = generaPSW($lunghezzaPSW);
  $isSend = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Password Generator</title>
</head>
<body class="bg-dark">

  <div class="container text-center text-white py-5">
    <div class="row">
      <div class="col">

        <?php if($isSend) : ?>
          <form action="index.php" method="GET">
            <label class="me-3" for="length">Lunghezza password:</label>
            <input type="number" name="length">
            <button type="submit" name="submit" value="submit" class="btn btn-light ms-3">Invia</button>
          </form>

        <?php else : ?>

          <h1>La tua password è <?php echo $password ?> </h1>

        <?php endif ?>
      </div>
    </div>
  </div>
  
</body>
</html>