<?php
require_once "load_env.php";

$HOSTNAME = $_ENV["DB_HOST"];
$USERNAME = $_ENV["DB_USERNAME"];
$PASSWORD = $_ENV["DB_PASSWORD"];
$DATABASE = $_ENV["DB_NAME"];

/*
$HOSTNAME = getenv("DB_HOST");
$USERNAME = getenv('DB_USERNAME');
$PASSWORD = getenv('DB_PASSWORD');
$DATABASE = getenv('DB_NAME');
 */

echo $HOSTNAME;
echo $USERNAME;
echo $PASSWORD;
echo $DATABASE;

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($con) {
	echo "Connection successful!";
} else {
	die(mysqli_error($con));
}
?>
