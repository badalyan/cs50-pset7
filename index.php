<?

    // require common code
    require_once("includes/common.php"); 

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>Financerr: Dashboard</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img src="images/logo.gif" ></a>
    </div>

    <div id="middle">
    	<table>
    	<thead>
    		<th>Name</th>
    		<th>Shares</th>
    		<th>Price</th>
    	</thead>
    	<tbody>
		      <? 
		      // Store users id into variable
		      $uid = $_SESSION["uid"];
		      
		      // Execute query and store into result
		      $result = mysql_query("SELECT symbol, shares FROM stocks WHERE uid = $uid");
		      
		      // Show all stocks in portfolio
		      while ($row = mysql_fetch_array($result)) {
		      	
		      		// Get new price on stock via API & put into table
		      		$s = lookup($row["symbol"]);
		      		print('<tr>');
		      		print('<td>' . $s->name . '</td>');
		      		print('<td>' . $row["shares"] . '</td>');
		      		print('<td>$' . $s->price . '</td>');
		      		print('</tr>');
		      
		      }
		      
		      
		      
		      
		      
		      
		      
		      ?>
    	</tbody>
    	</table>
    	<hr/>
    	<p>
    		  <?
    				$cash = mysql_query("SELECT cash FROM users WHERE uid = $uid");
    				$balance = mysql_result($cash, 0); 
    				printf("You have <strong>$%.2f</strong> left.", $balance);
    				
		      ?>
		</p>
    </div>

    <div id="bottom">
      <a href="buy.php">Buy</a>
      <a href="sell.php">Sell</a>
      <a href="quote.php">Quote</a>
      <a href="logout.php">Log out</a>
    </div>

  </body>

</html>
