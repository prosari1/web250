<?php
$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "password";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
} 
echo "Connected Successfully. "

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head> -->
    <!-- Script to include html header and footer dinamically  -->
<!--
    <script src="scripts/include.js"></script>

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
    <title>WEB 250 | Code Play</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/database-logo.png"
    />
  </head>
  <body>
    <div data-include="components/header.html"></div>
    <main>
      <div class="row content">
        <h1>Code Play</h1>
        <ol>
    <?php foreach($fruit as $f): ?>
        <li><?= $f ?></li>
    <?php endforeach; ?>
</ol>
        <p>
          <?php 
          echo "<p>Hello There</p>";
          ?>
        </p>
      </div>
    </main>
    <div data-include="components/footer.html"></div>
    <script src="scripts/include.js"></script>
  </body>
</html> -->
