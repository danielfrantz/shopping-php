<?php


// - servdidor
// - usuario
// - senha
// - banco

// Connect to the database server
$MySQLi = new MySQLi("localhost", "root", "", "shopping54");

if($MySQLi->errno) {
  printf("Não foi possível conectar ao banco de dados: <br /> %s", $MySQLi->error);
  exit();
} else {
  printf("Conectado com sucesso com servidor MySQL");
}

// // Connect to the database server
// $MySQLi = new MySQLi("localhost", "root", "", "shopping12");
// if ($MySQLi->connect_errno) {
//   printf("Unable to connect to the database:<br /> %s", $MySQLi->connect_error);
//   exit();
// } else
//   printf("Successfully connected with the MySQL server and shopping database is opened");
//

// $mysqli = new mysqli("localhost", "root", "", "shopping");
//
// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// } else
//   printf("Successfully connected with the MySQL server and shopping database is opened");
// //
// // if (!$mysqli->query("SET a=1")) {
// //     printf("Errorcode: %d\n", $mysqli->errno);
// // }
//
// /* close connection */
// $mysqli->close();





 ?>
