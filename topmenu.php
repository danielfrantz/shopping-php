<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bintu Online Bazar</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <table width="100%" cellspacing="0" cellpadding="2">
      <col style="width:30%">
      <col style="width:40%">
      <col style="width:20%">
      <tr><td style="background-color:cyan;color:Blue;"></td><td
      style="background-color:cyan;color:Blue;"></td><td style="backgroundcolor:
      cyan;color:Blue;">
      <tr><td style="font-size: 35px;color:blue;background-color:cyan;"><!-- #1 -->
      <b>Bintu Online Bazar</b></font></td>
      <td bgcolor="cyan">
      <form method="post" action="searchitems.php"> <!-- #2 -->
      <input size="50" type="text" name="tosearch">
      <input type="submit" name="submit" value="Search">
      </form></td>
      <td bgcolor="cyan" ><a href="cart.php"><img style="max-width:40px;
      max-height:40px;width:auto;height:auto;" src="images/cart.png"></img>
      <span id="cartcountinfo"></span></a><!-- #3 -->
      </td></tr>
      </table>
      <div class="container">
      <nav>
      <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
      <a href="index.php">Electronics</a>
      <ul>+
      <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
      <li><a href="itemlist.php?category=Laptop">Laptops</a></li>
      <li><a href="index.php">Cameras </a></li>
      <li><a href="index.php">Televisions</a></li>
      </ul>
      </li>
      <li class="dropdown">
      <a href="index.php">Home & Furniture</a>
      <ul class="large">
      <li><a href="index.php">Kitchen Essentials</a></li>
      <li><a href="index.php">Bath Essentials</a></li>
      <li><a href="index.php">Furniture</a></li>
      <li><a href="index.php">Dining & Serving</a></li>
      <li><a href="index.php">Cookware</a></li>
      </ul>
      </li>
      <li><a href="index.php">Books</a></li>
      </ul>
      </nav>
      </div>
      <p>
  </body>
</html>
