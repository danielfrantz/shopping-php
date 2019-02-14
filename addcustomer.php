<?php

  $connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check the server connection.");

  $email_address = $_POST['emailaddress'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $completename = $_POST['complete_name'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zipcode = $_POST['zipcode'];
  $phone_no = $_POST['phone_no'];

  $sql = "INSERT INTO customers (email_address, password, complete_name,address_line1, address_line2, city, state, zipcode, country, cellphone_no)
          VALUES ('$email_address',(PASSWORD('$password')), '$completename', '$address1','$address2','$city', '$state', '$zipcode', '$country', '$phone_no')";

  $result = mysqli_query($connect, $sql) or die(mysql_error());

  if ($result) {

  ?>
    <p>Dear, <?php echo $completename; ?> your account is successfully created

  <?php

  } else {
    echo "Some error occurred. Please use different email address";
  }
  //
  // • mysqli_num_rows () - Retorna a contagem de linhas em um dado conjunto de registros.
  // • mysqli_affected_rows () - Retorna a contagem de linhas afetadas por o comando SQL especificado.
  // • mysqli_fetch_array () - Retorna uma linha de cada vez do conjunto de registros.
  // • extract () - Extrai as colunas ou campos na linha especificada.
  // Vamos discutir esses métodos em detalhes.
  // mysqli_num_rows ()
  // O método mysqli_num_rows () retorna a contagem de linhas que existe no especificado
  // conjunto de registros. A sintaxe para usar esse método é a seguinte:
  // int mysqli_num_rows (recordset)
  // Onde recordset representa os registros ou linhas que são recuperados após a execução de
  // a instrução SQL SELECT através do método mysqli_query ().
 ?>
