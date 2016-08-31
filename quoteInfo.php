<?
	require_once("includes/common.php"); 


?>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>C$50 Finance: Stock Info</title>
  </head>

  <body>

    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.gif"></a>
    </div>

    <div id="middle">
    
    	A share of <? print($s->name); ?> currently costs $<? print($s->price); ?>.
    	
    	
    </div>

    <div id="bottom">
      <a href="javascript:history.go(-1);">Go Back</a>
    </div>

  </body>

</html>
