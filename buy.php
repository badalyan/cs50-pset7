<?

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Buy stock</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img src="images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="post_buy.php" method="post">
      	<table>
          <tr>
            <td>Symbol:</td>
            <td><input name="symbol" type="text" value=""></td>
          </tr>
          <tr>
            <td>Quantity:</td>
            <td><input name="quantity" type="text"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Buy"></td>
          </tr>
        </table>
        </form>
    </div>


  </body>

</html>
