<?

    // require common code
    require_once("includes/common.php"); 
    


    // escape username and password for safety
    $username = mysql_real_escape_string($_POST["username"]);
    $password = mysql_real_escape_string($_POST["password"]);
    $password2 = mysql_real_escape_string($_POST["password2"]);
    
    // check for blank entries problems
    if ($_POST["username"] == "" || $_POST["password"] == "")
    	apologize("Username or Passwords cannot be blank.");
    	
    // check for password match problems
    if ($_POST["password"] != $_POST["password2"])
    	apologize("Passwords must be the same.");
    
    // prepare sql
    $sql = "INSERT INTO users (username, password, cash) VALUES ('$username', '$password', 10000.00)";
    	
    // execute sql
    $result = mysql_query($sql);
    
    // if everything went ok
    if ($result)
    {
    	// cache uid in session
    	$_SESSION["uid"] = mysql_insert_id();
    	
    	// redirect to portfolio
    	redirect("index.php");
    	
    }
    else
    	apologize("Username already exists");
    	
    	

    

?>
