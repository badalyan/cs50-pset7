<?

    // require common code
    require_once("includes/common.php");

    // escape symbol for safety
    $symbol = mysql_real_escape_string($_POST["symbol"]);

    // get user id
    $uid = $_SESSION["uid"];

    // get user shares
    $result = mysql_query("SELECT shares FROM stocks WHERE uid = $uid");
    $shares = mysql_result($result, 0);

    // delete table row
    $delete = mysql_query("DELETE FROM stocks WHERE uid = $uid AND symbol = '$symbol'");


    // add money to user
    $s = lookup($symbol);
    $amount = $s->price * $shares;
    $deduct = mysql_query("UPDATE users SET cash = cash + $amount WHERE uid = $uid");

    // redirect to portfolio
    if ($delete && $deduct)
    	redirect("index.php");
    else
    	apologize("There was an error. No stocks have been sold.");




?>
