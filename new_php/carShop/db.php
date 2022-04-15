 <?php
$mysqli = new mysqli('localhost', 'prosari_cars', 'save1more', 'prosari_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("prosari_cars");
 
?>
