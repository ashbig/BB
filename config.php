<?php

/* 
 * This file serves as a basic config to call database transactions.
 * Only usernames and passwords need updating.
 * run test.php locally to test connectivity.
 * author: ashkan bigdeli
 */

$dbUser = "root";
$dbPass = "ash";
$dbDatabase ="bots";
$dbHost = "localhost";

$dbConn = mysql_connect($dbHost, $dbUser, $dbPass);

if ($dbConn) {
    mysql_select_db($dbDatabase);
	echo "<strong> Success:</strong> You is connected.";
}
else {
    die ("<strong> Error:</strong> Could not connect to database.");
}
?>
