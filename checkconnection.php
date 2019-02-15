<?php

// Connect to database
$mysqli = new mysqli("localhost","root","","shopping");

if ($mysqli->connect_error) {
  printf("Não foi possível conectar ao banco: %s\n", $mysqli->connect_error);
  exit();
} else {
  printf("Conectado com sucesso");
}

?>
