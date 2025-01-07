<?php
// Define database connection constants
define("SERVERNAME", "fdb1028.awardspace.net");
define("USERNAME", "4559502_restapi");
define("PASSWORD", "********");
define("DBNAME", "4559502_restapi");

// Establish database connection
$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
