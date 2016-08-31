<?

    // require common code
    require_once("includes/common.php");
    
    // escape symbol for safety
    $symbol = mysql_real_escape_string($_POST["symbol"]);
    $quantity = mysql_real_escape_string($_POST["quantity"]);
    
    // make sure it's a non-negative integer
    if (!preg_match("/^\d+$/", $_POST["quantity"]))
    	apologize("Sorry, only positive numbers allowed");

    // get user id
    $uid = $_SESSION["uid"];
    
    // calculate total for all shares
    $s = lookup($symbol);
    $amount = $s->price * $quantity;
    
    // check to see if it was a valid symbol
    if (!$s)
    	apologize("Sorry, that isn't a stock symbol");
    
    // get available funds and put into variable
    $result = mysql_query("SELECT cash FROM users WHERE uid = $uid");
    $funds = mysql_result($result, 0);
    	
    // subtract amount from funds
    $total = $funds - $amount;
    
    // insert shares into database
    if ($total < 0)
    	apologize("Sorry, you don't have enough to buy that.");
    else {
    	mysql_query("INSERT INTO stocks (uid, symbol, shares) VALUES ($uid, '$symbol', $quantity) ON DUPLICATE KEY UPDATE shares = shares + VALUES (shares)");
    	mysql_query("UPDATE users SET cash = cash - $amount WHERE uid = $uid");
    	redirect("index.php");
   	}
        
  


?>