<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles/normalize.css" />
    <link rel="stylesheet" type="text/css" href="styles/Grid.css" />
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />
    <title>Patricia Rosario | Data Shop | WEB 250 | Index</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/database-logo.png"
    />
  </head>
  <body>
  <?php include 'header.php';?>
    <main>

    
      <!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "home.php"; }
	include($sPage);
?>

    </main>
    <?php include 'footer.php';?>
  </body>
</html>
