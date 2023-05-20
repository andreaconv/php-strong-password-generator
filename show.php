<?php

session_start();

$password = $_SESSION['password'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Mostra password</title>
</head>
<body class="bg-dark">

  <div class="container text-center text-white py-5">

    <h1>La tua password è <?php echo $password ?> </h1>
    
  </div>

  
</body>
</html>