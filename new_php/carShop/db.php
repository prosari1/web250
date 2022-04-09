 <?php
$mysqli = new mysqli('sql205.epizy.com', 'epiz_30989664', '79QDVgH4iiTawl', 'epiz_30989664_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("epiz_30989664_cars");
 
?>
