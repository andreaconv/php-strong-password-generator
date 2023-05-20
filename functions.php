<?php

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

  return substr(str_shuffle($password),0, $lunghezzaPSW);
}

?>