<?

    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Sell stock</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img src="images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="post_sell.php" method="post">
      	<select name="symbol">
      	<option>Choose a Stock</option>

      	<?
      	// Store users id into variable
		$uid = $_SESSION["uid"];

      	// Connect to database
      	$result = mysql_query("SELECT symbol FROM stocks WHERE uid = $uid");

      	// Show all stock options
		while ($row = mysql_fetch_array($result)) {

		  	// List option tags
		   	print('<option value="' . $row["symbol"] . '">' . $row["symbol"] . '</option>');

		}

      	?>

      	</select>

        <input type="submit" value="Sell!">
      </form>
    </div>


  </body>

</html>
