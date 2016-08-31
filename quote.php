<?

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Quote</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="post_quote.php" method="post">
        <table>
          <tr>
            <td>Stock Symbol:</td>
            <td><input name="symbol" type="text"></td>

            <td colspan="2"><input type="submit" value="Check"></td>
          </tr>
        </table>
      </form>
    </div>


  </body>

</html>
