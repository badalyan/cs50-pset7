<?

    // require common code
    require_once("includes/common.php"); 

    $s = lookup($_POST["symbol"]);
    
    
    	


	if ($s) { ?>
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
    
    	A share of <strong><? print($s->name); ?></strong> 
    	currently costs $<strong><? print($s->price); ?></strong>.
    	
    	
    </div>

    <div id="bottom">
      <a href="javascript:history.go(-1);">Go Back</a>
    </div>
    
    
  </body>

</html>
<? 
	} else 
	apologize("Sorry, there's no such stock symbol"); 
	
?>