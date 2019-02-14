<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script language="JavaScript" type="text/JavaScript" src="checkform.js"></script>

  </head>
  <body class="bg-light">
    <div class="container">
      <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
        <table border="0" cellspacing="1" cellpadding="3">
          <tr><td colspan="2" align="center">Enter your information</td></tr>
          <tr><td>Email Address: </td><td><input size="20" type="text"
          name="emailaddress" ><span id="emailmsg"></span></td></tr>
          <tr><td>Password: </td><td><input size="20" type="password"
          name="password" ><span id="passwdmsg"></span></td></tr>
          <tr><td>ReType Password: </td><td><input size="20"
          type="password" name="repassword"><span id="repasswdmsg">
          </span></td></tr>
          <tr><td>Complete Name </td><td><input size="50" type="text"
          name="complete_name" ><span id="usrmsg"></span></td></tr>
          <tr><td>Address: </td><td><input size="80" type="text"
          name="address1"></td></tr>
          <tr><td></td><td><input size="80" type="text" name="address2">
          </td></tr>
          <tr><td>City: </td><td><input size="30" type="text"
          name="city"></td></tr>
          <tr><td>State: </td><td><input size="30" type="text"
          name="state"></td></tr>
          <tr><td>Country: </td><td><input size="30" type="text"
          name="country"></td></tr>
          <tr><td>Zip Code: </td><td><input size="20" type="text"
          name="zipcode"></td></tr>
          <tr><td>Phone No: </td><td><input size="30" type="text"
          name="phone_no"></td></tr>
          <tr><td><input type="submit" name="submit" value="Submit">
          </td><td>
          <input type="reset" value="Cancel"></td></tr>
        </table>
      </form>
    </div>
    <!-- container -->
  </body>
</html>
