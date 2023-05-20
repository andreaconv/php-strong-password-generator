<?php 

session_start();

include 'functions.php';


$lunghezzaPSW = $_GET['length'] ?? null ;


if(isset($_GET['length'])){
  $password = generaPSW($lunghezzaPSW);
  $_SESSION['password'] = $password;

  header('Location: show.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    a{
      text-decoration: none;
      color: black
    }
  </style>
  <title>Password Generator</title>
</head>
<body class="bg-dark">

  <div class="container text-center text-white py-5">
    <div class="row">
      <div class="col">

          <form action="index.php" method="GET">
            <label class="me-3" for="length">Lunghezza password:</label>
            <input type="number" name="length">
            <button
              type="submit"
              name="submit"
              value="submit"
              class="btn btn-light ms-3">
                Invia</button>
          </form>

      </div>
    </div>
  </div>
  
</body>
</html>